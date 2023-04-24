<header class="absolute z-20 w-full">
    <nav class="flex justify-around items-centerc p-3">
        <div class="w-56">
            <img class="w-12" src="{{ asset('images/logo.png') }}" alt="">
            <h3 class="text-white">Sahayi Dialysis Center</h3>
        </div>
        <a class="hidden md:block no-underline text-white text-center" href="">Home</a>
        <a class="hidden md:block no-underline text-white text-center" href="">About</a>
        <livewire:small-components.dropdown-menu :items="['Deploma in Dialysis Technology', 'Lab Technician']" heading="Cources" :fullWidth="true" />
        <a class="hidden md:block no-underline text-white text-center" href="">Home</a>
        <a class="hidden md:block no-underline text-white text-center" href="">Home</a>
        <a class="hidden md:block no-underline text-white text-center" href="">Home</a>
        <button wire:click='openMenu()'> <i class="fa fa-bars text-white" aria-hidden="true"></i> </button>
        <div class="@php
            if($mobileMenuOpen){
                echo 'block';
            } else {
                echo 'hidden';
            }
        @endphp "></div>
    </nav>
</header>
