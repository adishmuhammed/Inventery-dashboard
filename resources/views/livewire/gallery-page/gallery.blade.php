<div>
    <div class="flex justify-center align-middle p-3 gap-3">
        <button {{ allButton }} class="bg-cyan-500 text-white active:bg-teal-600 rounded p-3"
            wire:click="$set('filter', 'all')">All</button>
        <button {{ imagesButton }} class="bg-cyan-500 text-white active:bg-teal-600 rounded p-3"
            wire:click="$set('filter', 'images')">Images</button>
        <button {{ videosButton }} class="bg-cyan-500 text-white active:bg-teal-600 rounded p-3"
            wire:click="$set('filter', 'videos')">Videos</button>
    </div>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($galleryItems as $item)
            <div>
                @if (strpos($item['url'], 'youtube') !== false)
                    <iframe width="100%" height="300" src="{{ $item['url'] }}" frameborder="0"
                        allowfullscreen></iframe>
                @else
                    <img src="{{ $item['url'] }}" width="100%" alt="{{ $item['category'] }}">
                @endif
            </div>
        @endforeach
    </div>
</div>
