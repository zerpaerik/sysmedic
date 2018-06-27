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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

//*********************Rutas para administrador*********************************

    //Rutas externas módulo de usuarios
	Route::get('/usuarios', function () {return view('usuarios.loginUsuarios');});
	Route::post('/login','usuariosController@login');


    //Rutas internas Módulo de usuarios.
   	Route::get('/', function () {return view('usuarios.panelAdmin');});
	Route::get('/usuarios/panelAdmin', function () {return view('usuarios.panelAdmin');});
	Route::get('/logout','usuariosController@logout');
	

