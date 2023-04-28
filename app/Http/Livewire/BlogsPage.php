<?php

namespace App\Http\Livewire;

use App\Models\Blogs;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsPage extends Component
{
    use WithPagination;

    protected $blogs;

    public function mount()
    {
        $this->blogs = Blogs::latest()->paginate(12);
    }

    public function render()
    {
        return view('livewire.blogs-page')->with('blogs', $this->blogs);
    }
}