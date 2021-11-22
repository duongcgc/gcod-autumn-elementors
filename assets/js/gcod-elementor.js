(function($) {
    "use strict";

    // your code here

    $(".categories-slider").slick({
        loop: true,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        infinite: true,
        speed: 500,
        adaptiveHeight: true,
        vertical: false,
        rows: 1,
        slidesPerRow: 4,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<a class="slick-arrow slick-prev" href="javascript:0"><i class="fal fa-angle-left icon"></i></a>',
        nextArrow: '<a class="slick-arrow slick-next" href="javascript:0"><i class="fal fa-angle-right icon"></i></a>',
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    rows: 1,
                    slidesPerRow: 4,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    rows: 1,
                    slidesPerRow: 4,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    rows: 1,
                    slidesPerRow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesPerRow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    rows: 1,
                    slidesPerRow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            }
        ]
    });
    
    $(".posts-slider").slick({
        loop: true,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        infinite: true,
        speed: 500,
        adaptiveHeight: true,
        vertical: false,
        rows: 1,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<a class="slick-arrow slick-prev" href="javascript:0"><i class="fal fa-angle-left icon"></i></a>',
        nextArrow: '<a class="slick-arrow slick-next" href="javascript:0"><i class="fal fa-angle-right icon"></i></a>',
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            }
        ]
    });
    
    $(".featured-slider-1 .slidershow-slider").slick({
        loop: true,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        infinite: true,
        speed: 500,
        adaptiveHeight: true,
        vertical: false,
        rows: 1,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<a class="slick-arrow slick-prev" href="javascript:0"><i class="fal fa-angle-left icon"></i></a>',
        nextArrow: '<a class="slick-arrow slick-next" href="javascript:0"><i class="fal fa-angle-right icon"></i></a>',
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            }
        ]
    });
    
})(jQuery);