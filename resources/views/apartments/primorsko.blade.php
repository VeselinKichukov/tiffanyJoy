<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div class="col-sm-6 slider">
    <input type="radio" name="slide_switch" id="id1" checked="checked"/>
    <label for="id1">
        <img src="img/apartments/primorsko/1.jpg" width="100"/>
    </label>
    <img src="img/apartments/primorsko/1.jpg"/>

    @for ($i=2; $i<27; $i++)
        <input type="radio" name="slide_switch" id="id{{ $i }}" checked="checked"/>
        <label for="id{{ $i }}">
            <img src="img/apartments/primorsko/{{ $i }}.jpg" width="100"/>
        </label>
        <img class="col-sm-12" src="img/apartments/primorsko/{{ $i }}.jpg"/>
    @endfor

</div>

<div class="col-sm-5 pre-scrollable" style="padding: 20px; min-height: 51em; text-align: center;">
    <h3>
        Tiffany Joy Приморско
        <div class="row" style="text-align: center; font-size: 13px;">
            <div style="margin: auto;">
                <i class="fas fa-map-marker-alt"></i>
                <h7 style="font-family: sans-serif; font-weight: 100;">бул. Черно море 30, 8290 Приморско, България</h7>
            </div>
        </div>
    </h3>
    Това място за настаняване е на 5 минути пеша от плажа. Апартаменти „Тифани Джой"
    се намират в Приморско. Предлагат помещения с безплатен WiFi и кът за
    сядане..<br/>
    <br/>
    Всички апартаменти разполагат с кухненски бокс, собствена баня и тераса или
    балкон с изглед към морето. Осигурени са хладилник и термокана.<br>
    <br/>
    Община Приморско е на 2 минути пеша от апартамента, а Аквапарк Приморско е на
    800 метра. Най-близкото летище е Бургас, разположено на 39 км от Апартаменти
    „Тифани Джой". <br>
    <br/>За нашите гости това е любимата част на Приморско, според независими
    отзиви.<br>
    <br/>
    Това място за настаняване има едно от най-добре оценените местоположения в
    Приморско! В сравнение с други места за настаняване в този район, гостите са
    доволни от това местоположение.
    <br/>
    <br/>
    <div class="success_box">
        <strong>Не е нужна кредитна карта, за да резервирате.</strong>
        Ще ви изпратим имейл с потвърждение на вашата резервация.
    </div>
    <div class="success_box">
        <h6><strong>Гарантирайте си страхотна цена за бъдещия си престой</strong></h6>
    Потвърждението е незабавно, а за повечето стаи има възможност за БЕЗПЛАТНО анулиране!
    </div>
</div>
