<header>
    <nav class="navbar black navbar-dark navbar-expand-lg header">
        <div class="container p-0">
            <a class="navbar-brand pl-2 pl-lg-0" href="{{ url('/') }}"><img class="logo-background"
                    src="{{ asset('/images/logo.webp') }}" alt="logo" width="100">

            </a>
            <h4 style="color:white">Sahayi Diyalysis Center</h4>
            <button class="navbar-toggler border-0 collapsed ml-auto mt-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto mobilemenu">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/') }}">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                            href="#">COURSES</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="portfolio-masonry.html">Gallery Masonry</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/') }}">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">CONTACT US</a>
                    </li>
                    <li class="mob-donate d-sm-block d-lg-none">
                        <a class="nav-link" href="{{ url(' #') }}">DONATE NOW</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
