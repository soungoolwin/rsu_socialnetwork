<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = Post::inRandomOrder()->with('user')->limit(10)->get();
        return view('livewire.posts.index', [
            'posts' => $this->posts
        ]);
    }
    public function updateFeed()
    {
        $this->posts = Post::inRandomOrder()->with('user')->limit(10)->get();
    }
}
