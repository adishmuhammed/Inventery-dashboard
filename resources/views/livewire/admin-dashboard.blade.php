<div class="container" x-data="{ openMessage: @entangle('message'), openBlogs: @entangle('blog'), openGallery: @entangle('gallery') }">
    <div class="flex justify-center align-middle h-6">
        <b>Admin Dashboard</b>
    </div>
    <div class="flex justify-center gap-6 align-middle">
        <button @if ($message) {{ active }} @endif @click="openMessage = true"
            class="p-3 bg-cyan-600 text-white hover:bg-cyan-200 active:bg-cyan-900">Messages</button>
        <button @if ($blog) {{ active }} @endif @click="openBlog = true"
            class="p-3 bg-cyan-600 text-white hover:bg-cyan-200 active:bg-cyan-900">Blogs</button>
        <button @if ($gallery) {{ active }} @endif @click="openGallery = true"
            class="p-3 bg-cyan-600 text-white hover:bg-cyan-200 active:bg-cyan-900">Gallery</button>
    </div>
    <div x-show="openMessage"
        class="p border rounded-lg pt-16 pb-16 bg-gradient-to-b from-slate-300 via-slate-50 to-slate-300">
        <div class="border p-6">
            <div class="border rounded-md p-6 shadow-2xl flex flex-col justify-around">
                @foreach ($contactMessages as $contactMessage)
                    <div class="flex gap-3">
                        <div class="text-bold">{{ $contactMessage->full_name }}</div>
                        <div class="text-slate-500">{{ $contactMessage->email }}</div>
                    </div>
                    <h5>{{ $contactMessage->subject }}</h5>
                    <p>{{ $contactMessage->message }}</p>
                @endforeach
            </div>
        </div>
    </div>
    <div x-show="openBlog"
        class="p border rounded-lg pt-16 pb-16 bg-gradient-to-b from-slate-300 via-slate-50 to-slate-300">
        <div class="border p-6 text-center">
            <table class="border rounded-md shadow-xl">
                <tr class="bg-pink-300">
                    <th>No</th>
                    <th>Name</th>
                    <th>Short Content</th>
                    <th>Tags</th>
                    <th>Action</th>
                </tr>
                @foreach ($blogPosts as $posts)
                    <tr>
                        <td>{{ $posts->id }}</td>
                        <td>{{ $posts->blog_title }}</td>
                        <td>{{ $posts->blog_content }}</td>
                        <td>{{ $posts->blog_tags }}</td>
                        <td x-data="{open:false}">
                            <button @click="open = !open" class=" text-black hover:text-red-400 py-2 rounded hidden md:block">
                                Courses
                            </button>
                            <div x-show="open" @click.away="open = false" class="absolute top-20 mt-2 w-48 bg-white rounded shadow-md">
                                <ul class="text-gray-700">
                                    <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('ddt') }}">Edit</a></li>
                                    <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('lab-tech') }}">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div x-show="openGallery"
        class="p border rounded-lg pt-16 pb-16 bg-gradient-to-b from-slate-300 via-slate-50 to-slate-300">
        <div class="border p-6">
            <table class="border rounded-md shadow-xl">
                <tr class="bg-pink-300">
                    <th>No</th>
                    <th>Media</th>
                    <th>Info</th>
                    <th>Action</th>
                </tr>
                @foreach ($blogPosts as $posts)
                    <tr>
                        <td></td>
                        <td>{{ $posts->blog_title }}</td>
                        <td>{{ $posts->blog_tags }}</td>
                        <td x-data="{open:false}">
                            <button @click="open = !open" class=" text-black hover:text-red-400 py-2 rounded hidden md:block">
                                Courses
                            </button>
                            <div x-show="open" @click.away="open = false" class="absolute top-20 mt-2 w-48 bg-white rounded shadow-md">
                                <ul class="text-gray-700">
                                    <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('ddt') }}">Edit</a></li>
                                    <li class="px-4 py-2 hover:bg-gray-200"><a href="{{ route('lab-tech') }}">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
