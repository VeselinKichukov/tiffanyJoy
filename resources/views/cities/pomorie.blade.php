<div id="pomorie-content" class="cities">
    <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">

        <h1 class="text-center">{!! trans('home.pomorie_name') !!}</h1>
        <ul class="list-inline text-center">
            <li>{!! trans('home.pomorie_temperature') !!}</li>
            <li>{!! trans('home.pomorie_water_temperature') !!}</li>
            <li>{!! trans('home.pomorie_beach') !!}</li>
        </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12">
        <a class="weatherwidget-io" href="{!! trans('home.pomorie_weather_link') !!}"
           data-label_1="{!! trans('home.pomorie_name') !!}" data-label_2="{!! trans('home.country') !!}"
           data-theme="original">POMORIE WEATHER</a>
        <script>
            !function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'weatherwidget-io-js');
        </script>
        <p class="lead">{!! trans('home.pomorie_one') !!}</p>
        <p>{!! trans('home.pomorie_two') !!}</p>
        <div class="image-block1 ">
            <img src="../img/blog/pm-cover1.jpg" style='height: 100%; width: 100%; object-fit: contain'/>
        </div>
        <p>{!! trans('home.pomorie_three') !!}</p>
        <p>{!! trans('home.pomorie_four') !!}</p>
        <p>{!! trans('home.pomorie_five') !!}</p>


        <div class="image-block1">
            <img src="../img/blog/pm-cover2.jpg" style='height: 100%; width: 100%; object-fit: contain'/>
        </div>
    </div>
    <div class="col-lg-3  col-md-3 col-sm-12">
        <div class="well">
            <h3>{!! trans('home.pomorie_appartments') !!}</h3>
            <div>
                <div class="row"><a
                        data-toggle="modal"
                        data-target="#pomorieModal"
                        onclick="showSlides(1, 'pomorie')"
                        class="lightbox" href="#gallery">
                        <img data-src="holder.js/64x64"
                             class="media-object"
                             alt="64x64"
                             width='100%'
                             height='auto'
                             src="{{ asset('../img/blog/pm_house.jpg') }}"
                             data-holder-rendered="true"> </a></div>
                <div class="row" style="text-align: center; display: block;">
                    <h4 class="media-heading">Guest House More</h4>
                    {!! trans('home.pomorie_house_desc') !!}
                </div>
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
    @include('components.page-wrap')

</div>
