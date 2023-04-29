<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    public $blogs;

    public function mount()
    {
        $this->blogs = \App\Models\Blogs::orderBy('created_at', 'desc')
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.homepage.blogs');
    }
}