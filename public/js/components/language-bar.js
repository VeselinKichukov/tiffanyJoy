$(document).ready(function(){
    var engImgLink = "img/en.png";
    var bgImgLink = "img/bg.png";

    var imgBtnSel = $('#imgBtnSel');
    var imgBtnEng = $('#imgBtnEng');
    var imgBtnBg = $('#imgBtnBg');

    var imgNavSel = $('#imgNavSel');
    var imgNavEng = $('#imgNavEng');
    var imgNavBg = $('#imgNavBg');

    var spanNavSel = $('#lanNavSel');
    var spanBtnSel = $('#lanBtnSel');

    imgBtnSel.attr("src",engImgLink);
    imgBtnEng.attr("src",engImgLink);
    imgBtnBg.attr("src",bgImgLink);

    imgNavSel.attr("src",engImgLink);
    imgNavEng.attr("src",engImgLink);
    imgNavBg.attr("src",bgImgLink);

    var currentId = $(this).attr('id');
    if (localStorage.getItem('currentId')) {
        currentId = localStorage.getItem('currentId');
    }

    if (currentId == "navEng") {
        localStorage.setItem('currentId', 'navEng');
        imgNavSel.attr("src",engImgLink);
        spanNavSel.text("ENG");
    } else if (currentId == "navBg") {
        localStorage.setItem('currentId', 'navBg');
        imgNavSel.attr("src",bgImgLink);
        spanNavSel.text("BUL");
    }

    if (currentId == "btnEng") {
        localStorage.setItem('currentId', 'btnEng');
        imgBtnSel.attr("src",engImgLink);
        spanBtnSel.text("ENG");
    } else if (currentId == "btnBg") {
        localStorage.setItem('currentId', 'btnBg');
        imgBtnSel.attr("src",bgImgLink);
        spanBtnSel.text("BUL");
    }

    $( ".language" ).on( "click", function( event ) {
        var currentId = $(this).attr('id');

        if (currentId == "navEng") {
            localStorage.setItem('currentId', 'navEng');
            imgNavSel.attr("src",engImgLink);
            spanNavSel.text("ENG");
        } else if (currentId == "navBg") {
            localStorage.setItem('currentId', 'navBg');
            imgNavSel.attr("src",bgImgLink);
            spanNavSel.text("BUL");
        }

        if (currentId == "btnEng") {
            localStorage.setItem('currentId', 'btnEng');
            imgBtnSel.attr("src",engImgLink);
            spanBtnSel.text("ENG");
        } else if (currentId == "btnBg") {
            localStorage.setItem('currentId', 'btnBg');
            imgBtnSel.attr("src",bgImgLink);
            spanBtnSel.text("BUL");
        }

    });
});
