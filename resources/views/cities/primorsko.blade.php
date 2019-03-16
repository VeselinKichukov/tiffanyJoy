<div id="primorsko-content" class="cities">
    <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
        <h1 class="text-center">{!! trans('home.primorsko_name') !!}</h1>
        <ul class="list-inline text-center">
            <li>{!! trans('home.primorsko_temperature') !!}</li>
            <li>{!! trans('home.primorsko_water_temperature') !!}</li>
            <li>{!! trans('home.primorsko_beach') !!} </li>
        </ul>
    </div>


    <div class="col-lg-9 col-md-9 col-sm-12">
        <a class="weatherwidget-io" href="{!! trans('home.primorsko_weather_link') !!}" data-label_1="{!! trans('home.primorsko_name') !!}"
           data-label_2="{!! trans('home.country') !!}" data-theme="original">PRIMORSKO WEATHER</a>
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

        <p class="lead">{!! trans('home.primorsko_one') !!}</p>
        <p>{!! trans('home.primorsko_two') !!}</p><br />


        <img src="../img/blog/primorsko-cover1.jpg" class="image-desc"/>


        <p>{!! trans('home.primorsko_three') !!}</p><br />


        <img src="../img/blog/primorsko-cover2.jpg" class="image-desc"/>

        <p>{!! trans('home.primorsko_four') !!}</p><br />
    </div>

    <div class="col-lg-3  col-md-3 col-sm-12">
        <div class="well">
            <h3>{!! trans('home.primorsko_appartments') !!}</h3>
            <div>
                <div class="row"><a
                        data-toggle="modal"
                        data-target="#primorskoModal"
                        onclick="showSlides(1, 'primorsko')"
                        class="lightbox" href="#gallery">
                        <img data-src="holder.js/64x64"
                             class="media-object"
                             alt="64x64"
                             width='100%'
                             height='auto'
                             src="{{ asset('../img/blog/primorsko_house.jpg') }}"
                             data-holder-rendered="true"> </a></div>
                <div class="row" style="text-align: center; display: block;">
                    <h4 class="media-heading">{!! trans('home.primorsko_house_name') !!}</h4>
                    {{--{!! trans('home.primorsko_house_name') !!}--}}
                </div>
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

    @include('components.page-wrap')


</div>
