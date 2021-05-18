<?php

use App\Http\Controllers\Api\MovieController;
use App\Http\Resources\MovieResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function () {
    return request()->user();
});

Route::middleware('auth:api')->get('/profile/movies', function () {
    $movies = request()->user()->movies;

    return MovieResource::collection($movies);
});

Route::get('movies', [MovieController::class, 'index']);
