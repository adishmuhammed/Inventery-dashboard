<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta', [
        'title' => 'Hopeful Dialysis Center',
        'metaDescribtion' =>
            'Sahayi Dialysis Center is a diaplsy center in medical collage helpping people to get better health.',
    ])
</head>

<body>
    <div class="page-wrapper">
        @include('common.preloader')
        @include('common.navigation')
        @include('common.page_start', [
            'pageName' => 'Hopeful Dialysis Center',
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

                    <div class="row">
                        <div class="col col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\case-studies\history.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="col col-md-7">
                            <div class="about-details">
                                <h3>Our History</h3>
                                <p>sahayi, a charitable organization that runs the center, Aisha Hussain Dialysis Centre
                                    is a leading dialysis centre that provides lifesaving treatment for patients with
                                    chronic kidney failure12. It is a one-stop destination to serve customers or
                                    patients from across the region12. The centre is the sole hope of the people that
                                    provide dialysis services free of charge and also ensures that no patient is
                                    deprived of treatment12. The full and part-time nursing professionals and staffs
                                    here create a world worth living in12. In the previous three years, they have
                                    completed 19,465 free of visit dialysis treatments12. The facility to diagnose and
                                    support 60 patients in a day in three shifts is an added advantage of their
                                    diagnosis centre</p>
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
