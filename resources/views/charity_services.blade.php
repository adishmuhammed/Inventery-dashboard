<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta', [
        'title' => 'Sahayi Dialysis Center services',
        'metaDescribtion' => 'Sahayi Dialysis center provide best class services freely to those who need it.',
    ])
</head>

<body class="contact-pg">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        @include('common.preloader')

        <!-- Start header -->
        @include('common.navigation')
        <!-- end of header -->


        <!-- start page-title -->
        @include('common.page_start', [
            'pageName' => 'Sahayi Dialysis Center',
            'pageCategory' => 'Services',
        ])
        <!-- end page-title -->

        <main>
            
            <!-- start contact-pg-content -->
            <section class="services-pg-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="services-grid-s2">
                                <div class="grid">
                                    <div class="icon">
                                        <i class="fi fi-sr-procedures"></i>
                                    </div>
                                    <div class="details">
                                        <h3>Caring patients</h3>
                                        <p>We prioritize the comfort and well-being of all our patients and treat them
                                            with
                                            kindness, compassion, and respect.</p>
                                        <a href="{{ url('#') }}" class="read-more">Read More</a>
                                    </div>
                                    <div class="hover-grid">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="icon">
                                        <i class="fi flaticon-people"></i>
                                    </div>
                                    <div class="details">
                                        <h3>Free dialysis</h3>
                                        <p>We prioritize the comfort and well-being of all our patients and treat them
                                            with
                                            kindness, compassion, and respect..</p>
                                        <a href="{{ url('#') }}" class="read-more">Read More</a>
                                    </div>
                                    <div class="hover-grid">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="icon">
                                        <i class="fi flaticon-target"></i>
                                    </div>
                                    <div class="details">
                                        <h3>Free monitoring</h3>
                                        <p>Our monitoring services are completely free, so patients can rest assured
                                            knowing
                                            they are being closely watched and monitored at all times.</p>
                                        <a href="{{ url('#') }}" class="read-more">Read More</a>
                                    </div>
                                    <div class="hover-grid">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="icon">
                                        <i class="fi flaticon-idea"></i>
                                    </div>
                                    <div class="details">
                                        <h3>Providing necessary medicine </h3>
                                        <p>We provide all necessary medication to our patients, ensuring they have
                                            access to
                                            the drugs they need to manage their condition.</p>
                                        <a href="{{ url('#') }}" class="read-more">Read More</a>
                                    </div>
                                    <div class="hover-grid">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="icon">
                                        <i class="fi flaticon-time"></i>
                                    </div>
                                    <div class="details">
                                        <h3>Advanced equipments</h3>
                                        <p>We provide all necessary medication to our patients, ensuring they have
                                            access to
                                            the drugs they need to manage their condition.</p>
                                        <a href="{{ url('#') }}" class="read-more">Read More</a>
                                    </div>
                                    <div class="hover-grid">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="icon">
                                        <i class="fi flaticon-technology"></i>
                                    </div>
                                    <div class="details">
                                        <h3>Experienced staff</h3>
                                        <p>Our staff is highly trained, experienced, and dedicated to providing
                                            exceptional
                                            care to our patients. They go above and beyond to ensure our patients
                                            receive
                                            top-notch care and attention.</p>
                                        <a href="{{ url('#') }}" class="read-more">Read More</a>
                                    </div>
                                    <div class="hover-grid">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
        </main>
        <!-- end services-pg-section -->
        <!-- end contact-pg-content -->




        <!-- start site-footer -->
        @include('common.footer')
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    @include('common.scripts')
</body>

</html>
