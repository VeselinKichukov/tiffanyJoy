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
        Guest House More
        <div class="row" style="text-align: center; font-size: 13px;">
            <div style="margin: auto;">
                <i class="fas fa-map-marker-alt"></i>
                <h7 style="font-family: sans-serif; font-weight: 100;">ул. Стара Планина 2, 8200 Поморие, България</h7>
            </div>
        </div>
    </h3>
    Къща за гости Море се помещава в 3-етажна сграда, разположена в центъра на Поморие и само на 50 метра от плажа.
    Навсякъде е осигурен безплатен WiFi.<br/>
    <br/>
    Някои помещения за настаняване включват кът за сядане за отдих. В стаите е предоставена електрическа кана. Всички
    стаи са със собствена баня. Има телевизор.<br>
    <br/>
    На място е на разположение туристическо бюро.<br>
    <br/>Бургас е на 16 километра от къща за гости Море, а Обзор се намира на 35 километра. Най-близкото летище е летище
    Бургас, разположено на 11 километра от къща за гости Море. <br>
    <br/>
    За нашите гости това е любимата част на Поморие, според независими отзиви.
    <br/>
    <br/>
    <div class="success_box">
        <h6><strong>Гарантирайте си страхотна цена за бъдещия си престой</strong></h6>
        Потвърждението е незабавно, а за повечето стаи има възможност за БЕЗПЛАТНО анулиране!
    </div>
</div>
