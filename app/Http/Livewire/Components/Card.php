<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Card extends Component
{
    public $blog;
    public function render()
    {
        return view('livewire.components.card');
    }
}
