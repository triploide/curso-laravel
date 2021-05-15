<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    // --- Config ---
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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // --- Relationships ---
    public function genre()
    {
        return $this->belongsTo(Genre::class)->withTrashed(); // una solo género
    }
}
