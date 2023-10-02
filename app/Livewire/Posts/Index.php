<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $posts;
    public function render()
    {
        $this->posts = Post::inRandomOrder()->get();
        return view('livewire.posts.index', [
            'posts' => $this->posts
        ]);
    }
    public function updateFeed()
    {
        $this->posts = Post::inRandomOrder()->get();
    }
}
