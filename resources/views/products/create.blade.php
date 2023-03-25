@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<style>
    .outer {
        width: 100dvw;
        display: flex;
        gap: 10px;
        background: linear-gradient(#fffff6, #f6ffff);
    }

    .outer>div {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 10px;
    }
</style>
<div class="outer">
    <div>
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <label>Product Title:</label>
            <input class="form-control" type="text" name="product_name" />

            <label>Product Image:</label>
            <input class="form-control" type="file" name="product_image" />

            <input class="Btn btn-success" type="submit" value="Upload" />
        </form>

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @isset($products)
            @foreach ($products as $product)
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset(Storage::url($product->product_image)) }}" alt="{{ $product->title }}"
                                width='300' hight='360'>
                            <div class="caption">
                                <h3>{{ $product->product_name }}</h3>
                                <p>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
    <div>
        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
            @csrf
            <label>Blog Title:</label>
            <input class="form-control" type="text" name="blog_title" />

            <p>separate tags with ',' comma</p>
            <Label>Blog Tags:</Label>
            <input class="form-control" type="text" name="blog_tags">

            <label>Blog Image:</label>
            <input class="form-control" type="file" name="blog_image" />

            <p class="center">
                Use Markdown to format your blog post.
            </p>

            <label>Blog Content:</label>
            <textarea class="form-control" name="blog_content"></textarea>

            <input class="Btn btn-success" type="submit" value="Upload" />
        </form>
        @isset($blogs)
            @foreach ($blogs as $blog)
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset(Storage::disk('public')->url($request->product_image)) }}"
                                alt="{{ $product->title }}" width='300' hight='360'>
                            <div class="caption">
                                <h3>{{ $blog->blog_title }}</h3>
                                <sub>{{ $blog->blog_tags }}</sub>
                                {{-- decode markdown from $blog->blog_content  --}}
                                <p>{!! Str::markdown($blog->blog_content) !!}</p>
                                <p>
                                <form action="{{ route('blog.destroy', $blog) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</div>
