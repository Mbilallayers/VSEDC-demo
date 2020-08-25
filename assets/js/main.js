
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

var showChar = 1;
var ellipsestext = "";
var moretext = "+ Read More";
var lesstext = "- Read Less";
$('.more').each(function() {
   var content = $(this).html();

   if(content.length > showChar) {

       var c = content.substr(0, showChar);
       var h = content.substr(showChar-1, content.length - showChar);

       var html = c + '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">'+moretext+'</a></span>';

       $(this).html(html);
   }

});

$(".morelink").click(function(){
   if($(this).hasClass("less")) {
       $(this).removeClass("less");
       $(this).html(moretext);
   } else {
       $(this).addClass("less");
       $(this).html(lesstext);
   }
   $(this).parent().prev().toggle();
   $(this).prev().toggle();
   return false;
});


})(jQuery);

$(function() {
    $(".rotate-badge h1").lettering();
});