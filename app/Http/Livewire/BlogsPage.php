<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class BlogsPage extends Component
{
    use WithPagination;

    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::latest()->paginate(12);
    }
    
    public function render()
    {
        return view('livewire.blogs-page')->with('blogs', $this->blogs);
    }
}
