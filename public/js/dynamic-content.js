var lastURL = document.URL;
var oldHash = "";
window.addEventListener("hashchange", function (event) {
    Object.defineProperty(event, "oldURL", { enumerable: true, configurable: true, value: lastURL });
    Object.defineProperty(event, "newURL", { enumerable: true, configurable: true, value: document.URL });
    oldHash = event.oldURL.split('#').pop();
    lastURL = document.URL;
});

$(function () {
    var newHash = "";

    const $pomorie = $("#pomorie-content"),
        $sinemorets = $("#sinemorets-content"),
        $primorsko = $("#primorsko-content");

    $pomorie.hide();
    $sinemorets.hide();
    $primorsko.hide();

    $("#nav").delegate("a", "click", function () {
        window.location.hash = $(this).attr("href");
        return false;
    });

    $(window).bind('hashchange', function () {

        newHash = window.location.hash.substring(1);

        if (newHash) {
            $('#nav a').removeClass("active");
            $('#' + newHash + '-tab').addClass("active");

            $('#' + oldHash + '-content').fadeOut(0);
            $('#' + newHash + '-content').fadeIn(0);
            $(this).scrollTop;
        }

    });

    $(window).trigger('hashchange');

});


