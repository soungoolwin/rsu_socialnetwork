<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Define the relationship between Post and User (Many-to-One)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Define the relationship between Post and Like (One-to-Many)
    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id', 'id');
    }

    // Define the relationship between Post and Comment (One-to-Many)
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
