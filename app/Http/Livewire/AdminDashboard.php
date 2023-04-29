<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public  $message;
    public $blog;
    public $gallery;
    public $contactMessages;
    public $galleryImages;
    public $galleryVideos;
    public $blogPosts;
    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
