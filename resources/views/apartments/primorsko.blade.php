<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div class="col-sm-6 slider">
    <input type="radio" name="slide_switch" id="primorsko-pic1" checked="checked"/>
    <label for="primorsko-pic1">
        <img src="img/apartments/primorsko/1.jpg" width="100"/>
    </label>
    <img src="img/apartments/primorsko/1.jpg"/>

    @for ($i=2; $i<27; $i++)
        <input type="radio" name="slide_switch" id="primorsko-pic{{ $i }}" checked="checked"/>
        <label for="primorsko-pic{{ $i }}">
            <img src="img/apartments/primorsko/{{ $i }}.jpg" width="100"/>
        </label>
        <img class="col-sm-12" src="img/apartments/primorsko/{{ $i }}.jpg"/>
    @endfor

</div>

<div class="col-sm-5 pre-scrollable" style="padding: 20px; min-height: 51em; text-align: center; float: right;">
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
