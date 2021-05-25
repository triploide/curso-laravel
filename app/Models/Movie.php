<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    use FormAccessible;

    // --- Config ---
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'rating',
        'price',
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

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function banner()
    {
        return  $this->morphOne(Image::class, 'imageable');
    }

    // --- Getters & Setters ---
    public function formReleaseDateAttribute()
    {
        return $this->release_date->format('Y-m-d');
    }
}
