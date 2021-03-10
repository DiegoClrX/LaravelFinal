<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Plato;
use App\Models\Restaurante;
use App\Http\Controllers\TheUnionController;
use App\Mail\pedidoEmailSend;
use App\Models\Repartidor;
use App\Models\User;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

class PedidoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // public function verPedidosRestaurante($id){
    //     $pedidos = Pedido::where('restaurante_id','=',$id)->where('estado', '=', 'realizado')->paginate(5);
    //     return view('intranet.numPedido', ['pedidos' => $pedidos]);
    // }

    public function verPedidosNumero($id){
        $pedidos = Pedido::where('restaurante_id','=',$id)->where('estado', '=', 'realizado')->paginate(5);
        return view('intranet.pedidos', ['pedidos' => $pedidos, 'restaurante_id'=>$id]);
    }

    public function actualizarPedidoRealizado($id){
        $pedido = Pedido::find($id);
        $restaurante = $pedido->restaurante_id;
        $repartidor = User::where('estado','=','libre')->paginate(5);
        if(!(empty($repartidor[0]))){
            $pedido->user_id = $pedido->user_id;
            $pedido->restaurante_id = $pedido->restaurante_id;
            $pedido->repartidor_id = $repartidor[0]->id;
            $pedido->estado = 'finalizado';
            $pedido->save();

            $repartidor[0]->estado = 'ocupado';
            $repartidor[0]->save();

        return redirect()->action(
            [PedidoController::class, 'verPedidosNumero'], ['id'=>$restaurante]
        );
        }
        else{
            return redirect()->back()->withErrors(['Todos los repartidores estan ocupados pruebe mas tarde']);
        }
    }



    public function verPedidosCliente($id){
        $pedidos = Pedido::where('user_id','=',$id)->paginate(7);
        return view('intranet.clientes.pedidos', ['pedidos'=>$pedidos]);
    }

    public function verPlatosPedido($id){
        $pedido = Pedido::find($id);
        $platos = $pedido->platos;
        $restaurante_id = $pedido->restaurante_id;
        return view('intranet.pedido.platos', ['platos'=>$platos, "restaurante_id"=>$restaurante_id]);
    }

    public function verPlatoPedidoCliente($id){
        $pedido = Pedido::find($id);
        $platos = $pedido->platos;
        return view('intranet.clientes.platos', ['platos'=>$platos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrito = $request->all();
            $id = Auth::id();
            $user = User::find($id);

            foreach($carrito as $producto){
                    $valores = explode(" ", $producto);
                    $plato = Plato::find($valores[0]);
                    $pedido = new Pedido;
                    $pedido->user_id = Auth::id();
                    $pedido->restaurante_id = $plato->restaurante_id;
                    $pedido->repartidor_id = null;
                    $pedido->estado = 'realizado';
                    $pedido->save();
                    $pedido->platos()->attach($pedido->id, ['cantidad' => $valores[1], 'platos_id' => $plato->id]);
                    $valores = null;
                }

                // Mail::to($user->email)->send(new pedidoEmailSend($user));

        return redirect()->action(
            [TheUnionController::class, 'verRestaurantes']
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($numPedido)
    {
     //
    }
}
