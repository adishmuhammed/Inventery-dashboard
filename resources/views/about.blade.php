<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta', [
        'title' => 'About Sahayi Dialysis Center',
        'metaDescribtion' =>
            'Sahayi Dialysis Center is a diaplsy center in medical collage helpping people to get better health.',
    ])
</head>

<body>
    <div class="page-wrapper">
        @include('common.preloader')
        @include('common.navigation')
        @include('common.page_start', [
            'pageName' => 'About Sahayi Dialysis Center',
            'pageCategory' => 'Services',
        ])

        <main>
            <section class="section-padding about-section-s4">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-md-10">
                            <div class="section-title-s2">
                                <h2>Sahayi Dialysis Center</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-7">
                            <div class="about-details">
                                <p>Sahayi Dialysis Center is the sole hope of the people that provide dialysis services
                                    free
                                    of charge and also
                                    ensures that no patient is deprived of treatment. The full and part-time nursing
                                    professionals and staffs here create a world worth living in</p>
                                <h3>How we work</h3>
                                <p>At Sahayi Dialysis Center, we work hard to ensure
                                    that our patients receive the best possible care. We are always looking for ways to
                                    improve our services and provide our patients with the best possible experience. If
                                    you
                                    or someone you know is in need of dialysis services, please don’t hesitate to
                                    contact
                                    us. We are here to help.
                                </p>
                            </div>
                        </div>
                        <div class="col col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\projects\sahayi_ambulance.webp') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
        </main>

        @include('common.footer')
    </div>
    @include('common.scripts')
</body>

</html>
