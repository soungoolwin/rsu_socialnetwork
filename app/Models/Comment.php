<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // Define the relationship between Comment and User (Many-to-One)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Define the relationship between Comment and Post (Many-to-One)
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
