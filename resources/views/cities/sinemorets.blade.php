<div id="sinemorets-content" class="cities">
    <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
        <h1 class="text-center">Sinemorets</h1>
        <ul class="list-inline text-center">
            <li>27°С Average Summer Temperature |</li>
            <li>23.6°С Average Water Temperature |</li>
            <li>5 km Long Beach</li>
        </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12">
        <a class="weatherwidget-io" href="{!! trans('home.sinemorets_weather_link') !!}"
           data-label_1="{!! trans('home.sinemorets_name') !!}" data-label_2="{!! trans('home.country') !!}" data-theme="original">SINEMORETS WEATHER</a>
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
        <p class="lead">{!! trans('home.sinemorets_text_paragraph_1') !!}</p>
        <img src="../img/about/sinemorets1.jpg" class="image-desc"/> <br />
        <br/>
        <p>{!! trans('home.sinemorets_text_paragraph_2') !!}</p> <br/>
        <p>{!! trans('home.sinemorets_text_paragraph_3') !!}</p> <br/>
        <p>{!! trans('home.sinemorets_text_paragraph_4') !!}</p> <br/>
        <p>{!! trans('home.sinemorets_text_paragraph_5') !!}</p> <br/>
        <p>{!! trans('home.sinemorets_text_paragraph_6') !!}</p> <br/>
        <p>{!! trans('home.sinemorets_text_paragraph_7') !!}</p> <br/>
    </div>

    <div class="col-lg-3  col-md-3 col-sm-12">
        <div class="well">
            <h3>{!! trans('home.sinemorets_appartments') !!}</h3>
            <div>
                <div class="row"><a
                        data-toggle="modal"
                        data-target="#sinemoretsModal"
                        onclick="showSlides(1, 'sinemorets')"
                        class="lightbox" href="#gallery">
                        <img data-src="holder.js/64x64"
                             class="media-object"
                             alt="64x64"
                             width='100%'
                             height='auto'
                             src="{{ asset('../img/blog/sinemorets_house.jpg') }}"
                             data-holder-rendered="true"> </a></div>
                <div class="row" style="text-align: center; display: block;">
                    <h4 class="media-heading">{!! trans('home.sinemorets_house_name') !!}</h4>
                    {{--{!! trans('home.sinemorets_house_name') !!}--}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sinemoretsModal"
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

    @include('components.page-wrap')

</div>
