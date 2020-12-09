<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/barangmasuk', 'BarangMasukController@index');
Route::post('/barangmasuk', 'BarangMasukController@create');

Route::get('/barangkeluar', 'BarangKeluarController@index');
Route::get('/barangkeluar/{id}', 'BarangKeluarController@index');
Route::post('/barangkeluar', 'BarangKeluarController@index');

Route::get('/barangreturn', 'BarangReturnController@index');
Route::get('/barangreturn/{id}', 'BarangReturnController@index');
Route::post('/barangreturn', 'BarangReturnController@index');
