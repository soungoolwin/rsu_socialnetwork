<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class LoadMorePosts extends Component
{
    public $perPage;
    public $page;
    public $isLoadMore = false;

    public function mount($page = null, $perPage = null)
    {
        $this->page = $page ?? 1;
        $this->perPage = $perPage ?? 10;
    }

    public function loadMore()
    {
        $this->page += 1;
        $this->isLoadMore = true;
    }
    public function render()
    {
        if (!$this->isLoadMore) {
            return view('livewire.posts.load-more-posts');
        } else {
            $posts = Post::with('user')->paginate($this->perPage, ['*'], null, $this->page);
            return view('livewire.posts.index', [
                'posts' => $posts
            ]);
        }
    }
}
