(function($) {

  "use strict";

  $(window).on('load', function() {

  /*Page Loader active
    ========================================================*/
    $('#preloader').fadeOut();

      // document.getElementById('pomorie-content').hidden = false;
      // document.getElementById('sinemorets-content').hidden = true;

      // $('#pomorie-tab').addClass('active');

      $('#pomorie-content').fadeIn();
      $('#sinemorets-content').hide();
      $('#primorsko-content').hide();

      document.getElementById('pomorie-tab').onclick = function () {
          console.log('pom');
          //make all tabs inactive
          $('#sinemorets-tab').removeClass('active');
          $('#primorsko-tab').removeClass('active');
          //then make the clicked tab active
          $(this).addClass('active');
          // document.getElementById('pomorie-content').hidden = false;
          // document.getElementById('sinemorets-content').hidden = true;
          $('#pomorie-content').fadeIn("fast");
          $('#sinemorets-content').hide();
          $('#primorsko-content').hide();
      }


      document.getElementById('sinemorets-tab').onclick = function () {
          console.log('sin');
          //make all tabs inactive
          $('#pomorie-tab').removeClass('active');
          $('#primorsko-tab').removeClass('active');
          //then make the clicked tab active
          $(this).addClass('active');
          $('#pomorie-content').hide();
          $('#sinemorets-content').fadeIn("fast");
          $('#primorsko-content').hide();
      };

      document.getElementById('primorsko-tab').onclick = function () {
          console.log('prim');
          //make all tabs inactive
          $('#pomorie-tab').removeClass('active');
          $('#sinemorets-tab').removeClass('active');
          //then make the clicked tab active
          $(this).addClass('active');
          $('#pomorie-content').hide();
          $('#sinemorets-content').hide();
          $('#primorsko-content').fadeIn("fast");
      };


      // Sticky Nav
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 200) {
            $('.scrolling-navbar').addClass('top-nav-collapse');
            document.getElementById('lanNavSel').style.color = 'black';
            document.getElementById('lngItem').style.color = 'black';
        } else {
            $('.scrolling-navbar').removeClass('top-nav-collapse');
            // document.getElementById('lanNavSel').style.color = 'white';
            // document.getElementById('lngItem').style.color = 'white';
        }
    });

    /* ==========================================================================
       countdown timer
       ========================================================================== */
     jQuery('#clock').countdown('2018/11/21',function(event){
      var $this=jQuery(this).html(event.strftime(''
      +'<div class="time-entry days"><span>%-D</span> Days</div> '
      +'<div class="time-entry hours"><span>%H</span> Hours</div> '
      +'<div class="time-entry minutes"><span>%M</span> Minutes</div> '
      +'<div class="time-entry seconds"><span>%S</span> Seconds</div> '));
    });

    /* slicknav mobile menu active  */
    $('.mobile-menu').slicknav({
        prependTo: '.navbar-header',
        parentTag: 'liner',
        allowParentLinks: true,
        duplicate: true,
        label: '',
      });

      /* WOW Scroll Spy
    ========================================================*/
     var wow = new WOW({
      //disabled for mobile
        mobile: false
    });
    wow.init();

    /* Nivo Lightbox
    ========================================================*/
    $('.lightbox').nivoLightbox({
        effect: 'fadeScale',
        keyboardNav: true,
      });

    // one page navigation
    $('.navbar-nav').onePageNav({
            currentClass: 'active'
    });

    /* Back Top Link active
    ========================================================*/
      var offset = 200;
      var duration = 500;
      $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
          $('.back-to-top').fadeIn(400);
        } else {
          $('.back-to-top').fadeOut(400);
        }
      });

      $('.back-to-top').on('click',function(event) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: 0
        }, 600);
        return false;
      });

  });

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

}(jQuery));
