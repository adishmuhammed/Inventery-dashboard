<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public  $message =true;
    public $blog = false;
    public $gallery =false;
    public $contactMessages;
    public $galleryMedias;
    public $blogPosts;
    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
