<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestauranteResource;
use App\Models\Restaurante;
use App\Models\User;
use App\Http\Middleware\CheckRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        if ($user->role->role == "admin") {
            $restaurantes = Restaurante::paginate(5);
        } else {
            $restaurantes = Restaurante::where('user_id','=',Auth::id())->paginate(5);
        }
        return view('intranet.restaurante', ['restaurantes' => $restaurantes ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.restaurante');
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

        $nombre = Auth::id(). "-" . $request->file('foto')->getClientOriginalName();
        $request->foto->storeAs('/restaurantes/img', $nombre);

        $restaurante = new Restaurante;
        $restaurante->nombre = $entrada['name'];
        $restaurante->direccion = $entrada['address'];
        $restaurante->ciudad = $entrada['city'];
        $restaurante->telefono = $entrada['telefono'];
        $restaurante->foto = $nombre;
        $restaurante->longitud = $entrada['longitud'];
        $restaurante->latitud = $entrada['latitud'];
        $restaurante->user_id = Auth::id();
        $restaurante->save();

        return redirect()->action(
            [RestauranteController::class, 'index']
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
        $restaurante = Restaurante::find($id);
        return view('intranet.restaurante.nuevo')->with('restaurante', $restaurante);
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
        $restaurante = Restaurante::findOrFail($id);

        $restaurante->nombre = $request->name;
        $restaurante->direccion = $request->address;
        $restaurante->ciudad = $request->city;
        $restaurante->telefono = $request->telefono;
        $restaurante->longitud = $request->longitud;
        $restaurante->latitud = $request->latitud;
        $restaurante->user_id = Auth::id();
        $restaurante->save();

        return redirect()->action(
            [RestauranteController::class, 'index']
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurante $restaurante)
    {
        $this->authorize('delete', $restaurante);
        $restaurante->delete();

        return redirect()->action(
            [RestauranteController::class, 'index']
        );
    }

    //*****************************************/
    // METODOS API
    //*****************************************/

    public function verRestauranteApi(){
        $restaurante = Restaurante::all();
        return json_encode(array(
            'status'=>150,
            'response'=>$restaurante
        ));
    }

    public function apiStore(Request $request)
    {
        $restaurante = new Restaurante;
        $restaurante->nombre = $request->nombre;
        $restaurante->direccion = $request->direccion;
        $restaurante->ciudad = $request->ciudad;
        $restaurante->telefono = $request->telefono;
        $restaurante->longitud = $request->longitud;
        $restaurante->latitud = $request->latitud;
        $restaurante->user_id = Auth::id();  //TO-DO PASSPORT
        $restaurante->save();

        //En lugar de devolver una vista, devuelvo si se ha realizado la acción
        return response(['restaurante' => new RestauranteResource($restaurante),
                             'message' => 'Created successfully'], 201);

    }
    public function apiDelete(Restaurante $restaurante)
    {
        $this->authorize('delete', $restaurante);
        $restaurante->delete();

        return response(['message' => 'Deleted successfully'], 201);
    }
}
