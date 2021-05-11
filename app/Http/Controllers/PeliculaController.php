<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function listado($pelicula, $orden='desc')
    {
        return "Estás viendo la peli: $pelicula los comentarios está ordenados de forma $orden";
    }
}
