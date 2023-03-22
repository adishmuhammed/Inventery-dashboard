<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta')
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        @include('common.preloader')
        <!-- end preloader -->

        <!-- Start header -->
        @include('common/navigation.blade.php')
        <!-- end of header -->


        <!-- start of hero -->
        @include('home/slider.blade.php')
        <!-- end of hero slider -->


        <!-- start about-section -->
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
                            <p>Sahayi Dialysis Center is the sole hope of the people that provide dialysis services free
                                of charge and also
                                ensures that no patient is deprived of treatment. The full and part-time nursing
                                professionals and staffs here create a world worth living in</p>
                            <h3>Our Mission</h3>
                            <p>Our mission is to ensure that no patient is deprived of treatment, regardless of their
                                financial situation. Our nursing professionals and staffs are dedicated to creating a
                                world worth living in. We believe that everyone deserves access to quality healthcare,
                                and we are committed to making that a reality. If you or someone you know is in need of
                                dialysis services, please don’t hesitate to contact us.
                            </p>
                        </div>
                    </div>

                    <div class="col col-md-5">
                        <div class="about-img">
                            <img src="{{ asset('/public/assets/images/about-s3.jpg') }}" alt="">
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
                            <img src="{{ asset('/public/assets/images/about-s2/img-1.jpg') }}" alt="">
                            <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1" class="video-btn"
                                data-type="iframe"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="about-text">
                            <h3>How we work</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="{{ url('#') }}" class="theme-btn">Get Details</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="about-text">
                            <h3>2018 finance analysis</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="{{ url('#') }}" class="theme-btn">View Case Study</a>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div>
                            <img src="{{ asset('/public/assets/images/about-s2/img-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section-s2 -->


        <!-- start fun-fact -->
        @include('home/fun.blade.php')
        <!-- end fun-fact -->

        <!-- start contact-section -->
        @include('home/form.blade.php')
        <!-- end contact-section -->

        <!-- start blog-section -->
        {{-- Add blogs later --}}
        <!-- end blog-section -->

        @include('common/partners.blade.php')
        <!-- start partners-section -->

        <!-- end partners-section -->
        @include('common/footer.blade.php')
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    @include('common/scripts.blade.php')
</body>

</html>
