<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div class="col-sm-6 slider">
    <input type="radio" name="slide_switch" id="sinemorec-pic1" checked="checked"/>
    <label for="sinemorec-pic1">
        <img src="img/apartments/sinemorec/1.jpg" width="100"/>
    </label>
    <img src="img/apartments/sinemorec/1.jpg"/>

    @for ($i=2; $i<39; $i++)
        <input type="radio" name="slide_switch" id="sinemorec-pic{{ $i }}" />
        <label for="sinemorec-pic{{ $i }}">
            <img src="img/apartments/sinemorec/{{ $i }}.jpg" width="100"/>
        </label>
        <img class="col-sm-12" src="img/apartments/sinemorec/{{ $i }}.jpg"/>
    @endfor

</div>

<div class="col-sm-5 pre-scrollable" style="padding: 20px; min-height: 51em; text-align: center; float: right;">
    <h3>
        @lang('home.sinemorets_house_name')
        <div class="row" style="text-align: center; font-size: 13px;">
            <div style="margin: auto;">
                <i class="fas fa-map-marker-alt"></i>
                <h7 style="font-family: sans-serif; font-weight: 100;">Butamya Str., 8279 Sinemorec, Bulgaria</h7>
            </div>
        </div>
    </h3>
    {!! trans('home.sinemorets') !!}
    <div class="success_box">
        <h6><strong>Гарантирайте си страхотна цена за бъдещия си престой</strong></h6>
        Потвърждението е незабавно, а за повечето стаи има възможност за БЕЗПЛАТНО анулиране!
    </div>
</div>
