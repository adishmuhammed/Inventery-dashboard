<?php

namespace App\Http\Livewire\AdminDashboard;

use App\Models\Gallery;
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
        '$video' => 'required'
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
        $gallery = new Gallery;

        if ($this->imageSelected) {
            $gallery->image = $this->image;
        } 
        if ($this->videoSelected) {
            $gallery->video = $this->video;
        }

        $gallery->type = $this->type;
        $gallery->info = $this->info;

        $gallery->save();

        return redirect()->route('home');
    }
}