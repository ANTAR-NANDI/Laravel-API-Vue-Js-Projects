<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes//tinker ta kno j
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


Route::post('store','DataController@store');
Route::get('getdata','DataController@getdata');
Route::post('editdata','DataController@edit');
Route::post('login','DataController@login');
Route::get('deletedata/{title}','DataController@deletedata');