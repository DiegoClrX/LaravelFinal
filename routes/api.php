<?php

use App\Http\Controllers\PlatoController;
use App\Http\Controllers\RestauranteController;
use App\Http\Resources\PlatosResource;
use App\Http\Resources\RestauranteResource;
use App\Models\Plato;
use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::middleware('auth:sanctum')->get('/restaurante', function () {
//     return RestauranteResource::collection(Restaurante::paginate(3));
// });
// Route::middleware('auth:sanctum')->get('/restaurante/{id}', function ($id) {
//     return new RestauranteResource(Restaurante::findOrFail($id));
// });
// Route::middleware('auth:sanctum')->get('/platos/categoria/{id}', function () {
//     return PlatosResource::collection(Plato::paginate(5));
// });
// Route::middleware('auth:sanctum')->get('/platos/{id}', function ($id) {
//     return new RestauranteResource(Restaurante::findOrFail($id));
// });
// Route::middleware('auth:sanctum')->get('/clientes/{dni}', function ($id) {
//     return new RestauranteResource(Restaurante::findOrFail($id));
// });
// Route::middleware('auth:sanctum')->get('/clientes/{dni}/pedidos', function ($id) {
//     return new RestauranteResource(Restaurante::findOrFail($id));
// });
// Route::middleware('auth:sanctum')->get('/clientes/{dni}/pedidos/id', function ($id) {
//     return new RestauranteResource(Restaurante::findOrFail($id));
// });

Route::middleware('auth:sanctum')->post('/restaurante', [RestauranteController::class, 'verRestauranteApi']);
Route::middleware('auth:sanctum')->post('/restaurantes', [RestauranteController::class, 'apiStore']);
Route::middleware('auth:sanctum')->delete('/restaurante/delete/{restaurante}', [RestauranteController::class, 'apiDelete']);

Route::middleware('auth:sanctum')->post('/restaurantes/{id}', [PlatoController::class, 'apiStore']);
Route::middleware('auth:sanctum')->delete('/restaurante/delete/{restaurante}/platos/{id}', [PlatoController::class, 'apiDelete']);
