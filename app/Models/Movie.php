<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'rating',
        'genre_id',
    ];

    protected $dates = [
        'release_date'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class); // una solo género
    }
}
