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
            <!-- start projects-section-s2 -->
            <section class="projects-section-s2 project-section-s3-3grid section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12 sortable-gallery">
                            <div class="gallery-filters projects-list">
                                <ul>
                                    <li><a data-filter="*" href="{{ url('#') }}" class="current">All</a></li>
                                    <li><a data-filter=".business" href="{{ url('#') }}">Business</a></li>
                                    <li><a data-filter=".finance" href="{{ url('#') }}">Finance</a></li>
                                    <li><a data-filter=".consulting" href="{{ url('#') }}">Consulting</a></li>
                                    <li><a data-filter=".events" href="{{ url('#') }}">Events</a></li>
                                </ul>
                            </div>

                            @foreach ($products as $product)
                                <div class="gallery-container projects-grid">
                                    <div class="grid business consulting">
                                        <div class="inner">
                                            <div class="img-holder">
                                                <img src="{{ asset(Storage::url($product->product_image)) }}" alt>
                                            </div>
                                            <div class="details">
                                                <div class="details-inner">
                                                    <ul>
                                                        <li><a href="{{ asset(Storage::url($product->product_image)) }}"
                                                                class="fancybox"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="{{ url('#') }}"><i class="fa fa-link"></i></a>
                                                        </li>
                                                    </ul>
                                                    <h3>{{ $product->product_name }}</h3>
                                                    <p class="cat">startup</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="pagination-wrapper">
                                <ul class="pg-pagination">
                                    {{ $products->links('common.pagination') }}
                                </ul>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </section>
            <!-- end projects-section-s2 -->
        </main>

        @include('common.footer')
    </div>
    @include('common.scripts')
</body>

</html>
