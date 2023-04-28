<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;
    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::orderBy('created_at', 'desc')
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.homepage.blogs', compact('blogs'));
    }
}