<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Slicknav -->
        <link rel="stylesheet" type="text/css" href="css/slicknav.css">
        <!-- Animate -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- motiv8soft template -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
        <style type="text/css" media="screen">
            .navbar-nav > li > a {
                padding-top: 0px !important;
            }
        </style>
        <!-- blog template -->
        <link rel="stylesheet" type="text/css" href="css/pomorie.css">
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>

        {{--@include('components.nav-bar')--}}

        <section class="banner-section">
            <a href="/">
                <i class="lni-chevron-left" style="color: white; font-size: 3em; line-height: 2 !important;"></i>
            </a>

            <a href="javascript:void(0)" id="lngItem"
               class="dropdown-toggle"
               data-toggle="dropdown"
               role="button"
               aria-expanded="false"
               style="float: right; margin: 25px; text-transform: uppercase; color: white;">
                <img id="imgNavSel"
                     class="img-thumbnail icon-small"
                     style="background-color: transparent; border: none;">  
                <span id="lanNavSel"
                      style="color: white;">English</span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a id="navBg" href="locale/bg"
                       target="_self"
                       class="language">
                        <img id="imgNavBg"
                             class="img-thumbnail icon-small"
                             style="background-color: transparent; border: none;">  
                        <span id="lanNavBg">Български</span>
                    </a>
                </li>
                <li>
                    <a id="navEng"
                       href="locale/en"
                       target="_self"
                       class="language">
                        <img id="imgNavEng"
                             class="img-thumbnail icon-small"
                             style="background-color: transparent; border: none;">  
                        <span id="lanNavEng">English</span>
                    </a>
                </li>
            </ul>
        </section>

        <section id="main-content" class="post-content-section">
            <div class="container">
                <p></p>
                <div class="row">
                    @include('cities.pomorie')
                    @include('cities.sinemorets')
                    @include('cities.primorsko' )
                </div>
            </div>
            @include('components.footer')
        </section>

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

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/components/language-bar.js"></script>
        <script src="js/components/dynamic-content.js"></script>
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

        <script type="text/javascript"> window.$crisp = [];
            window.CRISP_WEBSITE_ID = "af937cbe-136a-4e63-9c30-fa4a1acf3d41";
            (function () {
                d = document;
                s = d.createElement("script");
                s.src = "https://client.crisp.chat/l.js";
                s.async = 1;
                d.getElementsByTagName("head")[0].appendChild(s);
            })(); </script>
    </body>
</html>
