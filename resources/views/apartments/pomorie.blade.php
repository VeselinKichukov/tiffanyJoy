<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div id="pomorie-appartment-modal" class="col-sm-6 slider">
    @for($i=1; $i<22; $i++)
        <div class="mySlides pomorie">
            <div class="numbertext">{{ $i }} / 22</div>
            <img src="img/apartments/pomorie/{{ $i }}.jpg" >
        </div>
    @endfor

  <a class="prev" onclick="plusSlides(-1, 'pomorie')">❮</a>
  <a class="next" onclick="plusSlides(1, 'pomorie')">❯</a>


  <div class="row">
    @for($i=1; $i<22; $i++)
    <div class="column">
      <img class="demo cursor pomorie" src="img/apartments/pomorie/{{ $i }}.jpg"  onclick="currentSlide({{ $i }}, 'pomorie')" alt="Guest House More">
    </div>
    @endfor
  </div>

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

<script>
// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("demo");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }

//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }
</script>
