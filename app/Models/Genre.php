<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // protected $table = 'generos';

    public function peliculas()
    {
        return $this->hasMany(Movie::class); // muchas pelis (collection)
    }
}
