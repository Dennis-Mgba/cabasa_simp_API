<?php

use Illuminate\Http\Request;

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

// To output list all items in the database thus calling the index method
Route::get('cabasas', 'CabasaController@index');

// To a single email
Route::get('cabasa/{id}', 'CabasaController@show');

// create new  user datail
Route::post('cabasa', 'CabasaController@store');

// update user details
Route::put('cabasa', 'CabasaController@store');

// Delete user details
Route::delete('cabasa/{id}', 'CabasaController@destroy');
