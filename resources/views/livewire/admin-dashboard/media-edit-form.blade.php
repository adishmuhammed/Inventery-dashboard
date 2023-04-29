<form wire:submit.prevent="updateBlog" class="max-w-md mx-auto">
    <div class="p-6 border rounded-xl shadow-xl flex flex-col justify-center items-center gap-4">
        <div x-show='imageSelected'>
            <label for="image" class="block text-gray-700 font-bold mb-2">Upload Image:</label>
            <input type="file" wire:model='image' class="py-2 px-4 border rounded-md">
            <textarea cols="30" rows="10" wire:model='info' class="block w-full py-2 px-4 border rounded-md my-4"></textarea>

            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-colors duration-300">Upload
                    Media</button>
            </div>
        </div>
        <div x-show='videoSelected'>
            <label for="video" class="block text-gray-700 font-bold mb-2">Upload Video:</label>
            <input type="file" wire:model='video' class="py-2 px-4 border rounded-md">
            <textarea cols="30" rows="10" wire:model='info' class="block w-full py-2 px-4 border rounded-md my-4"></textarea>

            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-colors duration-300">Upload
                    Media</button>
            </div>
        </div>
    </div>
</form>
