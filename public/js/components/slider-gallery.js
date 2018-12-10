var slideIndex = 1;

    function plusSlides(n, city) {
        showSlides(slideIndex += n, city);
    }

    function currentSlide(n, city) {
        showSlides(slideIndex = n, city);
    }

    function showSlides(n, city) {
        var i;
        var slides = document.getElementsByClassName("mySlides " + city + '_content');
        var dots = document.getElementsByClassName("demo " + city);
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
