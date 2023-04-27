<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class PageStart extends Component
{
    public string $title;
    public function render()
    {
        return view('livewire.components.page-start');
    }
}
