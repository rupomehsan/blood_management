$(window).on("load", function () {
    //PRELOADER
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    if ($('.isotope_items').length) {
        // PORTFOLIO ISOTOPE
        var $container = $('.isotope_items');
        $container.isotope();
        $('.portfolio_filter ul li').on("click", function () {
            $(".portfolio_filter ul li").removeClass("select-cat");
            $(this).addClass("select-cat");
            var selector = $(this).attr('data-filter');
            $(".isotope_items").isotope({
                filter: selector
            , });
            return false;
        });
    }
}); // window load end 
$(document).on("ready", function () {
    // ONE PAGE SCROLL 
    if ($('.home').length) {
        $(document).on("scroll", onScroll);
        //smoothscroll
        $('.backtop, .home-down, .nav-menu li a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");
            $('.nav-menu li a').each(function () {
                $(this).removeClass('selected');
                if ($(window).width() < 768) {
                    $('.nav-menu').slideUp();
                }
            })
            $(this).addClass('selected');
            var target = this.hash, //  menu = target;
                $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 70
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('.nav-menu li a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top - 73 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('.nav-menu li a').removeClass("selected");
                    currLink.addClass("selected");
                }
                else {
                    currLink.removeClass("selected");
                }
            });
        }
    }
    //NAVBAR SHOW - HIDE
    if ($('.home').length) {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var homeheight = $(".home").height() - 73;
            if (scroll > homeheight) {
                $("header").addClass("nav-fixed");
            }
            else {
                $("header").removeClass("nav-fixed");
            }
        });
    }
    // HOME PAGE HEIGHT
    if ($('.home').length) {
        function centerInit() {
            var hometext = $('.home')
            hometext.css({
                "height": $(window).height() + "px"
            });
        }
        centerInit();
        $(window).resize(centerInit);
    }
    //SLIDE MENU
    if ($('.right-menu').length) {
        (function ($) {
            $(".right-menu").on('click', function () {
                $("body").hasClass("slidemenu-opened") ? k() : T()
            });
        })(jQuery);

        function T() {
            $("body").addClass("slidemenu-opened")
        }

        function k() {
            $("body").removeClass("slidemenu-opened")
        }
    }
    // RESPONSIVE MENU
    if ($('.responsive').length) {
        $('.responsive').on('click', function (e) {
            $('.nav-menu').slideToggle();
        });
    }
    // CUSTOM SCROLLBAR
    // if ($('.scroll-out, .nav-scroll').length) {
    //     $(function () {
    //         $('.scroll-out, .nav-scroll').perfectScrollbar({
    //             suppressScrollX: true
    //             , wheelSpeed: 100
    //         });
    //     });
    // }
    // HOME TYPED JS
    if ($('.element').length) {
        $('.element').each(function () {
            $(this).typed({
                strings: [$(this).data('text1'), $(this).data('text2')]
                , loop: $(this).data('loop') ? $(this).data('loop') : false
                , backDelay: $(this).data('backdelay') ? $(this).data('backdelay') : 2000
                , typeSpeed: 10
            , });
        });
    }
    // OWL CAROUSEL GENERAL JS
    if ($('.owl-carousel').length) {
        $('.owl-carousel').each(function () {
            $(this).owlCarousel({
                items: $(this).data('items') ? $(this).data('items') : 3
                , autoPlay: $(this).data('autoplay') ? $(this).data('autoplay') : 2500
                , pagination: $(this).data('pagination') ? $(this).data('pagination') : false
                , itemsDesktop: [1199, 3]
                , itemsDesktopSmall: [979, 2]
            });
        });
    }
    // BLOG GALLERY
    if ($('.carousel').length) {
        $('.carousel').carousel({
            interval: 3000
        })
    }
    // MAGNIFIC POPUP FOR PORTFOLIO PAGE
    if ($('.image-link').length) {
        $('.image-link').magnificPopup({
            type: 'image'
        });
    }
    //TWITTER
    if ($('.widget-twitter .tweet').length) {
        $('.widget-twitter .tweet').twittie({
            username: 'envato'
            , list: null
            , dateFormat: '%B %d, %Y'
            , template: '{{tweet}} <br/> <strong class="date">{{date}}</strong>'
            , count: 3
        });
    }
    // ACCORDION MENU
    $('.panel-heading a').on('click', function (e) {
        $('.panel-heading a i').addClass('fa-chevron-down');
        if ($(this).hasClass('collapsed') === true) {
            $(this).children('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        }
        else {
            $(this).children('i').removeClass('fa-chevron-up');
        }
    });
}); // document ready end 
/* Contact Form JS*/
(function ($) {
    'use strict';
    if ($('.contact-form').length) {
        $(".contact-form").on('submit', function (e) {
            e.preventDefault();
            var uri = $(this).attr('action');
            $("#con_submit").val('Wait...');
            var con_name = $("#con_name").val();
            var con_email = $("#con_email").val();
            var con_message = $("#con_message").val();
            var required = 0;
            $(".requie", this).each(function () {
                if ($(this).val() == '') {
                    $(this).addClass('reqError');
                    required += 1;
                }
                else {
                    if ($(this).hasClass('reqError')) {
                        $(this).removeClass('reqError');
                        if (required > 0) {
                            required -= 1;
                        }
                    }
                }
            });
            if (required === 0) {
                $.ajax({
                    type: "POST"
                    , url: 'mail.php'
                    , data: {
                        con_name: con_name
                        , con_email: con_email
                        , con_message: con_message
                    }
                    , success: function (data) {
                        $(".contact-form input, .contact-form textarea").val('');
                        $("#con_submit").val('Done!');
                        $("#con_submit").addClass("ok");
                    }
                });
            }
            else {
                $("#con_submit").val('Failed!');
            }
        });
        $(".requie").keyup(function () {
            $(this).removeClass('reqError');
        });
    }
})(jQuery);








