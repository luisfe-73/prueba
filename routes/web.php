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
Auth::routes();

Route::group(['middleware' => 'auth'], function(){
   Route::get('/', 'HomeController@index')->name('home');
   Route::resource('users', 'Admin\UsersController', ['except' => 'show']);
   Route::resource('jugadores', 'Admin\JugadoresController', ['except' => 'show']);
   Route::resource('equipos', 'Admin\EquiposController');
   Route::resource('plantillas', 'Admin\PlantillasController', ['except' => 'index']);
   Route::resource('encuentros', 'Web\EncuentrosController');
   Route::resource('partidos', 'Web\PartidosController');
   Route::resource('graficos', 'Web\GraficosController');
   Route::resource('ligas', 'Auxiliares\Ligas\LigasController', ['except' => 'show']);
   Route::resource('nombreequipos', 'Auxiliares\Nombreequipos\NombreequiposController', ['except' => 'show']);
   Route::resource('poblaciones', 'Auxiliares\Poblaciones\PoblacionesController', ['except' => 'show']);
   Route::resource('rivales', 'Auxiliares\Rivales\RivalesController', ['except' => 'show']);
   Route::resource('temporadas', 'Auxiliares\Temporadas\TemporadasController', ['except' => 'show']);
});
