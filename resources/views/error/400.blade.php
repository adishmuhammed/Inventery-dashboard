<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya">
    <link rel="icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon" />
    <title>400 - Pensare is developing site</title>
    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.css') }}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/error-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/error-page-responsive.css') }}">
</head>

<body>
    <!-- 01 Preloader -->
    <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <section class="page-section">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="content-detail p-0">
                    <div class="container-txt p-0">
                        <h1><span>400</span></h1>
                        <div class="blobs_1"></div>
                        <div class="blobs_2"></div>
                        <div class="blobs_3"></div>
                        <div class="blobs_4"></div>
                        <div class="blobs_5"></div>
                        <div class="blobs_6"></div>
                        <div class="blobs_7"></div>
                    </div>
                    <h4 class="sub-title">the website is in development preview</h4>

                    <p class="detail-text">Sorry Bad Request, <br>The HTTP request that was sent to the server has
                        invalid syntax.</p>

                    <div class="back-btn">
                        <a href="{{ url('index.html') }}" class="btn">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest jquery-->
    <script src="{{ asset('/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Theme js-->
    <script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>
