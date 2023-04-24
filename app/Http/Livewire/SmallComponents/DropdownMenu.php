<?php

namespace App\Http\Livewire\SmallComponents;

use Livewire\Component;

class DropdownMenu extends Component
{
    public $isOpen = false;
    public $items = [];
    public $heading = 'Dropdown Menu';
    public bool $fullWidth = false;
    public bool $hidden = false;

    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.small-components.dropdown-menu');
    }
}