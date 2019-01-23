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
Route::group(['middleware'=> 'auth'], function(){
	// Route::get('/autenticacion/conexion', 'PaginasController@conexion');
	// Route::get('/autenticacion/logout', 'PaginasController@logout');
	Route::get('/catalog/index', 'CatalogController@getIndex')->middleware('auth');
	Route::get('/catalog/show/{id}', 'CatalogController@getShow')->middleware('auth');
	Route::get('/catalog/create', 'CatalogController@getCreate')->middleware('auth');
	Route::get('/catalog/edit/{id}', 'CatalogController@getEdit')->middleware('auth');
	Route::post('/catalog/create', 'CatalogController@postCreate')->middleware('auth');
	Route::put('/catalog/edit/{id}', 'CatalogController@putEdit')->middleware('auth');
});
Route::get('/', 'HomeController@getHome');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
