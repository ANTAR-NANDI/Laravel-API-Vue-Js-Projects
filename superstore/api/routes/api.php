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


Route::get('getdata','DataController@getData');
Route::get('getdata/{id}','DataController@findbyid');
Route::get('get/{title}','DataController@search');