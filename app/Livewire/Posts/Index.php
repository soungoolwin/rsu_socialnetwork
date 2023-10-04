<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;


class Index extends Component
{
    public $perPage;
    public $page;

    public function mount($page = null, $perPage = null)
    {
        $this->page = $page ?? 1;
        $this->perPage = $perPage ?? 10;
    }

    public function render()
    {
        $products = Post::with('user')->paginate($this->perPage, ['*'], null, $this->page);

        return view('livewire.posts.index', [
            'posts' => $products
        ]);
    }
}
