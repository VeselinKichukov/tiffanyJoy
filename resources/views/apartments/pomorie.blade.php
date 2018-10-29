<button type="button" class="close" data-dismiss="modal"  aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div class="col-sm-7 slider">
    <input type="radio" name="slide_switch" id="pic1" checked="checked"/>
    <label for="pic1">
        <img src="img/apartments/pomorie/1.jpg" width="100"/>
    </label>
    <img class="col-sm-12" src="img/apartments/pomorie/1.jpg"/>

    @for ($i=2; $i<22; $i++)
        <input type="radio" name="slide_switch" id="pic{{ $i }}"/>
        <label for="pic{{ $i }}">
            <img src="img/apartments/pomorie/{{ $i }}.jpg" width="100"/>
        </label>
        <img class="col-sm-12" src="img/apartments/pomorie/{{ $i }}.jpg"/>
    @endfor

</div>

<div class="col-sm-5 pre-scrollable" style="padding: 20px; min-height: 51em; text-align: center;">
    <h3>
        @lang('home.pomorie_house_name')
        <div class="row" style="text-align: center; font-size: 13px;">
            <div style="margin: auto;">
                <i class="fas fa-map-marker-alt"></i>
                <h7 style="font-family: sans-serif; font-weight: 100;">ул. Стара Планина 2, 8200 Поморие, България</h7>
            </div>
        </div>
    </h3>
   {!! trans('home.pomorie')!!}
    <div class="success_box">
        <h6><strong>Гарантирайте си страхотна цена за бъдещия си престой</strong></h6>
        Потвърждението е незабавно, а за повечето стаи има възможност за БЕЗПЛАТНО анулиране!
    </div>
</div>
