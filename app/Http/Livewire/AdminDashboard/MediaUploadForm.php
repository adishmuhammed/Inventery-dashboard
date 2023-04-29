<?php

namespace App\Http\Livewire\AdminDashboard;

use Livewire\Component;

class MediaUploadForm extends Component
{
    public $image;
    public $video;
    public $type;
    public $info;

    public $imageSelected = false;
    public $videoSelected = false;
    
    protected $rules = [
        'image' => 'required|image|max:526',
        '$video' => 'required',
        '$blog_tags' => 'required'
    ];
 

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin-dashboard.media-upload-form');
    }

    public function uploadMedia()
    {
        if ($this->imageSelected) 
        {
            
        }
    }
}
