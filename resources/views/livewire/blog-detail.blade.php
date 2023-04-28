<div>
    <livewire:components.header />
    <livewire:components.page-start />
    <main class="container">
        <div class="blog-detail-part paddingub">
            <div class="container img-box">
                <div class="blog-part img-box">
                    <a href="blog.html" class="blog-img overlay over-none">
                        <img src="{{ asset($blog->image) }}" alt="blog-detail">
                    </a>
                </div>
                <div class="detail-part">
                    <h2 class="title-two">{{ $blog->title }}</h2>
                    <p class="title-p">by Admin &nbsp;&nbsp; | &nbsp;&nbsp;
                        {{ Carbon::parse($blog->created_at)->format('d-m-Y') }}</p>
                    @foreach ($paragraphs as $paragraph)
                        @if ($paragraph && !starts_with($paragraph, '```'))
                            <div class="tag-text">{{ $paragraph }}</div>
                        @else
                            <p class="detail-p">{{ $paragraph }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <livewire:components.footer />
</div>
