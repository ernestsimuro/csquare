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


Route::get('/', 'BackpackController@index');
Route::get('/index', 'BackpackController@index');
Route::get('/add', 'BackpackController@showBackpackAdd' );
Route::get('/my_create', 'BackpackController@create' );
Route::get('/remove', 'BackpackController@getBackpackItem' );
Route::get('/my_delete', 'BackpackController@destroy' );
Route::get('/find', 'BackpackController@showBackpackFind' );
Route::get('/my_find', 'BackpackController@show' );