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

Route::get('registro', 'UsuariosController@registro')->name('usuarios.registro');
Route::post('registrar', 'UsuariosController@registrar')->name('usuarios.registrar');


 Route::get('home','UsuariosController@home')->name('usuarios.home');

Route::resource('usuarios','UsuariosController');
 Route::resource('libros','LibrosController');




	

	
Route::get('login', 'UsuariosController@login')->name('usuarios.login');
Route::post('logear', 'UsuariosController@logear')->name('usuarios.logear');
Route::get('logout', 'UsuariosController@logout')->name('usuarios.logout');


Route::get('suscripciones/suscribirse', 'SuscripcionController@suscribirse')->name('suscripciones.suscribirse');
Route::get('suscripciones/{id}/suscribir', 'SuscripcionController@suscribir')->name('suscripciones.suscribir');
Route::get('suscripciones/suscritos', 'SuscripcionController@suscritos')->name('suscripciones.suscritos');
Route::get('descargar/{id}/', 'SuscripcionController@descargar')->name('suscripciones.descargar');



Route::delete('/eliminar-usuario/{id}','UsuariosController@destroyUsuario')->name('destroyUsuario');