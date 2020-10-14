<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view ('welcome');
});

//COMPACT
/*Route::get('/comentarios/{usuario}', function ($usuario) {
    return view('comentarios', compact('usuario'));
})->where('usuario', '[a-zA-z]+');
//WITH
/*Route::get('/comentarios/{usuario}', function ($usuario) {
    return view('comentarios')->with('usuario', $usuario);
})->where('usuario', '[a-zA-z]+');*/
//ARREGLO
/*Route::get('/comentarios/{usuario}', function ($usuario) {
    return view('comentarios', ['usuario' => $usuario]);
})->where('usuario', '[a-zA-z]+');*/

//ENRUTAMIENTO
/*Route::get('/comentarios', function () {
    return "Comentarios :D";
});
//PARAMETROS REQUERIDOS
Route::get('/comentarios/{usuario}', function ($usuario) {
    return "Comentario de usuario : " . $usuario;
});

Route::get('/comentarios/{id}', function ($id) {
    return "Comentario de usuario con su id : " . $id;
})->where('id', '[a-z]+');

Route::get('/comentarios/{id}', function ($id) {
    return "Comentario de usuario con su id : " . $id;
})->where('id', '[a-z0-9A-Z]+');

Route::get('/comentarios/{id?}', function ($id = null) {
    return "Comentario de usuario con su id : " . $id;
})->where('id', '[0-9]+');*/

/*Route::get('saludo', function () {
    return view ('welcome');
});*/

Route::get('saludo/{nombre}', 'Homecontroller@Redireccionar');