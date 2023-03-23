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
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        @include('common.preloader')
        <!-- end preloader -->
        <!-- Start header -->
        @include('common.navigation')
        <!-- end of header -->
        <!-- start of hero -->
        @include('home.slider')
        <!-- end of hero slider -->
        <!-- start about-section -->
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
            <!-- end about-section -->
            <!-- start about-section-s2 -->
            <section class="about-section-s2 section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="video">
                                <img src="{{ asset('assets/images/about-s2/img-1.jpg') }}" alt="">
                                <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1" class="video-btn"
                                    data-type="iframe"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="about-text">
                                <h3>
                                    Diploma In Dialysis Technology (DDT)</h3>
                                <p>Diploma in Dialysis Techniques is a 2-year skilled-based certification course that
                                    trains
                                    students to purify and filter the blood and excess or waste materials from the human
                                    kidney. It also enables students to perform critical dialysis including renal
                                    dialysis
                                    and hem-dialysis. The course deals with the proper maintenance, usage, disposal and
                                    operation of the dialysis machine as a whole. If you are interested in pursuing a
                                    career
                                    in the field of dialysis, then this course could be a great option for you. </p>
                                <a href="{{ url('#') }}" class="theme-btn">Get Details</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
        </main>
        <!-- end about-section-s2 -->
        <!-- start fun-fact -->
        @include('home.fun')
        <!-- end fun-fact -->
        <!-- start contact-section -->
        @include('home.form')
        <!-- end contact-section -->
        <!-- start blog-section -->
        {{-- Add blogs later --}}
        <!-- end blog-section -->
        @include('home.partners')
        <!-- start partners-section -->
        <!-- end partners-section -->
        @include('common.footer')
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->
    @include('common.scripts')
</body>

</html>
