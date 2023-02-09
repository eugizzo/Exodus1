$(document).ready(function () {

    $('.client-single').on('click', function (event) {
       event.preventDefault();

       var active = $(this).hasClass('active');

       var parent = $(this).parents('.testi-wrap');$(document).ready(function () {
        var silder = $(".owl-carousel");
        silder.owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items: 1,
            stagePadding: 20,
            center: true,
            nav: false,
            margin: 50,
            dots: true,
            loop: true,
            responsive: {
                0: { items: 1 },
                480: { items: 2 },
                575: { items: 2 },
                768: { items: 2 },
                991: { items: 3 },
                1200: { items: 4 }
            }
        });
    });

       if (!active) {
           var activeBlock = parent.find('.client-single.active');

           var currentPos = $(this).attr('data-position');

           var newPos = activeBlock.attr('data-position');

           activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
           activeBlock.attr('data-position', currentPos);

           $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
           $(this).attr('data-position', newPos);

       }
   });

}(jQuery));
