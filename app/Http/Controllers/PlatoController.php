<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


    }

    public function verPlatosRestaurant($id){
            $platos = Plato::where('restaurante_id','=',$id)->paginate(5);
            return view('intranet.platos', ['platos' => $platos, 'restaurante_id'=>$id]);

    }

    public function verPorCategoria($restaurante_id, $categoria){
             }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada = $request->all();

        $nombre = $entrada['restaurante_id'] . "-" . $request->file('foto')->getClientOriginalName();
        $request->foto->storeAs('/plato/img', $nombre);

        $plato = new Plato;
        $plato->nombre = $entrada['nombre'];
        $plato->descripcion = $entrada['descripcion'];
        $plato->foto = $nombre;
        $plato->precio = $entrada['precio'];
        $plato->categoria = $entrada['categoria'];
        $plato->restaurante_id = $entrada['restaurante_id'];
        $plato->save();

        return redirect()->action(
            [PlatoController::class, 'verPlatosRestaurant'],['id'=>$entrada['restaurante_id']]
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
        return view('intranet.platos.nuevo', $id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plato = Plato::find($id);
        return view('intranet.platos.update')->with('plato', $plato);
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
        $entrada = $request->all();
        $plato = Plato::find($id);
        $nombre = $entrada['restaurante_id'] . "-" . $request->file('foto')->getClientOriginalName();
        $request->foto->storeAs('/plato/img', $nombre);

        $plato->nombre = $entrada['nombre'];
        $plato->descripcion = $entrada['descripcion'];
        $plato->foto = $nombre;
        $plato->precio = $entrada['precio'];
        $plato->categoria = $entrada['categoria'];
        $plato->restaurante_id = $entrada['restaurante_id'];
        $plato->save();

        return redirect()->action(
            [PlatoController::class, 'verPlatosRestaurant'],['id'=>$request->restaurante_id]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plato $plato)
    {
        $restaurante_id = $plato->restaurante_id;
        $plato->delete();

        return redirect()->action(
            [PlatoController::class, 'verPlatosRestaurant'],['id'=>$restaurante_id]
        );
    }
}
