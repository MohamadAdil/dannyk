$(document).ready(function () {

    $(document).ready(function () {
        $('#toggle').click(function () {
            $('#sidebar').toggleClass('active');
        });
        $('#cross').click(function () {
            $('#sidebar').removeClass('active');
        });
    });
    //increa
    //    
    $('.more-collection-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dotsEach: 3,
        autoHeight: true,
        navText: ['<span class="custom-owl-prev"><i class="fa-solid fa-arrow-left-long"></i></span>', '<span class="custom-owl-next"><i class="fa-solid fa-arrow-right-long"></i></span>'],
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    // Marque-slider
    jQuery(document).ready(function () {
        jQuery('.marque-slider-wrap').owlCarousel({
            loop: true,
            margin: 0,
            items: 1.5,
            autoplay: true,
            autoplayTimeout: 1,
            autoplayHoverPause: false,
            slideTransition: 'linear',
            autoplaySpeed: 6000,
            smartSpeed: 6000,
            center: true,
        });
        jQuery('.marque-slider-wrap').trigger('play.owl.autoplay', [1]);
        function setSpeed() {
            jQuery('.marque-slider-wrap').trigger('play.owl.autoplay', [6000]);
        }
        setTimeout(setSpeed, 1000);
    });
    // our partner
    $('.our-partner-slider').owlCarousel({
        loop: true,
        margin: 77,
        nav: true,
        navText: ['<span class="custom-owl-prev"><i class="fa-solid fa-chevron-left"></i></span>', '<span class="custom-owl-next"><i class="fa-solid fa-chevron-right"></i></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            800: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    // 
    $(document).ready(function () {
        function initOwlCarousel() {
            if ($(window).width() <= 768) {
                $(".woocommerce-product-gallery__wrapper img").each(function () {
                    $(this).on('load', function () {
                        $(".woocommerce-product-gallery__wrapper").owlCarousel({
                            items: 1,
                            loop: true,
                            margin: 10,
                            nav: true,
                            dots: false,
                            autoplay: false,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: false,
                            navText: ['<span class="custom-owl-prev"><i class="fa-solid fa-arrow-left-long"></i></span>', '<span class="custom-owl-next"><i class="fa-solid fa-arrow-right-long"></i></span>']
                        });
                    });
                });
            } else {
                $(".woocommerce-product-gallery__wrapper").trigger('destroy.owl.carousel');
                $(".woocommerce-product-gallery__wrapper").removeClass('owl-carousel owl-loaded');
                $(".woocommerce-product-gallery__wrapper").find('.owl-stage-outer').children().unwrap();
            }
        }
    
        initOwlCarousel();
        $(window).resize(initOwlCarousel);
    });    
});
