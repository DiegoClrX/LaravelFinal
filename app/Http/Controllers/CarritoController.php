<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Restaurante;
use Illuminate\Http\Request;
use Cart;
class CarritoController extends Controller
{

    public function add($id) {
        $restauranteCarro = null;

        $plato = Plato::findorfail($id);

        foreach(Cart::getContent() as $item) {
            $platoCarro_id = $item->id;
            $platoCarro = Plato::find($platoCarro_id);
            $restauranteCarro = $platoCarro->restaurante_id;
            $restaurante = Restaurante::find($restauranteCarro);
        }

        if(!empty($restauranteCarro)){
            if($plato->restaurante_id != $restaurante->id)
                return redirect()->back()->withErrors(['No puedes añadir platos de diferentes restaurantes']);
                }

        Cart::add(
            $plato->id,
            $plato->nombre,
            $plato->precio,
            1,
            array('urlFoto'=>$plato->foto)
        );


        return redirect()->back()->withErrors(['Añadido correctamente']);

    }


    public function check() {
        return view('theUnion.carrito');

    }

    public function delete(Request $request) {
        Cart::remove(['id' => $request->id]);
        return redirect()->back();
    }

}
