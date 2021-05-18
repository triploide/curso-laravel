<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    // --- Config ---
    protected $fillable = [
        'movie_id',
    ];

    // --- Relationships ---
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class)->withTrashed();
    }
}
