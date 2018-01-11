jQuery(function($) {
    $('#carrusel-not').owlCarousel({
        items : 3,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        autoplaySpeed:3000,
        animateOut: 'fadeOut',
        loop:true,
        slideSpeed : 2000,
        navigation : true,
        navigationText : ["",""],
        pagination : false,
        itemsTablet : [768,3],
        itemsMobile : [320,1],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            768:{
                items:2,
                nav:false
            },
            1025:{
                items:3,
                nav:false,
                loop:true
            }
        }
    });
});

