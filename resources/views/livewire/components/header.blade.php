<header class="relative z-20 w-full bg-gradient-to-r">
    <nav class="flex md:justify-center justify-around gap-6 items-center p-3" x-data="{ mobileMenuOpen: @entangle('mobileMenuOpen') }">
        <div class="flex items-center gap-3">
            <img class="w-12 bg-white rounded-full" src="{{ asset('images/logo.webp') }}" alt="">
            <h3 class="">Sahayi Dialysis Center</h3>
        </div>
        <a class="hidden md:block no-underline text-center" href="{{ route('home') }}">Home</a>
        <a class="hidden md:block no-underline text-center" href="{{ route('about') }}">About</a>
        <div class="hidden md:block">
            <livewire:small-components.dropdown-menu :items="['Diploma in Dialysis Technology', 'Lab Technician']" heading="Courses" :links[route('ddt'),
                route('lab-tech')] />
        </div>
        <a class="hidden md:block no-underline text-center" href="{{ route('gallery') }}">Gallery</a>
        <a class="hidden md:block no-underline text-center" href="">Blog</a>
        <a class="hidden md:block no-underline text-center" href="">Contact</a>
        <button class="hidden md:block bg-yellow-500 p-2 rounded text-center"> Donate Now</button>
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden block">
            <i class="fas fa-bars text-white"></i>
        </button>

    </nav>
    <div x-data="{ mobileInnerSubMenuOpen: @entangle('mobileInnerSubMenuOpen') }" x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
        class="bg-white rounded-xl border absolute w-screen scale-95 -m-2 text-center">
        <a class="py-3 border-t border-b no-underline block" href="{{ route('home') }}">Home</a>
        <a class="py-3 border-t border-b no-underline block" href="{{ route('about') }}">About</a>
        <button class="py-3 border-t border-b no-underline block w-full hover:text-red-500"
            @click="mobileInnerSubMenuOpen = !mobileInnerSubMenuOpen">
            Cources
        </button>
        <div x-show="mobileInnerSubMenuOpen" @click.away="mobileInnerSubMenuOpen == false" class="text-gray-400">
            <a class="py-3 border-t border-b no-underline block" href="{{ route('ddt') }}">Diploma in Dialysis
                Technology</a>
            <a class="py-3 border-t border-b no-underline block" href="{{ route('lab-tech') }}">Lab Technician</a>
        </div>
        <a class="py-3 border-t border-b no-underline block" href="{{ route('gallery') }}">Gallery</a>
        <a class="py-3 border-t border-b no-underline block" href="">Blog</a>
        <a class="py-3 border-t border-b no-underline block" href="">Contact</a>
    </div>
</header>
