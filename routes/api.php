<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\RecargaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\InspeccionController;
use App\Http\Controllers\ExtintorController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('saludar', function(){
    return json_encode (['msg'=> 'Bienvenido']);
});

Route::apiResource('users', UserController::class);

Route::apiResource('ubicaciones', UbicacionController::class);

Route::apiResource('tipos', TipoController::class);

Route::apiResource('recargas', RecargaController::class);

Route::apiResource('proveedores', ProveedorController::class);

Route::apiResource('inspecciones', InspeccionController::class);

Route::apiResource('extintores', ExtintorController::class);





