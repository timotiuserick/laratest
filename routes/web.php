<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@welcome');
Route::get('about', 'PagesController@about');


Route::resource('artists', 'ArtistsController');

Route::get('dota', 'ApiController@dota');
Route::get('foursquare', 'ApiController@foursquare');

Route::resource('todo', 'ToDoController');

Route::get('upload', 'TodoController@uploadForm');
Route::post('upload/store', 'TodoController@upload');
Route::get('upload/show', 'TodoController@showUploadedImage');
