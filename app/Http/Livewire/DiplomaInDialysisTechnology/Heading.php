<?php

namespace App\Http\Livewire\DiplomaInDialysisTechnology;

use Livewire\Component;

class Heading extends Component
{
    public $heading;
    public $university;
    public $fee;
    public function render()
    {
        return view('livewire.diploma-in-dialysis-technology.heading');
    }
}