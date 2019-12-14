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





Route::get('/', 'IndexController@index');
Route::get('/reports/create', 'IndexController@create');
Route::get('/reports/{report}', 'IndexController@show');
Route::delete('/reports/{report}', 'IndexController@destroy');
Route::post('/reports', 'IndexController@store');
Route::get('/reports', 'IndexController@destroy');





