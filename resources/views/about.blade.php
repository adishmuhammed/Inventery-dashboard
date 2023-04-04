<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.meta', [
        'title' => 'Hopeful Dialysis Center',
        'metaDescribtion' =>
            'Sahayi Dialysis Center is a diaplsy center in medical collage helpping people to get better health.',
    ])
</head>

<body>
    <div class="page-wrapper">
        @include('common.preloader')
        @include('common.navigation')
        @include('common.page_start', [
            'pageName' => 'Hopeful Dialysis Center',
            'pageCategory' => 'Services',
        ])

        <main>
            <section class="section-padding about-section-s4">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-md-10">
                            <div class="section-title-s2">
                                <h1>Sahayi Dialysis Center</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-7">
                            <div class="about-details">
                                <p>Disease is a test. It can make us mentally and physically exhausted and financially
                                    challenged. The pain inflicted by terminal illnesses is indescribable. May the
                                    Almighty protect us,</p>
                                <h3>Why we work</h3>
                                <p>Studies show that the number of kidney patients is increasing in Kerala. The reasons
                                    can be many. But there are two solutions ahead. Either undergo a kidney transplant.
                                    It's not that easy. There will be a huge financial burden. Ordinary people cannot
                                    afford it. The second option is dialysis until death. Puneor Ayesha Hussain Dialysis
                                    Center is an institution that provides free and free dialysis to kidney patients
                                    according to their financial status. More than 350 kidney patients undergo dialysis
                                    every month in this institution, which is run under the SYS Kozhikode District
                                    Committee. Hoping for your support and prayers for this great initiative for poor
                                    people.
                                </p>
                            </div>
                        </div>
                        <div class="col col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\projects\sahayi_ambulance.webp') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\case-studies\history.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="col col-md-7">
                            <div class="about-details">
                                <h3>Helping Hand</h3>
                                <p>An average of 720 dialysis is done here every month. Out of this, 400 dialysis are
                                    done completely and free of charge by the institution without any charge from the
                                    patients. The rest accept a small amount and at a free rate.</p>
                                <p>
                                    Health is a great blessing of Allah. Sickness is an opportunity to approach Allah,
                                    do not hate sickness and sick people, it is human good to hold them together. For
                                    them to be together is the fulfillment of the divine command. Aish Hussain Dialysis
                                    Center is fulfilling that mission by providing compassion and care to kidney
                                    patients.
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-7">
                            <div class="about-details">
                                <h3>We need your help</h3>
                                <p>
                                    A dialysis costs at least a thousand rupees. There are patients who require three
                                    dialysis sessions in a week. This will create great hardship for those who are
                                    financially vulnerable. By understanding that, Ayesha Hussain Dialysis Center can
                                    reach the kidney patients of our country. The center needs Rs 5 lakh to run a month.
                                </p>
                                <blockquote cite="https://sunnah.com/bukhari/81/1">
                                    Most people are oblivious to the two blessings. Health and Leisure. (Word of the
                                    Prophet)
                                </blockquote>
                            </div>
                        </div>
                        <div class="col col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('assets\images\services\giving-money.webp') }}" alt="">
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
