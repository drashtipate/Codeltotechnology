// navbar
$(document).ready(function(){
    "use strict";$('.navbar-nav li.dropdown').hover(function(){
            $(this).find('.dropdown-menu').stop(true,true).delay(100).fadeIn(500);
        },function(){
            $(this).find('.dropdown-menu').stop(true,true).delay(100).fadeOut(500);
        });
            
            $(window).scroll(function(){
                    var scroll=$(window).scrollTop();
                    if(scroll>=100)
                    {
                        $(".navbar").addClass("fixed-navbar inner-navbar fixed-top");
                        $(".logo-codelto").hide();
                        $(".logo-color-codelto").show();
                    } else {
                        $(".navbar").removeClass("fixed-navbar inner-navbar fixed-top");
                        $(".logo-codelto").show();
                        $(".logo-color-codelto").hide();
                }
            });
            
            var screensslider=$(".screens");
                if(screensslider){
                    screensslider.owlCarousel({
                        center:true,items:2,loop:true,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                        responsive:{0:{items:1,nav:true},800:{items:2,nav:true},
                        }
                    });
                }
            var blogslider=$(".blogs-slider");
                if(blogslider.length>0){
                    blogslider.owlCarousel({
                        items:3,responsive:{0:{items:1,nav:false},800:{items:3,nav:false},}
                    });
                }
            
            particlesJS("particles-js",
                {
                    "particles":{
                        "number":{"value":80,"density":{"enable":true,"value_area":800}},
                        "color":{"value":"#ffffff"},
                        "shape":{"type":"triangle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},
                        "opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},
                        "size":{"value":4.16725702807898,"random":false,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},
                        "line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},
                        "move":{"enable":true,"speed":6.667611244926368,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,
                            "attract":{"enable":false,"rotateX":166.6902811231592,"rotateY":2667.044497970547}
                            }
                        },
                    "interactivity":{
                        "detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},
                        "modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},
                                 "repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}
                                }
                            },
                    "retina_detect":true
                });
            
            new WOW().init();
        });

// Back to top button
// $(window).scroll(function () {
//     if ($(this).scrollTop() > 300) {
//         $(".back-to-top").fadeIn("slow");
//     } else {
//         $(".back-to-top").fadeOut("slow");
//     }
// });
// $(".back-to-top").click(function () {
//     $("html, body").animate({ scrollTop:0 }, 300, "easeInOutExpo");
//     return false;
// });

var btn = $('.back-to-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


// validation-contact_form
function validate() 
{
    var contact_name    = document.getElementById("contact_name").value;
    var contact_email   = document.getElementById("contact_email").value;
    var contact_subject = document.getElementById("contact_subject").value;
    var contact_message = document.getElementById("contact_message").value;
    var error_message   = document.getElementById("error_message").value;

    error_message.style.padding = "15px";

    var text;
    if(contact_name.length < 5) { 
        text = "One or more fields have an error. Please check and try again.";
        error_message.innerHTML = text;
        return false;
    }
}

// switcher button color theme
document.querySelector('.switcher-btn').onclick = () => {
    document.querySelector('.color-switcher').classList.toggle('active');

    let themeButtons = document.querySelectorAll('.theme-buttons');

    themeButtons.forEach(color =>{
        color.addEventListener('click', () =>{
            let dataColor = color.getAttribute('data-color');
            document.querySelector(':root').style.setProperty('--main-color', dataColor);
            document.querySelector(':root').style.setProperty('--sky-light', dataColor);
            document.querySelector(':root').style.setProperty('--sky-dark', dataColor);
            document.querySelector(':root').style.setProperty('--dark-light', dataColor);
        });
    });
}