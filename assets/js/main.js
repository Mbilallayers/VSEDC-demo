
(function($) {
    'use strict';

    AOS.init({
        duration: 700,
        easing: 'ease-in-out'
    });
    $("#sticker").sticky({topSpacing:0});

// Page Scroll
jQuery(document).ready(function ($) {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 0
                }, 1000);
                return false;
            }
        }
    });
});




    // $(document).ready(function() {


    //     new Swiper('#home', {
    //         scrollbar: {
    //             el: '.swiper-scrollbar',
    //             draggable: false,
    //         },
    //         slidesPerView: 'auto',
    //         freeMode: true,
    //         mousewheel: {
    //             sensitivity: 5
    //         },
    //         grabCursor: true,
    //         breakpoints: {
    //             2400: {
    //                 slidesPerView: 'auto',
    //                 spaceBetween: 0,
    //                 slidesOffsetAfter: 0,
    //                 slidesPerGroup: 1
    //             },
    //             1023: {
    //                 freeMode: true,
    //                 slidesPerView: 'auto',
    //                 spaceBetween: 0,
    //                 slidesOffsetAfter: 0,
    //                 slidesPerGroup: 1
    //             }
    //         }
    //     });



    //     $('.swiper-container').removeClass('is-invisible');


    // });

})(jQuery);