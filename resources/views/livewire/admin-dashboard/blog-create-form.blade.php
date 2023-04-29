<form wire:submit.prevent="createBlog" class="max-w-md mx-auto">
    <div class="mb-4">
        <label for="blog_title" class="block text-gray-700 font-bold mb-2">Blog Title:</label>
        <input type="text" id="blog_title" wire:model="blog_title"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('blog_title')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="blog_tags" class="block text-gray-700 font-bold mb-2">Blog Tags:</label>
        <input type="text" id="blog_tags" wire:model="blog_tags"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('blog_tags')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="blog_content" class="block text-gray-700 font-bold mb-2">Blog Content:</label>
        <textarea id="blog_content" wire:model="blog_content"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        @error('blog_content')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="blog_image" class="block text-gray-700 font-bold mb-2">Blog Image:</label>
        <input type="file" id="blog_image" wire:model="blog_image"
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('blog_image')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-center">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save
            Blog</button>
    </div>
</form>
