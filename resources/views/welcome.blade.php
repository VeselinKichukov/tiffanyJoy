<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Tiffany Apart</title>

        <!-- <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet"
              href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet"
              href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer
                src="https://code.getmdl.io/1.3.0/material.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css"
              href="css/bootstrap.min.css">
        <!-- Icon -->
        <link rel="stylesheet" type="text/css"
              href="fonts/line-icons.css">
        <!-- Slicknav -->
        <link rel="stylesheet" type="text/css"
              href="css/slicknav.css">
        <!-- Nivo Lightbox -->
        <link rel="stylesheet" type="text/css"
              href="css/nivo-lightbox.css">
        <!-- Animate -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Responsive Style -->
        <link rel="stylesheet" type="text/css"
              href="css/responsive.css">
        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
              integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
              crossorigin="anonymous">

        <script
            src="http://thecodeplayer.com/uploads/js/prefixfree.js"
            type="text/javascript"></script>

    </head>
    <body>

        <!-- Header Area wrapper Starts -->
        <header id="header-wrap">

            @include('components.nav-bar')

            <!-- Main Carousel Section Start -->
            <div id="main-slide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#main-slide" data-slide-to="0"
                        class="active"></li>
                    <li data-target="#main-slide"
                        data-slide-to="1"></li>
                    <li data-target="#main-slide"
                        data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 main-image"
                             src="img/slider/slide1.jpg"
                             alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <p class="fadeInUp wow"

                               data-wow-delay=".6s"> @lang('home.slide1_header1')</p>
                            <h1 class="wow fadeInDown heading"
                                data-wow-delay=".4s">@lang('home.slide1_header2')</h1>
                            <a href="#about"
                               class="fadeInLeft wow btn btn-common btn-lg"
                               data-wow-delay=".6s">@lang('home.button1')</a>
                            <!-- <a href="#"
                               class="fadeInRight wow btn btn-border btn-lg"
                               data-wow-delay=".6s">Explore
                                                    More</a> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 main-image"
                             src="img/slider/slide2.jpg"
                             alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <p class="fadeInUp wow"
                               data-wow-delay=".6s">@lang('home.slide2_header1')</p>
                            <h1 class="wow bounceIn heading"
                                data-wow-delay=".7s">@lang('home.slide2_header2')</h1>
                            <a href="#about"
                               class="fadeInUp wow btn btn-common btn-lg"
                               data-wow-delay=".8s">@lang('home.button2')</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 main-image"
                             src="img/slider/slide3.jpg"
                             alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <p class="fadeInUp wow"
                               data-wow-delay=".6s">@lang('home.slide3_header1')</p>
                            <h1 class="wow fadeInUp heading"
                                data-wow-delay=".6s">@lang('home.slide3_header2')</h1>
                            <a href="#about"
                               class="fadeInUp wow btn btn-common btn-lg"
                               data-wow-delay=".8s">@lang('home.button3')</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main-slide"
                   role="button" data-slide="prev">
                    <span class="carousel-control" aria-hidden="true"><i
                            class="lni-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next"
                   style="text-align: right;"
                   href="#main-slide" role="button" data-slide="next">
                    <span class="carousel-control" aria-hidden="true"><i
                            class="lni-chevron-right"
                            style="margin: auto; position: static;"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Main Carousel Section End -->

        </header>
        <!-- Header Area wrapper End -->

        <!-- Coundown Section Start -->
        <section class="countdown-timer section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="heading-count">
                            <h2 class="wow fadeInDown"
                                data-wow-delay="0.2s">@lang('home.offer_title')</h2>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div
                            class="row time-countdown justify-content-center wow fadeInUp"
                            data-wow-delay="0.2s">
                            <div id="clock" class="time-count"></div>
                        </div>
                        <a href="pricing.html"
                           class="btn btn-common wow fadeInUp"
                           data-wow-delay="0.3s">Add to My
                                                 Calender</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Coundown Section End -->

        <!-- Services Section Start -->
        <section id="services" class="services section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">Why You Choose
                                                      Us?</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">
                                Global Grand Event on Digital
                                Design</p>
                        </div>
                    </div>
                </div>
                <div class="row services-wrapper">
                    <!-- Services item -->
                    <div
                        class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown"
                             data-wow-delay="0.2s">
                            <div class="icon">
                                <i class="fas fa-wifi"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">WiFi</a></h3>
                                <p>WiFi is available and is free of
                                   charge!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div
                        class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown"
                             data-wow-delay="0.4s">
                            <div class="icon">
                                <i class="far fa-snowflake"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Air Condition</a></h3>
                                <p>All of our appartments are equiped
                                   with air
                                   conditioning, so you could avoid
                                   the heat
                                   during the summer.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div
                        class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown"
                             data-wow-delay="0.6s">
                            <div class="icon">
                                <i class="fas fa-umbrella-beach"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Beach Nearby</a></h3>
                                <p>Our appartments are located in
                                   walking
                                   distance to the beach.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div
                        class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown"
                             data-wow-delay="0.8s">
                            <div class="icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">8.7 Rating</a></h3>
                                <p>On average, our customers have
                                   graded us with
                                   high location rating, based from
                                   Booking.com </p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div
                        class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown"
                             data-wow-delay="1s">
                            <div class="icon">
                                <i class="fas fa-door-open"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Various Rooms</a></h3>
                                <p>We offer rooms of various sizes
                                   with up to 3
                                   beds per room, where 5 people could
                                   easily fit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div
                        class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown"
                             data-wow-delay="1.2s">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Restaurants Nearby</a>
                                </h3>
                                <p>There are plenty of various
                                   restaurant nearby
                                   our locations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->


        <!-- About Section Start -->
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">{!! trans('home.about_the_cities') !!}</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">{!! trans('home.about_the_cities_information') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="about-item">
                            <img class="img-fluid"
                                 src="img/blog/pm-blog.jpg"
                                 alt="">
                            <div class="about-text">
                                <h3><a href="/cities#pomorie">{!! trans('home.pomorie_name') !!}</a></h3>
                                <p>{!! trans('home.pomorie_description') !!}</p>
                                <a class="btn btn-common btn-rm"
                                   href="/cities#pomorie">{!! trans('home.read_more') !!}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="about-item">
                            <img class="img-fluid"
                                 src="img/blog/sn-blog.jpg"
                                 alt="">
                            <div class="about-text">
                                <h3><a href="/cities#sinemorets">{!! trans('home.sinemorets_name') !!}</a></h3>
                                <p>{!! trans('home.sinemorets_description') !!}</p>
                                <a class="btn btn-common btn-rm"
                                   href="/cities#sinemorets">{!! trans('home.read_more') !!}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="about-item">
                            <img class="img-fluid"
                                 src="img/blog/po-blog.jpg"
                                 alt="">
                            <div class="about-text">
                                <h3><a href="/cities#primorsko">{!! trans('home.primorsko_name') !!}</a></h3>
                                <p>{!! trans('home.primorsko_description') !!}</p>
                                <a class="btn btn-common btn-rm"
                                   href="cities#primorsko">{!! trans('home.read_more') !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Counter Area Start-->
        <section class="counter-section section-padding">
            <div class="container">
                <div class="row">
                    <!-- Counter Item -->
                    <div
                        class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                        <div class="counter wow fadeInRight"
                             data-wow-delay="0.3s">
                            <div class="icon"><i class="lni-map"></i>
                            </div>
                            <p>@lang('home.pink_field1')</p>
                            <span>@lang('home.step1')</span>
                        </div>
                    </div>
                    <!-- Counter Item -->
                    <div
                        class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                        <div class="counter wow fadeInRight"
                             data-wow-delay="0.6s">
                            <div class="icon"><i
                                    class="lni-timer"></i></div>
                                    <p>@lang('home.pink_field2')</p>
                                    <span>@lang('home.step2')</span>
                        </div>
                    </div>
                    <!-- Counter Item -->
                    <div
                        class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                        <div class="counter wow fadeInRight"
                             data-wow-delay="0.9s">
                            <div class="icon"><i
                                class="lni-laptop-phone"></i></div>
                                <p>@lang('home.pink_field3')</p>
                                <span>@lang('home.step3')</span>
                        </div>
                    </div>
                    <!-- Counter Item -->
                    <div
                        class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                        <div class="counter wow fadeInRight"
                             data-wow-delay="1.2s">
                            <div class="icon"><i
                                class="lni-heart"></i>
                            </div>
                            <p>@lang('home.pink_field4')</p>
                            <span>@lang('home.step4')</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Area End-->




        <!-- Schedule Section Start -->
        <section id="schedules" class="schedule section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">@lang('home.rules_heading')</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">@lang('home.rules_message')
                                <br></p>
                        </div>
                    </div>
                </div>
                <!-- Pomorie -->
                <div class="schedule-area row wow fadeInDown"
                     data-wow-delay="0.3s">
                    <div
                        class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
                        <div class="table-responsive">
                            <ul class="nav nav-tabs" id="myTab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                       id="monday-tab"
                                       data-toggle="tab"
                                       href="#monday"
                                       role="tab"
                                       aria-controls="monday"
                                       aria-expanded="true">
                                        <div class="item-text">
                                            <h4>@lang('home.pomorie_name')</h4>
                                            <h5>@lang('home.pomorie_house_name')</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       id="tuesday-tab"
                                       data-toggle="tab"
                                       href="#tuesday"
                                       role="tab"
                                       aria-controls="tuesday">
                                        <div class="item-text">
                                            <h4>@lang('home.sinemorets_name')</h4>
                                            <h5>@lang('home.sinemorets_house_name')</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       id="wednesday-tab"
                                       data-toggle="tab"
                                       href="#wednesday"
                                       role="tab"
                                       aria-controls="wednesday">
                                        <div class="item-text">
                                            <h4>@lang('home.primorsko_name')</h4>
                                            <h5>@lang('home.primorsko_house_name')</h5>
                                        </div>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                  <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                                    <div class="item-text">
                                      <h4>Thursday</h4>
                                      <h5>17 February</h5>
                                    </div>
                                  </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div
                        class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active"
                                 id="monday"
                                 role="tabpanel"
                                 aria-labelledby="monday-tab">
                                <div id="accordion">
                                    <div class="card">
                                        <div id="headingOne">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="false"
                                                aria-controls="collapseOne">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-1.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.checkin_checkout_header')</h4>
                                                <h5 class="name">@lang('home.pomorie_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseOne"
                                             class="collapse show"
                                             aria-labelledby="headingOne"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <p>@lang('home.checkin_checkout_message')</p>
                                                <!-- <div class="location">
                                                    <span>@lang('home.important')</span>
                                                    Hall 1 , Building
                                                    A, Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-2.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.cansel_payment_header')</h4>
                                                <h5 class="name">@lang('home.pomorie_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseTwo"
                                             class="collapse"
                                             aria-labelledby="headingTwo"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <p>@lang('home.cansel_payment_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingThree">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseThree"
                                                aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-3.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.children_beds_header')</h4>
                                                <h5 class="name">@lang('home.pomorie_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseThree"
                                             class="collapse"
                                             aria-labelledby="headingThree"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <p>@lang('home.children_beds_pomorie_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingFour">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseFour"
                                                aria-expanded="false"
                                                aria-controls="collapseFour">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-4.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.pets_header')</h4>
                                                <h5 class="name">@lang('home.pomorie_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseFour"
                                             class="collapse"
                                             aria-labelledby="headingFour"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <p>@lang('home.pets_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div id="headingFive">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseFive"
                                                aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-5.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.cash_header')</h4>
                                                <h5 class="name">@lang('home.pomorie_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseFive"
                                             class="collapse"
                                             aria-labelledby="headingFive"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <p>@lang('home.cash_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!-- Sinemorets -->
                            <div class="tab-pane fade" id="tuesday"
                                 role="tabpanel"
                                 aria-labelledby="tuesday-tab">
                                <div id="accordion2">
                                    <div class="card">
                                        <div id="headingOne2">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseOne2"
                                                aria-expanded="false"
                                                aria-controls="collapseOne2">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-1.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.checkin_checkout_header')</h4>
                                                <h5 class="name">@lang('home.sinemorets_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseOne2"
                                             class="collapse show"
                                             aria-labelledby="headingOne2"
                                             data-parent="#accordion2">
                                            <div class="card-body">
                                                <p>@lang('home.checkin_checkout_message')</p>
                                                <!-- <div class="location">
                                                    <span>@lang('home.important')</span>
                                                    Hall 1 , Building
                                                    A, Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo2">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo2"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo2">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-2.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.cansel_payment_header')</h4>
                                                <h5 class="name">@lang('home.sinemorets_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseTwo2"
                                             class="collapse"
                                             aria-labelledby="headingTwo2"
                                             data-parent="#accordion2">
                                            <div class="card-body">
                                                <p>@lang('home.cansel_payment_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingThree2">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseThree2"
                                                aria-expanded="false"
                                                aria-controls="collapseThree2">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-3.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.children_beds_header')</h4>
                                                <h5 class="name">@lang('home.sinemorets_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseThree2"
                                             class="collapse"
                                             aria-labelledby="headingThree2"
                                             data-parent="#accordion2">
                                            <div class="card-body">
                                                <p>@lang('home.children_beds_pomorie_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingFour2">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseFour2"
                                                aria-expanded="false"
                                                aria-controls="collapseFour2">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-4.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.pets_header')</h4>
                                                <h5 class="name">@lang('home.sinemorets_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseFour2"
                                             class="collapse"
                                             aria-labelledby="headingFour2"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>@lang('home.pets_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div id="headingFive2">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseFive2"
                                                aria-expanded="false"
                                                aria-controls="collapseFive2">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-5.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.cash_header')</h4>
                                                <h5 class="name">@lang('home.sinemorets_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseFive2"
                                             class="collapse"
                                             aria-labelledby="headingFive2"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>@lang('home.cash_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- Primorsko -->
                            <!-- headingTwo3 and collapseTwo3 are not working corectly due to some css or javascript. So the order would be 1,3,4,5 ... -->
                            <div class="tab-pane fade" id="wednesday"
                                 role="tabpanel"
                                 aria-labelledby="wednesday-tab">
                                <div id="accordion3">
                                    <div class="card">
                                        <div id="headingOne3">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseOne3"
                                                aria-expanded="false"
                                                aria-controls="collapseOne3">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-1.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.checkin_checkout_header')</h4>
                                                <h5 class="name">@lang('home.primorsko_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseOne3"
                                             class="collapse show"
                                             aria-labelledby="headingOne3"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>@lang('home.checkin_checkout_message')</p>
                                                <!-- <div class="location">
                                                    <span>@lang('home.important')</span>
                                                    Hall 1 , Building
                                                    A, Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingThree3">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseThree3"
                                                aria-expanded="false"
                                                aria-controls="collapseThree3">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-2.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.cansel_payment_header')</h4>
                                                <h5 class="name">@lang('home.primorsko_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseThree3"
                                             class="collapse"
                                             aria-labelledby="headingThree3"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>@lang('home.cansel_payment_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingFour3">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseFour3"
                                                aria-expanded="false"
                                                aria-controls="collapseFour3">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-3.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.children_beds_header')</h4>
                                                <h5 class="name">@lang('home.primorsko_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseFour3"
                                             class="collapse"
                                             aria-labelledby="headingFour3"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>@lang('home.children_beds_pomorie_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingFive3">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseFive3"
                                                aria-expanded="false"
                                                aria-controls="collapseFive3">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-4.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.pets_header')</h4>
                                                <h5 class="name">@lang('home.primorsko_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseFive3"
                                             class="collapse"
                                             aria-labelledby="headingFive3"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>@lang('home.pets_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div id="headingSix3">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseSix3"
                                                aria-expanded="false"
                                                aria-controls="collapseSix3">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-5.png"
                                                        alt="">
                                                </div>
                                                <span
                                                    class="time"></span>
                                                <h4>@lang('home.cash_header')</h4>
                                                <h5 class="name">@lang('home.primorsko_house_name')</h5>
                                            </div>
                                        </div>
                                        <div id="collapseSix3"
                                             class="collapse"
                                             aria-labelledby="headingSix3"
                                             data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>@lang('home.cash_message')</p>
                                                <!-- <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                              <div id="accordion4">
                                <div class="card">
                                  <div id="headingOne">
                                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                                      <div class="images-box">
                                        <img class="img-fluid" src="img/speaker/speakers-1.jpg" alt="">
                                      </div>
                                      <span class="time">10am - 12:30pm</span>
                                      <h4>Web Design Principles and Best Practices</h4>
                                      <h5 class="name">David Warner</h5>
                                    </div>
                                  </div>
                                  <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion4">
                                    <div class="card-body">
                                      <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                                      <div class="location">
                                        <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div id="headingTwo">
                                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                      <div class="images-box">
                                        <img class="img-fluid" src="img/speaker/speakers-2.jpg" alt="">
                                      </div>
                                      <span class="time">10am - 12:30pm</span>
                                      <h4>Web Design Principles and Best Practices</h4>
                                      <h5 class="name">David Warner</h5>
                                    </div>
                                  </div>
                                  <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion4">
                                    <div class="card-body">
                                      <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                                      <div class="location">
                                        <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div id="headingThree4">
                                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                      <div class="images-box">
                                        <img class="img-fluid" src="img/speaker/speakers-3.jpg" alt="">
                                      </div>
                                      <span class="time">10am - 12:30pm</span>
                                      <h4>Web Design Principles and Best Practices</h4>
                                      <h5 class="name">David Warner</h5>
                                    </div>
                                  </div>
                                  <div id="collapseThree4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion4">
                                    <div class="card-body">
                                      <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                                      <div class="location">
                                        <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <div class="tab-pane fade" id="friday"
                                 role="tabpanel"
                                 aria-labelledby="friday-tab">
                                <div id="accordion">
                                    <div class="card">
                                        <div id="headingOne">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="false"
                                                aria-controls="collapseOne">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-1.jpg"
                                                        alt="">
                                                </div>
                                                <span class="time">10am - 12:30pm</span>
                                                <h4>Web Design
                                                    Principles and
                                                    Best
                                                    Practices</h4>
                                                <h5 class="name">David
                                                                 Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseOne"
                                             class="collapse show"
                                             aria-labelledby="headingOne"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Consectetur
                                                   adipisicing elit.
                                                   Quod distinctio
                                                   impedit sint
                                                   accusantium ducimus
                                                   lites
                                                   consequuntur
                                                   innobisl dolores
                                                   saepe.Proin
                                                   sit amet turpis
                                                   lobortis.</p>
                                                <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-2.jpg"
                                                        alt="">
                                                </div>
                                                <span class="time">10am - 12:30pm</span>
                                                <h4>Web Design
                                                    Principles and
                                                    Best
                                                    Practices</h4>
                                                <h5 class="name">David
                                                                 Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseTwo"
                                             class="collapse"
                                             aria-labelledby="headingTwo"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Consectetur
                                                   adipisicing elit.
                                                   Quod distinctio
                                                   impedit sint
                                                   accusantium ducimus
                                                   lites
                                                   consequuntur
                                                   innobisl dolores
                                                   saepe.Proin
                                                   sit amet turpis
                                                   lobortis.</p>
                                                <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingThree">
                                            <div
                                                class="collapsed card-header"
                                                data-toggle="collapse"
                                                data-target="#collapseThree"
                                                aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <div
                                                    class="images-box">
                                                    <img
                                                        class="img-fluid"
                                                        src="img/speaker/speakers-3.jpg"
                                                        alt="">
                                                </div>
                                                <span class="time">10am - 12:30pm</span>
                                                <h4>Web Design
                                                    Principles and
                                                    Best
                                                    Practices</h4>
                                                <h5 class="name">David
                                                                 Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Consectetur
                                                    adipisicing elit.
                                                    Quod distinctio
                                                    impedit sint
                                                    accusantium ducimus
                                                    lites
                                                    consequuntur
                                                    innobisl dolores
                                                    saepe.Proin
                                                    sit amet turpis
                                                    lobortis.</p>
                                                <div class="location">
                                                    <span>Location:</span>
                                                    Hall
                                                    1 ,
                                                    Building
                                                    A,
                                                    Golden
                                                    Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Schedule Section End -->

        <!-- Team Section Start -->

        <!-- <section id="team" class="section-padding text-center">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-title-header text-center">
                  <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Who's Speaking?</h1>
                  <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4"> -->

        <!-- Team Item Starts -->
        <!-- <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
          <div class="team-img">
            <img class="img-fluid" src="img/team/team-01.jpg" alt="">
            <div class="team-overlay">
              <div class="overlay-social-icon text-center">
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="info-text">
            <h3><a href="#">JONATHON DOE</a></h3>
            <p>Product Designer, Tesla</p>
          </div>
        </div> -->

        <!-- Team Item Ends -->

        <!-- </div>
        <div class="col-sm-6 col-md-6 col-lg-4"> -->

        <!-- Team Item Starts -->

        <!-- <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-img">
            <img class="img-fluid" src="img/team/team-02.jpg" alt="">
            <div class="team-overlay">
              <div class="overlay-social-icon text-center">
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="info-text">
            <h3><a href="#">Patric Green</a></h3>
            <p>Front-end Developer, Dropbox</p>
          </div>
        </div> -->

        <!-- Team Item Ends -->

        <!-- </div> -->

        <!-- <div class="col-sm-6 col-md-6 col-lg-4"> -->

        <!-- Team Item Starts -->

        <!-- <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
          <div class="team-img">
            <img class="img-fluid" src="img/team/team-03.jpg" alt="">
            <div class="team-overlay">
              <div class="overlay-social-icon text-center">
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="info-text">
            <h3><a href="#">Paul Kowalsy</a></h3>
            <p>Lead Designer, TNW</p>
          </div>
        </div> -->

        <!-- Team Item Ends -->

        <!-- </div>

        <div class="col-sm-6 col-md-6 col-lg-4"> -->

        <!-- Team Item Starts -->

        <!-- <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-img">
            <img class="img-fluid" src="img/team/team-04.jpg" alt="">
            <div class="team-overlay">
              <div class="overlay-social-icon text-center">
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="info-text">
            <h3><a href="#">Jhon Doe</a></h3>
            <p>Back-end Developer, ASUS</p>
          </div>
        </div> -->

        <!-- Team Item Ends -->

        <!-- </div>
        <div class="col-sm-6 col-md-6 col-lg-4"> -->

        <!-- Team Item Starts -->

        <!-- <div class="team-item wow fadeInUp" data-wow-delay="1s">
          <div class="team-img">
            <img class="img-fluid" src="img/team/team-05.jpg" alt="">
            <div class="team-overlay">
              <div class="overlay-social-icon text-center">
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="info-text">
            <h3><a href="#">Daryl Dixon</a></h3>
            <p>Full-stack Developer, Google</p>
          </div>
        </div> -->

        <!-- Team Item Ends -->

        <!-- </div>
        <div class="col-sm-6 col-md-6 col-lg-4"> -->

        <!-- Team Item Starts -->

        <!-- <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
          <div class="team-img">
            <img class="img-fluid" src="img/team/team-06.jpg" alt="">
            <div class="team-overlay">
              <div class="overlay-social-icon text-center">
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="info-text">
            <h3><a href="#">Chris Adams</a></h3>
            <p>UI Designer, Apple</p>
          </div>
        </div> -->

        <!-- Team Item Ends -->

        <!-- </div>
      </div>
      <a href="speakers.html" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">All Speakers</a>
    </div>
  </section> -->

        <!-- Team Section End -->

        <!-- Gallary Section Start -->
        <section id="gallery" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">
                                @lang('home.appartments')
                            </h1>
                            {{--<p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="gallery-box">
                            <div class="img-thumb">
                                <img class="img-fluid"
                                     src="img/apartments/primorsko/primsko.jpg"
                                     alt="">
                            </div>
                            <div class="overlay-box text-center">
                                <a data-toggle="modal"
                                   data-target="#primorskoModal"
                                   onclick="showSlides(1, 'primorsko')"
                                   class="lightbox" href="#gallery">
                                    <h4 style="color: white; margin-left: -2.5em; text-transform: uppercase;">
                                        <strong>@lang('home.primorsko_name')</strong>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="primorskoModal"
                         tabindex="-1"
                         role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog"
                             style="max-width: 80% !important; height: auto !important; margin-top: 5em;"
                             role="document">
                            <div class="modal-content"
                                 style="min-height: 800px;">
                                <div class="modal-body">
                                    @include('apartments.primorsko')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="gallery-box">
                            <div class="img-thumb">
                                <img class="img-fluid"
                                     src="img/apartments/pomorie/pomorie.jpg"
                                     alt="">
                            </div>
                            <div class="overlay-box text-center">
                                <a data-toggle="modal"
                                   data-target="#pomorieModal"
                                   onclick="showSlides(1, 'pomorie')"
                                   class="lightbox"
                                   href="#gallery">
                                    <h4 style="color: white; margin-left: -2em; text-transform: uppercase;">
                                        <strong>@lang('home.pomorie_name')</strong>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="pomorieModal"
                         tabindex="-1"
                         role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog"
                             style="max-width: 80% !important; height: auto !important; margin-top: 5em;"
                             role="document">
                            <div class="modal-content"
                                 style="min-height: 800px;">
                                <div class="modal-body">
                                    @include('apartments.pomorie')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="gallery-box">
                            <div class="img-thumb">
                                <img class="img-fluid"
                                     src="img/apartments/sinemorec/38.jpg"
                                     alt="">
                            </div>
                            <div class="overlay-box text-center">
                                <a data-toggle="modal"
                                   onclick="showSlides(1, 'sinemorets')"
                                   data-target="#sinemorecModal"
                                   class="lightbox" href="#gallery">
                                    <h4 style="color: white; margin-left: -2.5em; text-transform: uppercase;">
                                        <strong>@lang('home.sinemorets_name')</strong>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="sinemorecModal"
                         tabindex="-1"
                         role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog"
                             style="max-width: 80% !important; height: auto !important; margin-top: 5em;"
                             role="document">
                            <div class="modal-content"
                                 style="min-height: 800px;">
                                <div class="modal-body">
                                    @include('apartments.sinemorec')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallary Section End -->

        <!-- Ask Question Section Start 1-->
        <!-- Property Pomorie-->
        <section id="faq" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">@lang('home.pomorie_house_name')</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">@lang('home.pomorie_name')</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div
                        class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header"
                                     id="headingOne">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionOne"
                                         aria-expanded="true"
                                         aria-controls="collapseOne">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.tripple_room') </font>
                                            &nbsp;
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                    </div>
                                </div>
                                <div id="questionOne" class="collapse"
                                     aria-labelledby="headingOne"
                                     data-parent="#question">
                                    <div class="card-body">
                                    {!! trans('home.tripple_room_pomorie_beds') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"
                                     id="headingTwo">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionTwo"
                                         aria-expanded="false"
                                         aria-controls="questionTwo">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.double_room') </font>
                                            &nbsp;
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionTwo" class="collapse"
                                     aria-labelledby="headingTwo"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.double_room_pomorie_beds') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"
                                     id="headingThree">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionThree"
                                         aria-expanded="false"
                                         aria-controls="questionThree">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.four_room') </font>
                                            &nbsp;
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionThree"
                                     class="collapse"
                                     aria-labelledby="headingThree"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.four_room_pomorie_beds') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"
                                     id="headingFour">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionFour"
                                         aria-expanded="false"
                                         aria-controls="questionFour">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.five_room') </font>
                                            &nbsp;
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        X 5 </span>
                                    </div>
                                </div>
                                <div id="questionFour"
                                     class="collapse"
                                     aria-labelledby="headingThree"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.five_room_pomorie_beds') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header"
                                     id="headingFive">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionOne2"
                                         aria-expanded="true"
                                         aria-controls="collapseOne">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.studio_balcony') </font>
                                            &nbsp;<span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionOne2"
                                     class="collapse"
                                     aria-labelledby="headingOne"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.studio_balcony_beds') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"
                                     id="headingSix">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionTwo2"
                                         aria-expanded="false"
                                         aria-controls="questionTwo">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.double_room_balcony') </font>
                                            &nbsp;<span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionTwo2"
                                     class="collapse"
                                     aria-labelledby="headingTwo"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.double_room_balcony_beds') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"
                                     id="headingSeven">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionFive"
                                         aria-expanded="false"
                                         aria-controls="questionFive">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.tripple_room_balcony') </font>
                                            &nbsp;<span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                    </div>
                                </div>
                                <div id="questionFive"
                                     class="collapse"
                                     aria-labelledby="headingThree"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.tripple_room_balcony_beds') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Pomorie End -->


        <!-- Ask Question Section Start -->
        <!-- Property Primorsko-->
        <section id="faq" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">@lang('home.primorsko_house_name')</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">@lang('home.primorsko_name')</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header"
                                     id="headingOne">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionTwoOne"
                                         aria-expanded="true"
                                         aria-controls="collapseOne">
                                        <i class="lni-home"></i>
                                        <font color="#E91E63">@lang('home.appartment_primorsko') </font>
                                        &nbsp;
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionTwoOne"
                                     class="collapse"
                                     aria-labelledby="headingOne"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.appartment_primorsko_beds') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header"
                                     id="headingOne2">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionTwoTwo"
                                         aria-expanded="true"
                                         aria-controls="collapseOne">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.studio_appartment_primorsko') </font>
                                            &nbsp;
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionTwoTwo"
                                     class="collapse"
                                     aria-labelledby="headingOne"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.studio_appartment_primorsko_beds') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Primorsko End -->

        <!-- Ask Question Section Start -->
        <!-- Property Sinemorets-->
        <section id="faq" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">@lang('home.sinemorets_house_name')</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">@lang('home.sinemorets_name')</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header"
                                     id="headingOne">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionThreeOne"
                                         aria-expanded="true"
                                         aria-controls="collapseOne">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.standard_double_room_sinemorets') </font>
                                            &nbsp; <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionThreeOne"
                                     class="collapse"
                                     aria-labelledby="headingOne"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.double_room_sinemorets_beds') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"
                                     id="headingTwo">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionThreeTwo"
                                         aria-expanded="false"
                                         aria-controls="questionTwo">
                                        <i class="lni-home"></i>
                                        <font
                                                color="#E91E63">@lang('home.deluxe_double_room_sinemorets') </font>
                                            &nbsp; <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span> </span>
                                    </div>
                                </div>
                                <div id="questionThreeTwo"
                                     class="collapse"
                                     aria-labelledby="headingTwo"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.double_room_sinemorets_beds') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header"
                                     id="headingOne2">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionThreeThree"
                                         aria-expanded="true"
                                         aria-controls="collapseOne">
                                        <i class="lni-home"></i>
                                        <font
                                                color="#E91E63">@lang('home.tripple_room_sinemorets') </font>
                                            &nbsp;<span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                    </div>
                                </div>
                                <div id="questionThreeThree"
                                     class="collapse"
                                     aria-labelledby="headingOne"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.tripple_room_sinemorets_beds') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"
                                     id="headingTwo2">
                                    <div class="header-title"
                                         data-toggle="collapse"
                                         data-target="#questionThreeFour"
                                         aria-expanded="false"
                                         aria-controls="questionTwo">
                                        <i class="lni-home"></i>
                                        <font
                                            color="#E91E63">@lang('home.five_room') </font>
                                            &nbsp;
                                        <span
                                            class="glyphicon glyphicon-user"></span>
                                        X 5 </span>
                                    </div>
                                </div>
                                <div id="questionThreeFour"
                                     class="collapse"
                                     aria-labelledby="headingTwo"
                                     data-parent="#question">
                                    <div class="card-body">
                                        {!! trans('home.five_room_sinemorets_beds') !!}
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- Property Sinemorets End -->



        <!-- Ticket Pricing Area Start -->
        <!-- Pomorie pricing -->
        <section id="pricing" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">@lang('home.our_pricing')</h1>
                            <p class="wow fadeInDown" data-wow-delay="0.2s">
                                @lang('home.our_pricing_vary')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                        <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon">
                                <img src="../img/blog/pm_house.jpg" width="200" height="200">
                            </div>

                            <div class="colmun-title">
                                <h5>{!! trans('home.pomorie_house_name_price') !!}</h5>
                                <h6>@lang('home.pomorie_name')</h6>
                            </div>
                            <div class="price">
                                <p>{!! trans('home.pomorie_prices_start_from') !!}</p>
                            </div>

                            <button class="btn btn-common" data-toggle="collapse" data-target="#demo">{!! trans('home.read_more') !!}</button>

                            <div id="demo" class="collapse">
                                <div class="pricing-list">
                                    <ul>
                                        <li>
                                            <i class="lni-check-mark-circle"></i><span class="text">
                                                {!! trans('home.five_room') !!}
                                                {!! trans('home.pomorie_five_room_price') !!}</span>
                                            </li>
                                        <li>
                                            <i class="lni-check-mark-circle"></i><span class="text">{!!
                                                trans('home.double_room') !!}
                                                {!!trans('home.pomorie_double_room_price') !!}</span>
                                        </li>
                                        <li>
                                            <i class="lni-check-mark-circle"></i><span class="text">{!!
                                                trans('home.tripple_room') !!}
                                                {!!trans('home.pomorie_tripple_room_price') !!}</span>
                                        </li>
                                        <li><i class="lni-check-mark-circle"></i><span class="text">{!! trans('home.four_room') !!}
                                                {!!trans('home.pomorie_four_room_price') !!}</span>
                                        </li>
                                        <li><i class="lni-check-mark-circle"></i><span class="text">{!! trans('home.double_room_balcony')!!}
                                                {!!trans('home.pomorie_double_room_balcony_price') !!}</span>
                                        </li>
                                        <li>
                                            <i class="lni-check-mark-circle"></i><span class="text">{!!
                                                trans('home.tripple_room_balcony') !!}
                                                {!!trans('home.pomorie_tripple_room_balcony_price') !!}</span>
                                        </li>
                                        <li>
                                            <i class="lni-check-mark-circle"></i><span class="text">{!!
                                                trans('home.studio_balcony')!!}
                                                {!!trans('home.pomorie_studio_balcony_price') !!}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                        <div class="price-block-wrapper wow fadeInUp" data-wow-delay="0.3s">
                            <div class="icon">
                                <img src="../img/blog/sinemorets_house.jpg" width="200" height="200">
                            </div>


                            <div class="colmun-title">
                                <h5>{!!trans('home.sinemorets_house_name_price') !!}</h5>
                                <h6>@lang('home.sinemorets_name')</h6>
                            </div>

                            <div class="price">
                                <!-- <h4>$29</h4> -->
                                <p>{!! trans('home.sinemorets_prices_start_from') !!}</p>
                                <!-- <p>452 Tickets Available</p> -->
                            </div>
                            <button class="btn btn-common" data-toggle="collapse" data-target="#demo1">{!! trans('home.read_more') !!}</button>
                            <!-- <p> <br/> </p> -->
                            <br/>

                            <div id="demo1" class="collapse">
                                <div class="pricing-list">
                                        <ul>
                                                <li>
                                                    <i class="lni-check-mark-circle"></i><span class="text"> {!!
                                                        trans('home.standard_double_room_sinemorets') !!}
                                                        {!!trans('home.sinemorets_standard_double_room_price') !!}</span>
                                                    </li>
                                                <li>
                                                    <i class="lni-check-mark-circle"></i><span class="text">{!!
                                                        trans('home.deluxe_double_room_sinemorets') !!}
                                                        {!!trans('home.sinemorets_deluxe_double_room_price') !!}</span>
                                                </li>
                                                <li>
                                                    <i class="lni-check-mark-circle"></i><span class="text">{!!
                                                        trans('home.tripple_room_sinemorets') !!}
                                                        {!!trans('home.sinemorets_tripple_room_price') !!}</span>
                                                </li>
                                                <li><i class="lni-check-mark-circle"></i><span class="text">
                                                        {!! trans('home.five_room') !!}
                                                        {!!trans('home.sinemorets_five_room_price') !!}</span>
                                                </li>

                                            </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                        <div class="price-block-wrapper wow fadeInRight" data-wow-delay="0.4s">
                            <div class="icon">
                                <img src="../img/blog/primorsko_house.jpg" width="200" height="200">
                            </div>

                            <div class="colmun-title">
                                <h5>{!!trans('home.primorsko_house_name_price') !!}</h5>
                                <h6>@lang('home.primorsko_name')</h6>
                            </div>
                            <div class="price">
                                <!-- <h4>$29</h4> -->
                                <p> {!! trans('home.primorsko_prices_start_from') !!}</p>
                                <!-- <p>452 Tickets Available</p> -->
                            </div>

                            <button class="btn btn-common" data-toggle="collapse" data-target="#demo2">{!! trans('home.read_more') !!}</button>

                            <div id="demo2" class="collapse">
                                <div class="pricing-list">
                                    <ul>
                                        <li>
                                            <i class="lni-check-mark-circle"></i><span class="text">
                                                {!! trans('home.appartment_primorsko') !!}
                                                {!! trans('home.primorsko_appartment_price') !!}
                                               </span>
                                        </li>
                                        <li>
                                                <i class="lni-check-mark-circle"></i><span class="text">
                                                    {!! trans('home.studio_appartment_primorsko') !!}
                                                    {!! trans('home.primorsko_studio_appartment_price') !!}
                                                   </span>
                                            </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ticket Pricing Area End -->

        <!-- Event Slides Section Start -->
        <!-- <section id="event-slides" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">Event
                                                      Guideline</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">
                                Global Grand Event on Digital
                                Design</p>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight"
                        data-wow-delay="0.3s">
                        <div class="video">
                            <img class="img-fluid"
                                 src="img/about/about.jpg"
                                 alt="">
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft"
                        data-wow-delay="0.3s">
                        <p class="intro-desc">Lorem Ipsum is simply
                                              dummy text
                                              of the printing and
                                              typesetting
                                              industry.
                                              Lorem Ipsum has been the
                                              industry's standard
                                              dummy text
                                              ever since the
                                              1500s, when an unknown
                                              printer
                                              took a galley of type
                                              and
                                              scrambled it to
                                              make a type specimen
                                              book. It has
                                              survived not only five
                                              centuries.
                        </p>
                        <h2 class="intro-title">Check List</h2>
                        <ul class="list-specification">
                            <li><i class="lni-check-mark-circle"></i>
                                Lorem
                                Ipsum is
                                simply
                                dummy
                            </li>
                            <li><i class="lni-check-mark-circle"></i>
                                Ipsum
                                passages,
                                and more
                                recently
                            </li>
                            <li><i class="lni-check-mark-circle"></i>
                                PageMaker
                                including
                                versions
                            </li>
                            <li><i class="lni-check-mark-circle"></i>
                                Lorem
                                Ipsum is
                                simply
                                dummy
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Event Slides Section End -->

        <!-- Blog Section Start -->
        <!-- <section id="blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">Our Latest News
                                                      &
                                                      Articles</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">
                                Global Grand Event on Digital
                                Design</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-image">
                                <a href="#">
                                    <img class="img-fluid"
                                         src="img/blog/img-1.jpg"
                                         alt="">
                                </a>
                            </div>
                            <div class="descr">
                                <div class="tag">Design</div>
                                <h3 class="title">
                                    <a href="single-blog.html">
                                        The 9 Design Trends You Need
                                        to Know
                                    </a>
                                </h3>
                                <div class="meta-tags">
                                    <span
                                        class="date">Jan 20, 2018</span>
                                    <span class="comments">| <a
                                            href="#"> by Cindy Jefferson</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-image">
                                <a href="#">
                                    <img class="img-fluid"
                                         src="img/blog/img-2.jpg"
                                         alt="">
                                </a>
                            </div>
                            <div class="descr">
                                <div class="tag">Design</div>
                                <h3 class="title">
                                    <a href="single-blog.html">
                                        The 9 Design Trends You Need
                                        to Know
                                    </a>
                                </h3>
                                <div class="meta-tags">
                                    <span
                                        class="date">Jan 20, 2018 </span>
                                    <span class="comments">| <a
                                            href="#"> by Cindy Jefferson</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-image">
                                <a href="#">
                                    <img class="img-fluid"
                                         src="img/blog/img-3.jpg"
                                         alt="">
                                </a>
                            </div>
                            <div class="descr">
                                <div class="tag">Design</div>
                                <h3 class="title">
                                    <a href="single-blog.html">
                                        The 9 Design Trends You Need
                                        to Know
                                    </a>
                                </h3>
                                <div class="meta-tags">
                                    <span
                                        class="date">Jan 20, 2018</span>
                                    <span class="comments">| <a
                                            href="#"> by Cindy Jefferson</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-common">Read More
                                                           News</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Blog Section End -->

        <!-- Subscribe Area Start -->
        <!-- <div id="subscribe" class="section-padding">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 col-lg-7">
                        <div class="subscribe-inner wow fadeInDown"
                             data-wow-delay="0.3s">
                            <h2 class="subscribe-title">Sign Up For
                                                        Our
                                                        Newsletter</h2>
                            <form class="text-center form-inline">
                                <input class="mb-20 form-control"
                                       name="email"
                                       placeholder="Enter Your Email Here">
                                <button type="submit"
                                        class="btn btn-common sub-btn"
                                        data-style="zoom-in"
                                        data-spinner-size="30"
                                        name="submit"
                                        id="submit">
                                    <span class="ladda-label"><i
                                            class="lni-check-box"></i> Submit</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Subscribe Area End -->

        <!-- Contact Us Section -->
        <section id="contact-map" class="section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp"
                                data-wow-delay="0.2s">@lang('home.drop_message')</h1>
                            <p class="wow fadeInDown"
                               data-wow-delay="0.2s">
                                @lang('home.form_message')  </p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-xs-12">
                        <div class="container-form wow fadeInLeft"
                             data-wow-delay="0.2s">
                            <div class="form-wrapper">
                                <form role="form" method="post"
                                      id="contactForm"
                                      name="contact-form"
                                      data-toggle="validator" ,
                                      action='/home'>
                                    <div class="row">
                                        <div
                                            class="col-md-6 form-line">
                                            <div class="form-group">
                                                <input type="text"
                                                       class="form-control"
                                                       id="firstName"
                                                       name="firstName"
                                                       placeholder="@lang('home.first_name')"
                                                       required
                                                       data-error="@lang('home.first_name_message')">
                                                <div
                                                    class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-6 form-line">
                                            <div class="form-group">
                                                <input type="text"
                                                       class="form-control"
                                                       id="lastName"
                                                       name="lastName"
                                                       placeholder="@lang('home.last_name')"
                                                       required
                                                       data-error="@lang('home.last_name_message')">
                                                <div
                                                    class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-6 form-line">
                                            <div class="form-group">
                                                <input type="email"
                                                       class="form-control"
                                                       id="email"
                                                       name="email"
                                                       placeholder="@lang('home.email')"
                                                       required
                                                       data-error="@lang('home.email_message')">
                                                <div
                                                    class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-6 form-line">
                                            <div class="form-group">
                                                <input type="tel"
                                                       class="form-control"
                                                       id="phoneNumber"
                                                       name="phoneNumber"
                                                       placeholder="@lang('home.telephone')"
                                                       data-error="@lang('home.email_message')">
                                                <div
                                                    class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-12 form-line">
                                            <div class="form-group">
                                                <input type="text"
                                                       class="form-control"
                                                       id="msg_subject"
                                                       name="subject"
                                                       placeholder="@lang('home.subject')"
                                                       required
                                                       data-error="@lang('home.subject_message')">
                                                <div
                                                    class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea
                                                    class="form-control"
                                                    rows="4"
                                                    id="messageContent"
                                                    name="messageContent"
                                                    required
                                                    data-error="Write your message"></textarea>
                                            </div>
                                            <div class="form-submit">
                                                <button type="submit"
                                                        class="btn btn-common"
                                                        value="Send">
                                                    <i
                                                        class="fa fa-paper-plane"
                                                        aria-hidden="true"></i>
                                                    @lang('home.send_us_now')
                                                </button>
                                                @if(session()->has('msgSubmit'))
                                                    <div
                                                        id="msgSubmit"
                                                        class="h3 text-center hidden">
                                                        {{ session()->get('msgSubmit') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Section End -->

        <!-- Map Section Start -->
        <section id="google-map-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div id="conatiner-map"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Map Section End -->

        @include('components.footer')

        <!-- Go to Top Link -->
        {{--<a href="#" class="back-to-top">--}}
            {{--<i class="lni-chevron-up"></i>--}}
        {{--</a>--}}

        <div id="preloader">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/components/language-bar.js"></script>
        <script src="js/components/slider-gallery.js"></script>
        <script src="js/jquery-min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/nivo-lightbox.js"></script>
        <script src="js/main.js"></script>
        <script src="js/form-validator.min.js"></script>
        <script src="js/contact-form-script.min.js"></script>
        <script src="js/map.js"></script>
        <script type="text/javascript"
                src="//maps.googleapis.com/maps/api/js?key=AIzaSyDS7ifsp9xmR4lQlZbvFuEY8881JSTJm8c&callback=initMap"></script>

        <script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="af937cbe-136a-4e63-9c30-fa4a1acf3d41";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>

    </body>
</html>
