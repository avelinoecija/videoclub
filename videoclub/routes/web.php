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


Route::get('/', function() {
	return view('home');
});


Route::get('/nosotros', 'PaginasController@nosotros');
Route::get('/contacto', 'PaginasController@contacto');
Route::get('/welcome', 'PagesController@welcome');
Route::get('/autenticacion/conexion', 'PaginasController@conexion');
Route::get('/autenticacion/logout', 'PaginasController@logout');
Route::get('/catalog/index', 'CatalogController@getIndex');
Route::get('/catalog/show/{id}', 'CatalogController@getShow');
Route::get('/catalog/create', 'CatalogController@getCreate');
Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
Route::get('/', 'HomeController@getHome');


