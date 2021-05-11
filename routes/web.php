<?php

use App\Http\Controllers\Back\MovieController as BackMovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // return string
});

Route::get('test', function () {
    return view('test'); // return string
});

Route::get('otra-cosa', function () {
    // lógica
    // dos opciones:
    // 1 - devolver un string (lo que ve el user)
    // 2 - redireccionar hacia otra ruta

    return 'Ejemplo dos';
});

// Parámetros para las urls

Route::get('pelicula/{titulo}', function ($titulo) {
    return $titulo;
});

// Route::get('categorias/{catategoria}', function ($catategoria) {
//     return "$catategoria";
// });

Route::get('categorias/{catategoria}/{subcategoria?}', function ($catategoria, $subcatategoria='') {
    return "$catategoria - $subcatategoria";
});

Route::get('peliculas/{pelicula}/{orden?}', [PeliculaController::class, 'listado']);

// Route::resource('movies', MovieController::class)->only('index');
// Route::resource('movies', MovieController::class)->except('index', 'show');
Route::get('movies/mi-metodo', [MovieController::class, 'miMetodo']);

// -----------------------------------------------------


// ---------------
// -----Front-----
// ---------------
// Route::resource('movies', MovieController::class);

Route::get('genres/{id}', [GenreController::class, 'show']);

// ---------------
// -----Back-----
// ---------------
Route::resource('backend/movies', BackMovieController::class);















