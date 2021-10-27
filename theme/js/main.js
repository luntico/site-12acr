(function ($, root, undefined) {

    $(function () {

        'use strict';

        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
      })

        $(document).on("click", '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $("body").on('click','.movediv', function(){

            $(".movediv").removeClass('menu-header-active');
            var div = $(this).attr('href').slice(1);
            $(this).addClass('menu-header-active');
            $('html, body').animate({
                scrollTop: $('#' + div).offset().top - 120
            }, 1000);
            return false;
        });


        var offset = $('.menu-fixo').offset().top;
        var $meuMenu = $('.menu-fixo'); // guardar o elemento na memoria para melhorar performance
        $(document).on('scroll', function () {
            if (offset < $(window).scrollTop()) {

            } else {

            }
        });

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


        $('#accordion .collapse:first').addClass('show');
        $('#box-planos .card:first').addClass('active');


        (function() {

          $(".card").on("show.bs.collapse hide.bs.collapse", function(e) {
            if (e.type=='show'){
              $(this).addClass('active');
          }else{
              $(this).removeClass('active');
          }
      });  

      }).call(this);

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
