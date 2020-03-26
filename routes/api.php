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

Route::post('/item/create', 'ItemController@store');
Route::get('/item/edit/{id}', 'ItemController@edit');
Route::post('/item/update/{id}', 'ItemController@update');
Route::delete('/item/delete/{id}', 'ItemController@delete');
Route::get('/items', 'ItemController@index');