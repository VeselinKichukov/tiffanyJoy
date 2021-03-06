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
            <a href="/" class="navbar-brand"><img
                    src="img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse"
             id="main-navbar" style="position: fixed; right: 10em;">
            <ul class="navbar-nav w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link"
                       href="/#header-wrap">
                        @lang('home.home')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about">
                        @lang('home.about_cities')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#schedules">
                        @lang('home.rules')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#gallery">
                        @lang('home.appartments')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#faq">
                        @lang('home.faq')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#pricing">
                        @lang('home.pricing')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="#google-map-area">
                        @lang('home.contacts')
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" id="lngItem"
                       class="dropdown-toggle"
                       data-toggle="dropdown"
                       role="button"
                       aria-expanded="false"
                       style="position: fixed; margin-top: 17px; text-transform: uppercase; color: white;">
                        <img id="imgNavSel"
                             class="img-thumbnail icon-small"
                             style="background-color: transparent; border: none;">  
                        <span id="lanNavSel"
                              style="color: white;">@lang('home.language')</span>
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
                </li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu">
        <li>
            <a class="page-scrool" href="#header-wrap">@lang('home.home')</a>
        </li>
        <li>
            <a class="page-scrool" href="#about">@lang('home.about_cities')</a>
        </li>
        <li>
            <a class="page-scroll" href="#schedules">@lang('home.rules')</a>
        </li>
        <li>
            <a class="page-scroll"
               href="#gallery">@lang('home.appartments')</a>
        </li>
        <li>
            <a class="page-scroll" href="#faq">@lang('home.faq')</a>
        </li>
        <li>
            <a class="page-scroll"
               href="#pricing">@lang('home.pricing')</a>
        </li>
        <li>
            <a class="page-scroll"
               href="#google-map-area">@lang('home.contacts')</a>
        </li>
        <li>
            <a href="javascript:void(0)" id="lngItem"
               class="page-scroll"
               data-toggle="dropdown"
               role="button"
               aria-expanded="false">
                <img id="imgNavSel"
                     class="img-thumbnail icon-small"
                     style="background-color: transparent; border: none;">  
                <span id="lanNavSel">@lang('home.language')</span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a id="navBg" href="locale/bg"
                       target="_self"
                       class="language">
                        <img id="imgNavBg"
                             class="img-thumbnail icon-small"
                             style="background-color: transparent; border: none;"
                             src="https://i.ibb.co/XFBNrhb/bg.png">  
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
                             style="background-color: transparent; border: none;"
                             src="https://i.ibb.co/q5GvJxv/en.png">  
                        <span id="lanNavEng">English</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</nav>
<!-- Navbar End -->
<style>
    .slicknav_nav .slicknav_arrow {
        display: none !important;
    }
</style>
