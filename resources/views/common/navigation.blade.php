<header id="header" class="site-header header-style-4">
    <div class="topbar">
        <div class="lower-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-3">
                        <div class="site-logo">
                            <a href="{{ url('#') }}"><img src="{{ asset('assets/images/logo.webp') }}" alt="logo"
                                    title="the logo of sahayi" height="100"></a>
                        </div>
                    </div>
                    <div class="col col-sm-9">
                        <div class="contact-info">
                            <div>
                                <i class="fa fa-phone-square"></i>
                                <div class="details">
                                    <p>Call us</p>
                                    <span>8281 454 473</span>
                                </div>
                            </div>
                            <div>
                                <i class="fa fa-clock-o"></i>
                                <div class="details">
                                    <p>Working hours</p>
                                    <span>Mon - Fri: 9 am - 7 pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end lower-topbar -->
    </div> <!-- end topbar -->

    <nav class="navigation navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse navigation-holder">
                <button class="close-navbar"><i class="fa fa-close"></i></button>
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    {{-- <li><a href="{{ url('about.html') }}">About</a></li> --}}
                    <li class="menu-item-has-children">
                        <a href="{{ url('#') }}">Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('services/dialysis') }}">Dialysis</a></li>
                            <li><a href="{{ url('services/Diploma-In-Dialysis-Technology-(DDT)') }}">Diploma
                                    In Dialysis Technology
                                    (DDT)</a></li>
                        </ul>
                    </li>
                    {{-- <li class="menu-item-has-children">
                        <a href="{{ url('#') }}">Pages</a>
                    </li> --}}
                    <li><a href="{{ url('contact-us') }}">Contact</a></li>
                </ul>
            </div><!-- end of nav-collapse -->
        </div><!-- end of container -->
    </nav>
</header>
