<header id="header" class="site-header header-style-4">
    <div class="topbar">
        <div class="lower-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-3">
                        <div class="site-logo">
                            <a href="{{ url('#') }}"><img src="{{ asset('assets/images/logo-2.png') }}" alt></a>
                        </div>
                    </div>
                    <div class="col col-sm-9">
                        <div class="contact-info">
                            <div>
                                <i class="fa fa-phone-square"></i>
                                <div class="details">
                                    <p>Call us</p>
                                    <span>+123 (4567) 890</span>
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
                        <a href="{{ url('#') }}">Home</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('index.html') }}">Home style 1</a></li>
                            <li><a href="{{ url('index-2.html') }}">Home style 2</a></li>
                            <li><a href="{{ url('index-3.html') }}">Home style 3</a></li>
                            <li><a href="{{ url('index-4.html') }}">Home style 4</a></li>
                            <li><a href="{{ url('index-5.html') }}">Home style 5</a></li>
                            <li><a href="{{ url('index-6.html') }}">Home style 6</a></li>
                            <li><a href="{{ url('index-7.html') }}">Home style 7</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('#Level3') }}">Third level</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('#') }}">Level3</a></li>
                                    <li><a href="{{ url('#') }}">Level3</a></li>
                                    <li><a href="{{ url('#') }}">Level3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('about.html') }}">About</a></li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('#') }}">Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('services.html') }}">All services</a></li>
                            <li><a href="{{ url('service-single-finance.html') }}">Financial Planning</a></li>
                            <li><a href="{{ url('service-single-management.html') }}">Wealth Management</a></li>
                            <li><a href="{{ url('service-single-vc.html') }}">VC Funding </a></li>
                            <li><a href="{{ url('service-single-investment.html') }}">Investment Planning </a></li>
                            <li><a href="{{ url('service-single-insurance.html') }}">Personal Insurance</a></li>
                            <li><a href="{{ url('service-single-mutual.html') }}">Mutual Funds</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('#') }}">Case studies</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('case-studies.html') }}">Case studies</a></li>
                            <li><a href="{{ url('case-study-single.html') }}">Case study single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('#') }}">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('testimonials.html') }}">Testimonials</a></li>
                            <li><a href="{{ url('team.html') }}">Team</a></li>
                            <li><a href="{{ url('pricing.html') }}">Pricing</a></li>
                            <li><a href="{{ url('projects.html') }}">Projects</a></li>
                            <li><a href="{{ url('projects-3-col.html') }}">Projects 3 col </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('#') }}">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('blog-default.html') }}">Blog Default</a></li>
                            <li><a href="{{ url('blog.html') }}">Blog Grid</a></li>
                            <li><a href="{{ url('blog-left-sidebar.html') }}">Blog left sidebar</a></li>
                            <li><a href="{{ url('blog-right-sidebar.html') }}">Blog right sidebar</a></li>
                            <li><a href="{{ url('blog-details.html') }}">Blog details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('contact.html') }}">Contact</a></li>
                </ul>
            </div><!-- end of nav-collapse -->
            <div class="search-social">
                <div class="header-search-area">
                    <div class="header-search-form">
                        <form class="form">
                            <div>
                                <input type="text" class="form-control" placeholder="Search here">
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div>
                        <button class="btn open-btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
