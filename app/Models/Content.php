<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'release_date',
        'cover_image',
    ];

    protected $casts = [
        'release_date' => 'date',
    ];

    // Content has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Average rating (computed)
    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }
}
