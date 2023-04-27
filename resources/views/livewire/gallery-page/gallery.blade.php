<div>
    <div class="mb-3">
        <button wire:click="$set('filter', 'all')">All</button>
        <button wire:click="$set('filter', 'images')">Images</button>
        <button wire:click="$set('filter', 'videos')">Videos</button>
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
