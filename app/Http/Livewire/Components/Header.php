<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public $mobileMenuOpen = false;
    public function openMenu()
    {
        $this->mobileMenuOpen = true;
        if ($this->mobileMenuOpen) {
            $this->mobileMenuOpen = false;
        }
    }
    public function render()
    {
        return view('livewire.components.header');
    }
}