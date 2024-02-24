<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content_id',
        'rating',
        'body',
    ];

    // Review belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Review belongs to content
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
