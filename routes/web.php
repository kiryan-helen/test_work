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

Route::get('/', 'AdressController@show_all_adreses');

Route::get('/add_new', 'AdressController@add_new_addres')->name("add");
Route::get('/del/{id}', 'AdressController@del_addres')->name("del");
