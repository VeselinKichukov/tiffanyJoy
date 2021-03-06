<script src="{{ URL::to('js/check_mobile.js') }}"></script>

<div class="modal-header">
    <h3> <button type="button" class="close" data-dismiss="modal">< Back</button> </h3>
    <button type="button" class="close" data-dismiss="modal">×</button>
</div>

<div id="primorsko-appartment-modal-1" class="col-md-6 slider">
    @for($i=1; $i<22; $i++)
        <div class="mySlides primorsko_content">
            <div class="numbertext">{{ $i }} / 22</div>
            <img src="img/apartments/primorsko/{{ $i }}.jpg" >
        </div>
    @endfor

    <a class="prev" onclick="plusSlides(-1, 'primorsko')">❮</a>
    <a class="next" onclick="plusSlides(1, 'primorsko')">❯</a>


    <div class="row">
        @for($i=1; $i<22; $i++)
            <div class="column">
                <img id="primorsko{{ $i }}" class="demo cursor primorsko" src="img/apartments/primorsko/{{ $i }}.jpg"  onclick="currentSlide({{ $i }}, 'primorsko')" alt="Tiffany Joy Appartments">
            </div>
        @endfor
    </div>

</div>

<div id="primorsko-appartment-modal-2" class="col-md-6 pre-scrollable" style="padding: 20px; min-height: 51em; text-align: center; float: right;">
    <h3>
        @lang('home.primorsko_house_name')
        <div class="row" style="text-align: center; font-size: 13px;">
            <div style="margin: auto;">
                <i class="fas fa-map-marker-alt"></i>
                <h7 style="font-family: sans-serif; font-weight: 100;">бул. Черно море 30, 8290 Приморско, България</h7>
            </div>
        </div>
    </h3>
    {!! trans('home.primorsko') !!}
    <div class="success_box">
        <strong>Не е нужна кредитна карта, за да резервирате.</strong>
        Ще ви изпратим имейл с потвърждение на вашата резервация.
    </div>
    <div class="success_box">
        <h6><strong>Гарантирайте си страхотна цена за бъдещия си престой</strong></h6>
    Потвърждението е незабавно, а за повечето стаи има възможност за БЕЗПЛАТНО анулиране!
    </div>
</div>
<style type="text/css" media="screen">
    body {
        font-family: Arial;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .container {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    .mySlides img {
        width: 80%;
        height: auto;
        margin-left: 11%;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 16.66%;
        margin: 4px;
    }

    .column img {
        box-shadow: 0px 20px 20px -18px rgba(0, 0, 0, 0.75);
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.6;
        width: 100%;
        max-height: 100px;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }
</style>
