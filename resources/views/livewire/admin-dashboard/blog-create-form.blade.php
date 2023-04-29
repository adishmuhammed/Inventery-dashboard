<form wire:submit.prevent="createBlog">
    <input type="text" wire:model="blog_title">
    @error('blog_title')
        <span class="error">{{ $message }}</span>
    @enderror

    <input type="text" wire:model="blog_tags">
    @error('blog_tags')
        <span class="error">{{ $message }}</span>
    @enderror

    <textarea cols="30" rows="10" wire:model="blog_content"></textarea>
    @error('blog_content')
        <span class="error">{{ $message }}</span>
    @enderror

    <input type="file" wire:model="blog_image">
    @error('blog_image')
        <span class="error">{{ $message }}</span>
    @enderror

    <button type="submit">Save Contact</button>
</form>
