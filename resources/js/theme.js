;(function($) {
    "use strict";
    
    var nav_offset_top = $('header').height(); 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.main_menu_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".main_menu_area").addClass("navbar_fixed");
                } else {
                    $(".main_menu_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
    
    
    
    /*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider(){
        if ( $('#main_slider').length ){
            $("#main_slider").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay:5000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"normal",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:768,
                        style:"hesperiden",
                        hide_onleave:false,
                        direction:"vertical",
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:380,
                        v_offset:0,
                        space:10,
                        tmp: "",
                    },
                },
                responsiveLevels:[4096,1320,1199,992,767,480],
                gridwidth:[1170,1170,960,720,700,300],
                gridheight:[950,950,950,700,500,500],
                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider();
  
    
 
 
 
 
    
 
    
    
})(jQuery)

