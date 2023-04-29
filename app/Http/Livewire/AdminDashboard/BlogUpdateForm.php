<?php

namespace App\Http\Livewire\AdminDashboard;

use Livewire\Component;
use Livewire\WithFileUploads;

class BlogUpdateForm extends Component
{
    use WithFileUploads;

    public $blog;
 
    public $blog_title;
    public $blog_image;
    public $blog_content;
    public $blog_tags;

    protected $rules = [
        'blog_title' => 'required|min:6',
        'blog_image' => 'required|image|max:526',
        '$blog_content' => 'required',
        '$blog_tags' => 'required'
    ];

    public function mount()
    {
        $this->blog_title = $this->blog->blog_title;
        $this->blog_image = $this->blog->blog_image;
        $this->blog_content = $this->blog->blog_content;
        $this->blog_tags = $this->blog->blog_tags;
    }
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function updateBlog()
    {
        $this->validate();
        
        $path = $this->blog_image->store('blog_images');

        // fill blog model with request
        $blog = $this->blog;
        $blog->blog_title = $this->blog_title;
        $blog->blog_content = $this->blog_content;
        $blog->blog_tags = $this->blog_tags;
        $blog->blog_image = $path;
        $blog->save();

        return redirect()->route('admin');
    }
}
