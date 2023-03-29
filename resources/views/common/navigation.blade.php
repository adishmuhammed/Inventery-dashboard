<header id="header" class="site-header header-style-4">
    <div class="topbar">
        <div class="lower-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-3">
                        <div class="site-logo">
                            <a href="{{ url('#') }}"><img src="{{ asset('assets/images/logo.webp') }}" alt="logo"
                                    title="the logo of sahayi" width="200"></a>
                        </div>
                    </div>
                    <div class="col col-sm-9">
                        <div class="contact-info">
                            <div>
                                <i><img title="google pay link" width="40"
                                        src="{{ asset('assets\images\case-studies\google-pay.png') }}"
                                        alt="Gpay logo"></i>
                                <span style="margin:3rem 0rem;"></span>
                                <div class="details">
                                    <p>Gpay</p>
                                    <span><a
                                            href="upi://pay?pa=qr.aisha@sib&pn=AISHA%20HUSSAIN%20DIALYSIS%20CENTRE&mc=8099&cu=INR&mc=From%20Website%20Of%20Sahayi%20Dialysis">7511154473</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end lower-topbar -->
    </div> <!-- end topbar -->

    <nav class="navigation navbar navbar-default center-block">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse navigation-holder"
                style="display: flex !important ; justify-content: center; margin:0%;">
                <button class="close-navbar"><i class="fa fa-close"></i></button>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a href="{{ url('/about-us') }}">About</a></li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('/services/diploma-in-dialysis-technology-(DDT)') }}">Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/services/dialysis') }}">Dialysis</a></li>
                            <li><a href="{{ url('/services/diploma-in-dialysis-technology-(DDT)') }}">Diploma
                                    In Dialysis Technology
                                    (DDT)</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('#') }}">Courses</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/services/diploma-in-dialysis-technology-(DDT)') }}">Diploma
                                    In Dialysis Technology
                                    (DDT)</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/gallery') }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ url('/blogs') }}">Blogs</a>
                    </li>
                    <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                </ul>
            </div><!-- end of nav-collapse -->
        </div><!-- end of container -->
    </nav>
</header>
