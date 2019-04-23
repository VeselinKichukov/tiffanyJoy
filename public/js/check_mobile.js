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
        $("#primorsko-appartment-modal-1").removeClass('col-md-6 slider').addClass('col-md-6');
        $("#primorsko-appartment-modal-2").removeClass('col-md-6 pre-scrollable').addClass('col-md-6');

        $("#pomorie-appartment-modal-1").removeClass('col-md-6 slider').addClass('col-md-6');
        $("#pomorie-appartment-modal-2").removeClass('col-md-6 pre-scrollable').addClass('col-md-6');

        $("#sinemorets-appartment-modal-1").removeClass('col-md-6 slider').addClass('col-md-6');
        $("#sinemorets-appartment-modal-2").removeClass('col-md-6 pre-scrollable').addClass('col-md-6');
    }
});