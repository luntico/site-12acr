(function ($, root, undefined) {

    $(function () {

        'use strict';

        $(function () {
            $(".rslides").responsiveSlides({
                auto: true, // Boolean: Animate automatically, true or false
                speed: 3000, // Integer: Speed of the transition, in milliseconds
                timeout: 5000, // Integer: Time between slide transitions, in milliseconds
                pager: false, // Boolean: Show pager, true or false
                nav: true, // Boolean: Show navigation, true or false
                pause: true, // Boolean: Pause on hover, true or false
                maxwidth: "", // Integer: Max-width of the slideshow, in pixels
                navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
                manualControls: "", // Selector: Declare custom pager navigation
                namespace: "rslides", // String: Change the default namespace used
                before: function () {
                }, // Function: Before callback
                after: function () {
                }     // Function: After callback
            });
        });

        $("#cards_home img").addClass("card-img-top img-fluid w-100");

        $(document).ready(function () {
            $('.bxslider').bxSlider({
                auto: true,
                autoControls: false,
                slideWidth: 244,
                minSlides: 2,
                maxSlides: 5,
                moveSlides: 5,
                slideMargin: 15,
                infiniteLoop: true,
                speed: 1000,
                pager: false,
                autoHover: true,
                autoDelay: 3000,
                nextSelector: '#slider-next',
                prevSelector: '#slider-prev',
                nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
                prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
            });
        });

        $(function () {
            $('[data-toggle="popover"]').popover({
                html : true
            });
        });

        $('.cidademapa').on( "click", function(event) {
            event.preventDefault();
            $(".collapse").removeClass('show');
            var self = $(this);
            var href = self.attr('href');
            var link = href.substring(9);

            $('html, body').animate({
                scrollTop: $('#heading'+link).offset().top
            }, 1000);

            $(href).addClass('show');
        });


    });

})(jQuery, this);
