<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta', [
        'title' => 'Contact Sahayi Dialysis Center',
        'metaDescribtion' =>
            'Sahayi Dialysis Center is a diaplsy center in medical collage helping people to get better health and providing free dialysis services.',
    ])
</head>

<body class="contact-pg">
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        @include('common.preloader')
        <!-- end preloader -->
        <!-- Start header -->
        @include('common.navigation')
        <!-- end of header -->
        <!-- start page-title -->
        @include('common.page_start', [
            'pageName' => 'Contact',
        ])
        <!-- end page-title -->
        <!-- start contact-pg-content -->
        <section class="contact-pg-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="section-title-s3">
                            <h2>Let’s Get In Touch</h2>
                            <p>If you need to contact the sahayi dialisis center for any information, request and
                                communications please the following form. We will replay you by email, phone or whatsapp
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d500701.5985455806!2d75.42603992132662!3d11.3543307539976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba668a13c4fccc5%3A0x7a200f521054aba0!2sSAHAYI%20DIALYSIS%20CENTRE!5e0!3m2!1sen!2sin!4v1680090250924!5m2!1sen!2sin"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form">
                            <form method="post" id="contact-form-s2" class="form row contact-validation-active">
                                <div class="col col-xs-12">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="col col-xs-12">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your email address">
                                </div>
                                <div class="col col-xs-12">
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="Your location">
                                </div>
                                <div class="col col-xs-12">
                                    <textarea class="form-control" name="message" placeholder="Write.."></textarea>
                                </div>
                                <div class="col col-xs-12 submit-btn">
                                    <button type="submit">Submit</button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-content -->
        <!-- start site-footer -->
        @include('common.footer')
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->
    @include('common.scripts')
</body>

</html>
