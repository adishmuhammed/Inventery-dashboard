<?php

namespace App\Http\Livewire\AdminDashboard;

use Livewire\Component;

class MediaEditForm extends Component
{
    public $gallery;

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

    public function mount()
    {
        $this->type = $this->gallery->type;
        if ($this->type == 'image') {
            $this->imageSelected = true;
        } else {
            $this->videoSelected =true;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin-dashboard.media-edit-form');
    }

    public function editMedia()
    {
        if ($this->imageSelected) {
            $this->gallery->image = $this->image;
        } 
        if ($this->videoSelected) {
            $this->gallery->video = $this->video;
        }

        $this->gallery->type = $this->type;
        $this->gallery->info = $this->info;

        $this->gallery->save();

        return redirect()->route('home');
    }
}
