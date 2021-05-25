<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    // --- Config ---
    protected $fillable = [
        'price',
        'movie',
        'movie_id',
        'sale_id',
    ];

    protected $casts = [
        'movie' => 'array'
    ];

    public $timestamps = false;

    // --- Relationships ---
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
