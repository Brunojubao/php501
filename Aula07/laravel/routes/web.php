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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routers();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vendas', 'VendasController@index')->name('Vendas');

Route::get('/vendas2',function(){
    return view('vendas');
});