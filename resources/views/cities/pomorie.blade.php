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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <script src="js/jquery-min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

    <!-- blog template -->
    <link rel="stylesheet" type="text/css" href="css/pomorie.css">
    <!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#header-wrap">
                @lang('home.home')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/home#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/home#schedules">
                  @lang('home.rules')
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#team">
                  Speakers
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/home#gallery">
                @lang('home.appartments')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/home#faq">
                @lang('home.faq')
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#sponsors">
                  Sponsors
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/home#pricing">
                  pricing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/home#google-map-area">
                @lang('home.contacts')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="locale/en">
                English
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="locale/bg"   >
                Bulgarian
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a href="/home#header-wrap">Home</a>
          </li>
          <li>
            <a href="/home#about">About</a>
          </li>
          <li>
             <a class="page-scroll" href="/home#schedules">schedules</a>
          </li>
          <!-- <li>
            <a class="page-scroll" href="#team">Speakers</a>
          </li> -->
          <li>
            <a class="page-scroll" href="/home#gallery">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="/home#faq">Faq</a>
          </li>
          <!-- <li>
            <a class="page-scroll" href="#sponsors">Sponsors</a>
          </li> -->
          <li>
            <a class="page-scroll" href="/home#pricing">pricing</a>
          </li>
          <li>
            <a class="page-scroll" href="/home#google-map-area">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
    </header>

    <section class="banner-section">
      <!-- background-image:"url("https://static.pexels.com/photos/373912/pexels-photo-373912.jpeg")"; -->
      <!-- <img src="img/blog/pm-cover.jpg" alt=""> -->
    </section>
    <section class="post-content-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">

                    <h1 class="text-center">{!! trans('home.pomorie_name') !!}</h1>
                    <ul class="list-inline text-center">
                        <li>{!! trans('home.pomorie_temperature') !!}</li>
                        <li>{!! trans('home.pomorie_water_temperature') !!}</li>
                        <li>{!! trans('home.pomorie_beach') !!}</li>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <a class="weatherwidget-io" href="{!! trans('home.pomorie_weather_link') !!}" data-label_1="{!! trans('home.pomorie_name') !!}" data-label_2="{!! trans('home.country') !!}" data-theme="original" >POMORIE WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                    <p class="lead">{!! trans('home.pomorie_one') !!}</p>
                    <p>{!! trans('home.pomorie_two') !!}</p>
                     <div class="image-block1 ">
                        <img src="../img/blog/pm-cover1.jpg" style='height: 100%; width: 100%; object-fit: contain'/>
                    </div>
                    <p>{!! trans('home.pomorie_three') !!}</p>
    <p>{!! trans('home.pomorie_four') !!}</p>
                    <blockquote>
      <p>{!! trans('home.pomorie_five') !!}</p>

    </blockquote>

                     <div class="image-block1">
                         <img src="../img/blog/pm-cover2.jpg" style='height: 100%; width: 100%; object-fit: contain'/>
                     </div>
                 </div>
                <div class="col-lg-3  col-md-3 col-sm-12">
                    <!-- <div class="well">
                        <h2>Subscription Box</h2>
                        <p>Form Description Goes here</p>
                        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
                    </div>
                    <div class="well">
                        <h2>Share love</h2>
                        <ul class="list-inline">
                            <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>
                            <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>
                            <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>
                            <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>

                        </ul>
                    </div> -->
                    <div class="well">
                      <h3>{!! trans('home.pomorie_appartments') !!}</h3>
                        <div class="media"> <div class="media-left"> <a href="/#gallery"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" width='84px' height='84px' src="{{ asset('../img/blog/pm_house.jpg') }}" data-holder-rendered="true"> </a> </div> <div class="media-body"> <h4 class="media-heading">Guest House More</h4>{!! trans('home.pomorie_house_desc') !!}</div> </div>
                        <!-- <div class="media"> <div class="media-left"> <a href="#"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTY5MjIxZTM1NSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjkyMjFlMzU1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> </a> </div> <div class="media-body"> <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla.</div> </div>
                        <div class="media"> <div class="media-left"> <a href="#"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTY5MjIxZTM1NSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjkyMjFlMzU1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> </a> </div> <div class="media-body"> <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla.</div> </div> -->
                    </div>
                    <div class="well">
                        <h3>{!! trans('home.pomorie_cities') !!}</h3>
                      <div class="list-group">
                        <a class="list-group-item active" href="/pomorie"> <h4 class="list-group-item-heading">{!! trans('home.pomorie_name') !!}</h4> <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> </a>
                        <a class="list-group-item" href="/sinemorets"> <h4 class="list-group-item-heading">{!! trans('home.sinemorets_name') !!}</h4> <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> </a>
                        <a class="list-group-item" href="/primorsko"> <h4 class="list-group-item-heading">{!! trans('home.primorsko_name') !!}</h4> <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> </a>
                      </div>
                    </div>
                </div>
            </div>


        </div> <!-- /container -->
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

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
