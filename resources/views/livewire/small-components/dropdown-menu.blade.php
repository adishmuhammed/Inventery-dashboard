<div class="@php
if($hidden){
        echo 'hidden';
    }else {
        echo 'relative';
    } @endphp"
    x-data="{ open: @entangle('isOpen') }">
    <button @click="open = !open" class=" text-black py-2 rounded">
        Courses
    </button>
    <div x-show="open" @click.away="open = false" class="absolute mt-2 w-48 bg-white rounded shadow-md">
        <ul class="text-gray-700">
            <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('ddt') }}">Diploma in Dialysis Technology</a></li>
            <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('lab-tech') }}">Lab Technician</a></li>
        </ul>
    </div>
</div>
