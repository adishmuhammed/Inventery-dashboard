<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public $mobileMenuOpen = false;
    public $mobileInnerSubMenuOpen = false;
    public function render()
    {
        return view('livewire.components.header');
    }
}