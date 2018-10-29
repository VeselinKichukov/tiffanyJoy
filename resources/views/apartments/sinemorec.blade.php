<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div class="col-sm-6 slider">
    <input type="radio" name="slide_switch" id="sinemorec1" checked="checked"/>
    <label for="sinemorec1">
        <img src="img/apartments/sinemorec/1.jpg" width="100"/>
    </label>
    <img src="img/apartments/sinemorec/1.jpg"/>

    @for ($i=2; $i<27; $i++)
        <input type="radio" name="slide_switch" id="sinemorec{{ $i }}" checked="checked"/>
        <label for="sinemorec{{ $i }}">
            <img src="img/apartments/sinemorec/{{ $i }}.jpg" width="100"/>
        </label>
        <img class="col-sm-12" src="img/apartments/sinemorec/{{ $i }}.jpg"/>
    @endfor

</div>

<div class="col-sm-5 pre-scrollable" style="padding: 20px; min-height: 51em; text-align: center;">
    <h3>
        Casa Di Angel
        <div class="row" style="text-align: center; font-size: 13px;">
            <div style="margin: auto;">
                <i class="fas fa-map-marker-alt"></i>
                <h7 style="font-family: sans-serif; font-weight: 100;">Butamya Str., 8279 Sinemorec, Bulgaria</h7>
            </div>
        </div>
    </h3>
    Каса Ди Ангел се намира в Синеморец и предлага сезонен открит басейн и фитнес център. Хотелът се намира на 1,2
    километра от плажа Велека и предлага градина и тераса. В хотела има бар.<br/>
    <br/>
    Ежедневно се сервира пълна английска/ирландска закуска. Гостите могат да се хранят в ресторанта на място, който е
    специализиран в местните ястия.<br>
    <br/>
    Персоналът на рецепцията е винаги на разположение. <br>
    <br/>Плажът Силистар е на 5 километра от Каса Ди Ангел. Летище Бургас е на 68 километра. <br>
    <br/>
    За нашите гости това е любимата част на Синеморец, според независими отзиви.
    <br/>
    <br/>
    <div class="success_box">
        <h6><strong>Гарантирайте си страхотна цена за бъдещия си престой</strong></h6>
        Потвърждението е незабавно, а за повечето стаи има възможност за БЕЗПЛАТНО анулиране!
    </div>
</div>
