function isMobileDevice() {
    if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
    ){
        return true;
    }
    else {
        return false;
    }
}


$( document ).ready(function() {

    if (isMobileDevice())
    {
        $(window).scroll(function() {
            var hT = $('#scroll-to').offset().top,
                hH = $('#scroll-to').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();


            var hT1 = $('#scroll-to1').offset().top,
                hH1 = $('#scroll-to1').outerHeight(),
                wH1 = $(window).height(),
                wS1 = $(this).scrollTop();

            var hT2 = $('#scroll-to2').offset().top,
                hH2 = $('#scroll-to2').outerHeight(),
                wH2 = $(window).height(),
                wS2 = $(this).scrollTop();


            if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
                // console.log('you have scrolled to the div');
                // alert('you have scrolled to the h1!');

                // turn on
                document.getElementById('scroll-to').className = 'gallery-box1';

                //turn off the others
                document.getElementById('scroll-to1').className = 'gallery-box';
                document.getElementById('scroll-to2').className = 'gallery-box';

            }
            else if(wS1 > (hT1+hH1-wH1) && (hT1 > wS1) && (wS1+wH1 > hT1+hH1))
            {
                //turn off the others
                document.getElementById('scroll-to').className = 'gallery-box';
                document.getElementById('scroll-to2').className = 'gallery-box';

                // turn on
                document.getElementById('scroll-to1').className = 'gallery-box1';
            }
            else if(wS2 > (hT2+hH2-wH2) && (hT2 > wS2) && (wS2+wH2 > hT2+hH2))
            {
                //turn off the others
                document.getElementById('scroll-to').className = 'gallery-box';
                document.getElementById('scroll-to1').className = 'gallery-box';

                document.getElementById('scroll-to2').className = 'gallery-box1';
            }
            else {
                //turn off the others
                document.getElementById('scroll-to').className = 'gallery-box';
                document.getElementById('scroll-to1').className = 'gallery-box';
                document.getElementById('scroll-to2').className = 'gallery-box';
            }
        });
    }
});