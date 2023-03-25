<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta', [
        'title' => 'Sahayi Dialysis Center',
        'metaDescribtion' =>
            'Sahayi Dialysis Center is a diaplsy center in medical collage helpping people to get better health.',
    ])
</head>

<body>
    <div class="page-wrapper">
        @include('common.preloader')
        @include('common.navigation')
        @include('common.page_start', [
            'pageName' => 'Sahayi Dialysis Center',
            'pageCategory' => 'Services',
        ])

        <main>
            <!-- start blog-pg-content -->
            <section class="blog-pg-content section-padding">
                <div class="container">
                    @foreach ($blogs as $blog)
                        <div class="row news-grids">
                            <div class="col col-md-4 col-xs-6">
                                <div class="grid">
                                    <div class="entry-media">
                                        <img src="{{ asset(Storage::url($blog->blog_image)) }}" alt>
                                    </div>
                                    <div class="entry-body">
                                        <div class="entry-header">
                                            <span
                                                class="date">{{ Carbon::parse($blog->timestamp)->diffForHumans(['parts' => 2]) }}
                                                ago</span>
                                            <h3><a href="{{ url('#') }}">{{ $blog->blog_title }}</a>
                                            </h3>
                                        </div>
                                        <div class="entry-details">
                                            <p>{!! Str::limit(Str::markdown($blog->blog_content), 256, '...') !!}
                                            </p>
                                        </div>
                                        <div class="entry-meta">
                                            <a href="{{ url('#') }}" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="pagination-wrapper">
                        <ul class="pg-pagination">
                            {{ $blogs->links('common.pagination') }}
                        </ul>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end blog-pg-content -->
        </main>

        @include('common.footer')
    </div>
    @include('common.scripts')
</body>

</html>
