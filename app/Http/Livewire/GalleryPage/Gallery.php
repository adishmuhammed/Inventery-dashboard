<?php

namespace App\Http\Livewire\GalleryPage;

use Livewire\Component;

class Gallery extends Component
{
    public $images;
    public $videos;
    public $filter;

    public function mount()
    {
        // Fetch images and videos from database or external source
        $this->images = [
            ['url' => 'https://example.com/image1.jpg', 'category' => 'Nature'],
            ['url' => 'https://example.com/image2.jpg', 'category' => 'City'],
            ['url' => 'https://example.com/image3.jpg', 'category' => 'Nature'],
            ['url' => 'https://example.com/image4.jpg', 'category' => 'City'],
            ['url' => 'https://example.com/image5.jpg', 'category' => 'Nature'],
        ];

        $this->videos = [
            ['url' => 'https://www.youtube.com/embed/VIDEO_ID_1', 'category' => 'Nature'],
            ['url' => 'https://www.youtube.com/embed/VIDEO_ID_2', 'category' => 'City'],
            ['url' => 'https://www.youtube.com/embed/VIDEO_ID_3', 'category' => 'Nature'],
            ['url' => 'https://www.youtube.com/embed/VIDEO_ID_4', 'category' => 'City'],
            ['url' => 'https://www.youtube.com/embed/VIDEO_ID_5', 'category' => 'Nature'],
        ];

        $this->filter = 'all';
    }

    public function render()
    {
        $galleryItems = [];

        if ($this->filter == 'all') {
            $galleryItems = array_merge($this->images, $this->videos);
        } elseif ($this->filter == 'images') {
            $galleryItems = $this->images;
        } elseif ($this->filter == 'videos') {
            $galleryItems = $this->videos;
        }

        return view('livewire.gallery-page.gallery', [
            'galleryItems' => $galleryItems,
        ]);
    }
}