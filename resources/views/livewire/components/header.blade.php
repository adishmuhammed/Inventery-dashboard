<header class="relative z-20 w-full bg-gradient-to-r" x-data="{ mobileMenuOpen: @entangle('mobileMenuOpen') }">
    <nav class="flex md:justify-center justify-around gap-6 items-center p-3" x-data="{ open: @entangle('isOpen') }">
        <div class="flex items-center gap-3 pl-3">
            <img class="w-8 bg-white rounded-full" src="{{ asset('images/logo.webp') }}" alt="">
            <h3 class="capitalize">Sahayi Dialysis Center</h3>
        </div>
        <a class="hidden md:block no-underline text-center" href="{{ route('home') }}">Home</a>
        <a class="hidden md:block no-underline text-center" href="{{ route('about') }}">About</a>
        <button @click="open = !open" class=" text-black hover:text-red-400 py-2 rounded hidden md:block">
            Courses
        </button>
        <div x-show="open" @click.away="open = false" class="absolute top-20 mt-2 w-48 bg-white rounded shadow-md">
            <ul class="text-gray-700">
                <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('ddt') }}">Diploma in Dialysis
                        Technology</a></li>
                <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('lab-tech') }}">Lab Technician</a></li>
            </ul>
        </div>
        <a class="hidden md:block no-underline text-center" href="{{ route('gallery') }}">Gallery</a>
        <a class="hidden md:block no-underline text-center" href="">Blog</a>
        <a class="hidden md:block no-underline text-center" href="">Contact</a>
        <button class="hidden md:block bg-yellow-500 p-2 rounded text-center"> Donate Now</button>
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden block">
            <i class="fa fa-bars text-black"></i>
        </button>
    </nav>
    <div x-data="{ mobileInnerSubMenuOpen: @entangle('mobileInnerSubMenuOpen') }" x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
        class="flex justify-center">
        <div class="bg-white rounded-xl border absolute w-screen scale-95 -m-2 text-center">
            <a class="py-3 border-t border-b no-underline block" href="{{ route('home') }}">Home</a>
            <a class="py-3 border-t border-b no-underline block" href="{{ route('about') }}">About</a>
            <button class="py-3 border-t border-b no-underline block w-full hover:text-red-500"
                @click="mobileInnerSubMenuOpen = !mobileInnerSubMenuOpen">
                Cources
            </button>
            <div x-show="mobileInnerSubMenuOpen" @click.away="mobileInnerSubMenuOpen = false" class="text-gray-400">
                <a class="py-3 border-t border-b no-underline block" href="{{ route('ddt') }}">Diploma in Dialysis
                    Technology</a>
                <a class="py-3 border-t border-b no-underline block" href="{{ route('lab-tech') }}">Lab Technician</a>
            </div>
            <a class="py-3 border-t border-b no-underline block" href="{{ route('gallery') }}">Gallery</a>
            <a class="py-3 border-t border-b no-underline block" href="">Blog</a>
            <a class="py-3 border-t border-b no-underline block" href="">Contact</a>
        </div>
    </div>
</header>
