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

Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::post('refresh', 'LoginController@refresh');
Route::middleware('auth:api')->post('logout', 'LoginController@logout');

Route::middleware('auth:api')->get('tasks', 'TaskController@index');

Route::get('tasks/{id}', 'TaskController@show');
Route::middleware('auth:api')->post('tasks', 'TaskController@store');
Route::put('tasks/{id}', 'TaskController@update');
Route::delete('tasks/{id}', 'TaskController@destroy');