$('.slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
var owl = $('.slider');
owl.owlCarousel();
// Go to the next item
$('.prvBtn').click(function() {
    owl.trigger('next.owl.carousel');
});
// Go to the previous item
$('.nxtBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
});
$(document).ready(function(){
   $('.venobox').venobox();


});
$('.item').venobox({
       framewidth: '600px',
       frameheight: '300px',
       border: '10px',
       bgcolor: '#5dff5e',
       titleattr: 'data-title',
       numeratio: true,
       infinigall: true
   });



/*form validation*/
// (function ($) {
//     "use strict";
//     /*==================================================================
//     [ Validate ]*/
//     var input = $('.validate-input .input100');

//     $('.validate-form').on('submit',function(){
//         var check = true;

//         for(var i=0; i<input.length; i++) {
//             if(validate(input[i]) == false){
//                 showValidate(input[i]);
//                 check=false;
//             }
//         }

//         return check;
//     });


//     $('.validate-form .input100').each(function(){
//         $(this).focus(function(){
//            hideValidate(this);
//         });
//     });

//     function validate (input) {
//         if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
//             if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
//                 return false;
//             }
//         }
//         else {
//             if($(input).val().trim() == ''){
//                 return false;
//             }
//         }
//     }

//     function showValidate(input) {
//         var thisAlert = $(input).parent();

//         $(thisAlert).addClass('alert-validate');
//     }

//     function hideValidate(input) {
//         var thisAlert = $(input).parent();

//         $(thisAlert).removeClass('alert-validate');
//     }
    

// })(jQuery);






/*text animation*/

  document.addEventListener('DOMContentLoaded',function(event){
                // array with texts to type in typewriter
                var dataText = [ "hi i am rupom ehsan web design & web developer.age 25 years old ,blood group o(-)", "Full Service.      design and readesign yor existing web site with pixel perfect", "Web development.", "thank you !!!"];
         
                
                // type one text in the typwriter
                // keeps calling itself until the text is finished
                function typeWriter(text, i, fnCallback) {
                  // chekc if text isn't finished yet
                  if (i < (text.length)) {
                    // add next character to h1
                //    document.querySelector("h1").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
         
                    // wait for a while and call this function again for next character
                    setTimeout(function() {
                      typeWriter(text, i + 1, fnCallback)
                    }, 300);
                  }
                  // text finished, call callback if there is a callback function
                  else if (typeof fnCallback == 'function') {
                    // call callback after timeout
                    setTimeout(fnCallback, 700);
                  }
                }
                // start a typewriter animation for a text in the dataText array
                 function StartTextAnimation(i) {
                   if (typeof dataText[i] == 'undefined'){
                      setTimeout(function() {
                        StartTextAnimation(0);
                      }, 20000);
                   }
                   // check if dataText[i] exists
                  if (i < dataText[i].length) {
                    // text exists! start typewriter animation
                   typeWriter(dataText[i], 0, function(){
                     // after callback (and whole text has been animated), start next text
                     StartTextAnimation(i + 1);
                   });
                  }
                }
                // start the text animation
                StartTextAnimation(0);
              });

  /*text animation end*/





  /*clinet slider animation*/
    $(document).ready(function(){
          $("#testimonial-slider").owlCarousel({
              items:3,
              itemsDesktop:[1000,2],
              itemsDesktopSmall:[979,2],
              itemsTablet:[768,2],
              itemsMobile:[650,1],
              pagination:false,
              navigation:true,
              navigationText:["",""],
              autoPlay:true
          });
         });
  /*text animation end*/


    /*login form*/
     function openForm() {
           document.getElementById("myForm").style.display = "block";
         }
         
         function closeForm() {
           document.getElementById("myForm").style.display = "none";
         }
  /*text animation end*/



    /*registrasion */

    (function($) {

  $('#reset').on('click', function(){
      $('#register-form').reset();
  });

})(jQuery);
  /*text animation end*/

  

function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}


