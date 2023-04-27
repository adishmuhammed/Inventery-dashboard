<div class="@php
if($hidden){
        echo 'hidden';
    }else {
        echo 'relative';
    } @endphp"
    x-data="{ open: @entangle('isOpen') }">
    <button @click="open = !open" class=" text-black py-2 rounded">
        {{ $heading }}
    </button>
    <div x-show="open" @click.away="open = false"
        class="absolute mt-2 @php
if($fullWidth){
            echo "w-screen";
        } else {
            echo "w-48";
        } @endphp bg-white rounded shadow-md">
        <ul class="text-gray-700">
            @foreach ($items as $item)
                <li class="px-4 py-2 hover:bg-gray-200"><a href="">{{ $item }}</a> </li>
            @endforeach
        </ul>
    </div>
</div>
