<form wire:submit.prevent="updateBlog" class="max-w-md mx-auto">
    <div class="p-6 border rounded-xl shadow-xl flex flex-col justify-center items-center gap-4">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-colors duration-300"
            x-data='{imageSelected: @entangle('imageSelected'), videoSelected: @entangle('videoSelected') }'
            @click='imageSelected= !imageSelected'
            :class="{'bg-blue-700': imageSelected}"
        >
            <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Upload an Image
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-colors duration-300"
            x-data='{imageSelected: @entangle('imageSelected'), videoSelected: @entangle('videoSelected') }'
            @click='videoSelected= !videoSelected'
            :class="{'bg-blue-700': videoSelected}"
        >
            <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4v16l11-8L5 4z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4h2v16h-2z"></path>
            </svg>
            Upload a Video
        </button>

        <div x-show='imageSelected'>
            <label for="image" class="block text-gray-700 font-bold mb-2">Upload Image:</label>
            <input type="file" wire:model='image' class="py-2 px-4 border rounded-md">
        </div>
        <div x-show='videoSelected'>
            <label for="video" class="block text-gray-700 font-bold mb-2">Upload Video:</label>
            <input type="file" wire:model='video' class="py-2 px-4 border rounded-md">
        </div>
    </div>

    <textarea cols="30" rows="10" wire:model='info' class="block w-full py-2 px-4 border rounded-md my-4"></textarea>

    <div class="flex items-center justify-center">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-colors duration-300"
        >Upload Media</button>
    </div>
</form>
