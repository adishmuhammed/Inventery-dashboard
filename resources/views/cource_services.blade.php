<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta', [
        'title' => 'Sahayi Dialysis Diploma In Dialysis Technology Course',
        'metaDescribtion' =>
            'Sahayi Dialysis Center have excellent experience and trainers who would boost your skills far better then any other course center.',
    ])
</head>

<body>
    <div class="page-wrapper">
        @include('common.preloader')
        @include('common.navigation')
        @include('common.page_start', [
            'pageName' => 'Diploma In Dialysis Technology',
            'pageCategory' => 'Services',
        ])

        <main>
            <section class="about-section-s2 section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\about-s2\DSCF9222.webp') }}" alt="">
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
            <section class="about-section-s2 section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="about-text">
                                <h3>
                                    Apply Now To Enrol </h3>
                                <p>If you are interested in pursuing a career in the healthcare sector, you may want to
                                    consider enrolling in the Dialysis Diploma Course offered by our institution. This
                                    course will equip you with the skills and knowledge to perform dialysis procedures
                                    for patients with kidney failure. Dialysis technicians are in high demand in
                                    hospitals, clinics and dialysis centers across the country. The best part is that
                                    you can study this course free of charge, thanks to a generous scholarship from our
                                    sponsors. However, this opportunity is only available for girls who have completed
                                    their plus two education. If you meet this criterion and have a passion for helping
                                    others, you can apply for this course by filling out the online application form on
                                    our website. Hurry up, as the seats are limited and the deadline is approaching
                                    soon. </p>
                                <a href="{{ url('#') }}" class="theme-btn">Get Details</a>
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\services\hemodialysis-room-equipment.webp') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
        </main>

        @include('common.footer')
    </div>
    @include('common.scripts')
</body>

</html>
