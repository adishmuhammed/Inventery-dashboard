<?php

namespace App\Http\Livewire;

use App\Models\Blogs;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blog;
    public $paragraps;

    public function mount()
    {
        $this->paragraps = preg_split("/\R{2,}/", $this->blog->content);
    }

    public function render()
    {
        return view('livewire.blog-detail');
    }
}