<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TheUnionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verRestaurantes()
    {
        $restaurantes = Restaurante::paginate(12);

        return view('theUnion.restaurantes', ['restaurantes' => $restaurantes ]);
    }

    public function verRestaurantePlatos($id)
    {
        $restaurante = Restaurante::find($id);
        $platos = Plato::where('restaurante_id','=',$restaurante->id)->paginate(10);
        return view('theUnion.platos', ['restaurante' => $restaurante, 'platos'=>$platos ]);
    }
    public function verPorCategoria($restaurante_id, $categoria)
    {
        $restaurante = Restaurante::find($restaurante_id);
        $platos = Plato::where('restaurante_id','=',$restaurante_id)->where('categoria', '=',$categoria)->paginate(10);
        return view('theUnion.platos', ['restaurante' => $restaurante, 'platos'=>$platos ]);
    }

    public function acercaDelRestaurante($id){
        $restaurante = Restaurante::findorfail($id);
        return view('theUnion.acercaDe', ['restaurante' => $restaurante]);
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
        //
    }
}
