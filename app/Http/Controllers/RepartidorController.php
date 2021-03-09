<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Repartidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::where('estado','=','finalizado')->paginate(5);
        return view('intranet.repartidor', ['pedidos' => $pedidos]);
    }

    public function agenciarRepartidor($id){
        $pedidos = Pedido::where('numPedido','=',$id)->paginate(5);
        foreach($pedidos as $pedido){
            $pedido->user_id = $pedido->user_id;
            $pedido->restaurante_id = $pedido->restaurante_id;
            $pedido->platos_id = $pedido->platos_id;
            $pedido->repartidor_id = Auth::id();
            $pedido->estado = 'En Reparto';
            $pedido->cantidad = $pedido->cantidad;
            $pedido->numPedido = $pedido->numPedido;
            $pedido->save();
        }

        return redirect()->action(
            [pedidoController::class, 'index']
        );
    }

    public function verMisPedidos(){
        $pedidos = Pedido::where('repartidor_id','=',Auth::id())->paginate(5);
        return view('intranet.repartidor.verMisPedidos', ['pedidos' => $pedidos]);
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
        //
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
    public function destroy($id)
    {
        $pedidos = Pedido::where('numPedido','=',$id)->paginate(5);
        foreach($pedidos as $pedido){
            $this->authorize('delete', $pedido);
            $pedido->delete();
        }


        return redirect()->action(
            [RepartidorController::class, 'index']
        );
    }
}
