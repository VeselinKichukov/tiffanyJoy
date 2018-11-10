<!-- Navbar Start -->
<nav
    class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#main-navbar"
                    aria-controls="main-navbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img
                    src="img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse"
             id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link"
                       href="#header-wrap">
                        @lang('home.home')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedules">
                        @lang('home.rules')
                    </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#team">
                    Speakers
                  </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">
                        @lang('home.appartments')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">
                        @lang('home.faq')
                    </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#sponsors">
                    Sponsors
                  </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">
                        pricing
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="#google-map-area">
                        @lang('home.contacts')
                    </a>
                </li>
                {{--HERE--}}
                <li class="nav-item dropdown">
                    <a href="#" id="lngItem"
                       class="dropdown-toggle"
                       data-toggle="dropdown"
                       role="button"
                       aria-expanded="false"
                       style="position: fixed; top: 3px; text-transform: uppercase; color: white;">
                        @lang('home.language'):
                        <img id="imgNavSel"
                             class="img-thumbnail icon-small"
                             style="background-color: transparent; border: none;">  
                        <span id="lanNavSel"
                              style="color: white;">ENG</span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a id="navBg" href="locale/bg"
                               target="_self"
                               class="language">
                                <img id="imgNavBg"
                                     class="img-thumbnail icon-small"
                                     style="background-color: transparent; border: none;">  
                                <span id="lanNavBg">Bulgarian</span>
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
                </li>
                {{--END HERE--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link"  href="locale/en">--}}
                {{--English--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="locale/bg"   >--}}
                {{--Bulgarian--}}
                {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu">
        <li>
            <a class="page-scrool" href="#header-wrap">Home</a>
        </li>
        <li>
            <a class="page-scrool" href="#about">About</a>
        </li>
        <li>
            <a class="page-scroll" href="#schedules">schedules</a>
        </li>
        <!-- <li>
          <a class="page-scroll" href="#team">Speakers</a>
        </li> -->
        <li>
            <a class="page-scroll"
               href="#gallery">Gallery</a>
        </li>
        <li>
            <a class="page-scroll" href="#faq">Faq</a>
        </li>
        <!-- <li>
          <a class="page-scroll" href="#sponsors">Sponsors</a>
        </li> -->
        <li>
            <a class="page-scroll"
               href="#pricing">pricing</a>
        </li>
        <li>
            <a class="page-scroll"
               href="#google-map-area">Contact</a>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</nav>
<!-- Navbar End -->
