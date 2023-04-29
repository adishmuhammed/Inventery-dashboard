<div class="sm:flex sm:items-center sm:justify-end">
    <img class="object-scale-down w-full sm:w-auto" src="{{ $blog->images }}" />
    <div
        class="flex flex-col space-y-3 items-start justify-end w-full sm:w-auto sm:ml-6  sm:mt-0 pl-4 pr-5 py-5 border border-gray-200">
        <h3 class="w-full text-base leading-tight text-gray-800">{{ $blog->title }}
        </h3>
        <p class="w-full text-sm leading-tight text-gray-400 hidden sm:block">{{ substr($blog->content, 0, 126) }}</p>
        <a href="{{ route('blog-detail', $blog) }}" class="w-full text-sm leading-tight text-green-500">Read more</a>
    </div>
</div>
