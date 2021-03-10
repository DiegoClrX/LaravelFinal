<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(5);
        return view('intranet.clientes', ['usuarios'=>$usuarios]);
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
        // $usuario = User::find($id);
        $usuario = User::find($id);
        return view('intranet.clientes.update',['usuarios'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->address = $request->address;
        $usuario->city = $request->city;
        $usuario->movil = $request->movil;
        $usuario->dni = $request->dni;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->user_id = $id;
        $usuario->save();

        return redirect()->action(
            [UsuarioController::class, 'index']
        );
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

        $usuario = User::findOrFail($id);

        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->address = $request->address;
        $usuario->city = $request->city;
        $usuario->movil = $request->movil;
        $usuario->dni = $request->dni;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->action(
            [UsuarioController::class, 'index']
        );
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
