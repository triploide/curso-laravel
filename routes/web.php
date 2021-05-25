<?php

use App\Http\Controllers\Back\MovieController as BackMovieController;
use App\Http\Controllers\Front\GenreController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MovieController;
use App\Http\Controllers\Front\SaleController;
use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome'); // return string
// });

Route::get('test', function () {
    return view('test'); // return string
})->name('admin.home');

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
Route::group(['as' => 'front.'], function () {
    // Home
    Route::get('/', [HomeController::class, 'index']);

    Route::view('nueva-vista', 'front.test.index');

    // Movies
    Route::resource('movies', MovieController::class);

    Route::get('genres/{id}', [GenreController::class, 'show'])->middleware('auth');

    // Sales
    Route::post('buy', [SaleController::class, 'buy'])->middleware('auth');
});


// ---------------
// -----Back-----
// ---------------
Route::group(['prefix' => 'backoffice', 'as' => 'admin.', 'middleware' => 'auth:admin'], function () {
    Route::resource('movies', BackMovieController::class);
});















