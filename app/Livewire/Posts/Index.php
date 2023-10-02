<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $users;
    public function render()
    {
        $this->users = User::inRandomOrder()->with('posts')->get();
        return view('livewire.posts.index', [
            'users' => $this->users
        ]);
    }
    public function updateFeed()
    {
        $this->users = User::inRandomOrder()->get();
    }
}
