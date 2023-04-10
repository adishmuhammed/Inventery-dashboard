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
                        <div class="col col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\projects\sahayi_ambulance.webp') }}" alt="">
                            </div>
                        </div>
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

                    </div>
                </div> <!-- end container -->
            </section>
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
                                        <p>At Sahayi dialysis, we care for our patients like family. We provide
                                            compassionate care and monitor your health during your dialysis treatments.
                                            We help you choose the best dialysis option for you. We make your dialysis
                                            comfortable and safe.</p>

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
                                        <p>At Sahayi dialysis, we offer free dialysis services to the poor and needy who
                                            cannot afford the treatment. We have partnered with government schemes and
                                            private donors to provide quality renal care to our patients. We believe
                                            that everyone deserves access to dialysis regardless of their financial
                                            status.</p>

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
                                        <p>We offer free monitoring of your kidney function and dialysis treatment. We
                                            use lab tests and registries to measure your dialysis effectiveness and
                                            outcomes. We adjust your dialysis plan as needed. We educate you about your
                                            condition and treatment.</p>

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
                                        <p>At Sahayi dialysis, we give medicine to help you manage your kidney disease
                                            and other conditions. We prescribe medications and vitamins that replace
                                            nutrients. We monitor and adjust your medication use and educate you about
                                            it.</p>

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
                                        <p>At Sahayi dialysis, we use advanced equipments to provide you with the best
                                            dialysis treatment. We use high-quality dialyzers and hemodialysis machines
                                            that filter your blood. We also use efficient water purification systems
                                            that reduce water consumption and waste generation..</p>

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
                                        <p>At Sahayi dialysis, we have an experienced and trained staff to provide you
                                            with the best dialysis care. You will see your doctor regularly and get
                                            personalized attention from our dialysis team. Our staff will monitor your
                                            health, adjust your treatment, and offer you support and education.</p>

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
