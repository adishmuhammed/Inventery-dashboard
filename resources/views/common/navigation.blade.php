<header id="header" class="site-header header-style-4">
    <div class="topbar">
        <div class="lower-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-3">
                        <div class="site-logo">
                            <a class="icon-wrapper" href="{{ url('#') }}"><img
                                    src="{{ asset('assets/images/logo.webp') }}" alt="logo"
                                    title="the logo of sahayi" width="50" height="49.5">
                                <span class="logo-title">
                                    <h4>Sahayi</h4>
                                    <h4>Dialysis</h4>
                                    <h4>Centre</h4>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="container" style="color:black">
                        <div class="navbar-header menu-wrapper">
                            <button type="button" class="open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse navigation-holder "
                            style="display: flex !important ; justify-content: flex-end; margin:0%; color:black">
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
                </div>
            </div>
        </div> <!-- end lower-topbar -->
    </div> <!-- end topbar -->
</header>
