<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\RestauranteController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\TheUnionController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');  //No se debería poder hacer pedidos, página estática
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Rutas de la INTRANET
Route::prefix('intranet')->middleware('auth')->group(function () {

    Route::group(['middleware' => 'role:grestaurante', 'prefix' => 'restaurante'], function() {
        //Restaurantes
        Route::resource('restaurante', RestauranteController::class);

        //Platos
        Route::resource('platos', PlatoController::class);
        Route::get('/restaurante/{id}/platos', [PlatoController::class, 'verPlatosRestaurant']);

        //Ver pedidos del restaurante
        Route::get('/pedido/{id}/verPedidos', [PedidoController::class, 'verPedidosNumero'])->name('restaurante.verPedidos');
        Route::get('/pedido/{id}/verPlatos', [PedidoController::class, 'verPlatosPedido'])->name('restaurante.verPlatos');

        Route::get('/pedido/{numPedido}/actualizar', [PedidoController::class, 'actualizarPedidoRealizado'])->name('pedido.actualizarEstado');
        //Ver pedido por numero
        Route::get('/pedido/{numPedido}', [PedidoController::class, 'verPedidosNumero']);

    });

    Route::group(['middleware' => 'role:cliente', 'prefix' => 'cliente'], function() {
        Route::get('/', function () {
            return view('intranet.clientes');
        });
        Route::resource('usuarios', UsuarioController::class);
        Route::get('/pedido/{id}', [PedidoController::class, 'verPedidosCliente'])->name('pedido.cliente');

    });

    // Solo ve los pedidos
    Route::group(['middleware' => 'role:repartidor', 'prefix' => 'repartidor'], function() {
        Route::get('/', function () {
            return view('intranet.repartidores');
        });
        Route::resource('repartidor', RepartidorController::class);
        Route::get('/agenciar/{id}',[RepartidorController::class, 'agenciarRepartidor'])->name('pedidos.agenciar');
        Route::get('/misPedidos',[RepartidorController::class, 'verMisPedidos'])->name('repartidor.misPedidos');
    });

});


// RUTAS WEB PRINCIPAL (El cliente viene aquí directo desde el login)
Route::prefix('/theUnion')->middleware('auth')->group(function () {

    //Web principal
    Route::get('/restaurantes', [TheUnionController::class, 'verRestaurantes'])->name('restaurante.vista');
    Route::get('/restaurantes/{id}', [TheUnionController::class, 'getRestauranteDetalle']);
    Route::get('/restaurantes/{id}/platos', [TheUnionController::class, 'verRestaurantePlatos']);
    Route::get('/restaurantes/{id}/platos/{categoria}', [TheUnionController::class, 'verPorCategoria'])->name('plato.categoria');

    //Acerca del Restaurante
    Route::get('/restaurantes/{id}/acercaDe',[TheUnionController::class,'acercaDelRestaurante'])->name('restaurante.acercaDe');
    //Carrito
    Route::get('/carrito/add/{id}', [CarritoController::class, 'add']);
    Route::get('/carrito/checkout', [CarritoController::class, 'check'])->name('cart.checkout');
    Route::post('/carrito/delete', [CarritoController::class, 'delete'])->name('cart.delete');

    //Pedidos
    Route::get('/pedido/store', [PedidoController::class, 'store']);

});

