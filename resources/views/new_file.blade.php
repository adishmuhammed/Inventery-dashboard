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
            <section class="blog-with-sidebar-section blog-single-content section-padding">
                <div class="container">
                    <div class="row">
                        <div class="news-grids col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-8 col-md-push-4">
                            <div class="post">
                                <div class="post-title-meta">
                                    <h2>{{ $blog->blog_title }}</h2>
                                    <ul class="meta-info">
                                        <li><a href="{{ url('#') }}">Admin</a></li>
                                        <li><a href="{{ url('#') }}"><i
                                                    class="fa fa-clock-o"></i>{{ $formattedDate }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-body">
                                    {!! Str::markdown($blog->blog_content) !!} </div>
                            </div> <!-- end post -->

                            <div class="tag-share">
                                <div>
                                    <span>Tags: </span>
                                    <ul class="tag">
                                        @foreach ($tags as $tag)
                                            <li><a href="{{ url('#') }}">{{ $tag }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div> <!-- end tag-share -->
                        </div> <!-- end blog-content -->
                    </div>
                </div> <!-- end container -->
            </section>
        </main>

        @include('common.footer')
    </div>
    @include('common.scripts')
</body>

</html>
