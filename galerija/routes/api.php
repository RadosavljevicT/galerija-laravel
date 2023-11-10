<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalerijaKontroler;
use App\Http\Controllers\UmetnikKontroler;
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

Route::get('galerija', [GalerijaKontroler::class, 'index']);
Route::get('galerija/{id}', [GalerijaKontroler::class, 'show']);
Route::delete('galerija/{id}', [GalerijaKontroler::class, 'destroy']);
Route::get('umetnik', [UmetnikKontroler::class, 'index']);
Route::get('umetnik/{id}', [UmetnikKontroler::class, 'show']);
Route::put('umetnik/{id}', [UmetnikKontroler::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
