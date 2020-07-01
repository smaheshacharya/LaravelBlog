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
Route::get('api-data','ApiController@index');

Route::get('api-data/{id}','ApiController@show');
// create new 

Route::post('api-data','ApiController@store');

//update
Route::put('api-data','ApiController@store');
//delete 
Route::delete('api-data/{id}','ApiController@destroy');