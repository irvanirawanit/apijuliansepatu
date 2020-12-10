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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['buatcors']], function ($router) {

    Route::get('/barangmasuk', 'BarangMasukController@index');
    Route::get('/barangmasuk/{id}', 'BarangMasukController@show');
    Route::post('/barangmasuk', 'BarangMasukController@create');

    Route::get('/barangkeluar', 'BarangKeluarController@index');
    Route::get('/barangkeluar/{id}', 'BarangKeluarController@index');
    Route::post('/barangkeluar', 'BarangKeluarController@index');

    Route::get('/barangreturn', 'BarangReturnController@index');
    Route::get('/barangreturn/{id}', 'BarangReturnController@index');
    Route::post('/barangreturn', 'BarangReturnController@index');

});
