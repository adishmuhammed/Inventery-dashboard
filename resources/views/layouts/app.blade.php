<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>Home - Danveer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="title" content="" />
    <link type="image/x-icon" href="{{ asset('favicon.ico') }}" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRoboto+Slab:300,400,700"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/homepage-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/danveer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build.css') }}">
    @livewireStyles()
</head>

<body>
    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="spinner">
            <img src="{{ asset('/image/tab-icon.png') }}" alt="loader" class="loading">
            <h5 class="line-height-50">Loading...</h5>
        </div>
    </div>

    {{ $slot }}

    <!-- FOOTER SCRIPT -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts()
</body>

</html>
