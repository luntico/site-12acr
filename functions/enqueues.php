<?php

function adenium_styles() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        /* Styles */
            //wp_enqueue_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(), '4.0.0-alpha.6');
        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css', array(), 'v4.1.1');
        wp_enqueue_style('bootstrap-style');        

//wp_enqueue_style('fontawesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/plugins/font-awesome/css/font-awesome.min.css', array(), '4.7.0');

        wp_enqueue_style('ekko-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css', array(), '5.3.0');
        
        wp_enqueue_style('animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array(), '3.5.2');

        wp_register_style('adenium-reset-style', get_template_directory_uri() . '/theme/css/reset.css', array(), '1.0', 'all');
            wp_enqueue_style('adenium-reset-style'); // Enqueue it!

            //wp_register_style('adenium-dataTable', get_template_directory_uri() . '/plugins/datatables/dataTables.bootstrap4.css', array(), '1.10.15', 'all');
            wp_enqueue_style('adenium-dataTable'); // Enqueue it!

            wp_register_style('adenium-slide-style', get_template_directory_uri() . '/plugins/responsiveslides/responsiveslides.css', array(), '', 'all');
            wp_enqueue_style('adenium-slide-style'); // Enqueue it!

            //wp_register_style('adenium-menu-canvas', get_template_directory_uri() . '/plugins/menu-canvas/menu-canvas.css', array(), '', 'all');
            //wp_enqueue_style('adenium-menu-canvas'); // Enqueue it!
            
            wp_register_style('adenium-bxslide-style', get_template_directory_uri() . '/plugins/bxslider/jquery.bxslider.css', array(), '4.1.2', 'all');
            wp_enqueue_style('adenium-bxslide-style'); // Enqueue it!
//        wp_register_style('adenium-slideinicial-style', get_template_directory_uri() . '/plugins/vegas/vegas.min.css', array(), '2.4', 'all');
//        wp_enqueue_style('adenium-slideinicial-style'); // Enqueue it!

            wp_register_style('adenium-efeitoimg-style', get_template_directory_uri() . '/theme/css/efeitoimg.css', array(), '', 'all');
            wp_enqueue_style('adenium-efeitoimg-style'); // Enqueue it!

            wp_register_style('adenium-pushy-master', get_template_directory_uri() . '/plugins/pushy-master/css/pushy.css', array(), '', 'all');
            wp_enqueue_style('adenium-pushy-master'); // Enqueue it!

            wp_register_style('adenium-style', get_template_directory_uri() . '/style.css', array(), time(), 'all');
            wp_enqueue_style('adenium-style'); // Enqueue it!
        }
    }

    function adenium_scripts() {
        if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
            /* Scripts */
            $infooter = true;
            wp_enqueue_script('jquery');
            /* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
            https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

            //wp_enqueue_script('google-script', 'https://apis.google.com/js/platform.js', array(), '3.3.7', true, $infooter);
            wp_enqueue_script('google-script', get_template_directory_uri() . '/plugins/platform.js', array(), '3.3.7', true, $infooter);


            wp_enqueue_script('bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), 'v4.1.1', true, $infooter);
            /**
             * Bootstrap core JavaScript
             */
            //wp_enqueue_script('bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array(), '4.0.0-alpha.6', true, $infooter);
            wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array(), 'v4.1.1', true, $infooter);



            /**
             * Plugin JavaScript
             */
            wp_enqueue_script('responsiveslides-script', get_template_directory_uri() . '/plugins/responsiveslides/responsiveslides.js', array(), '1.55', true, $infooter);
            //wp_enqueue_script('slide-vegas-script', get_template_directory_uri() . '/plugins/vegas/vegas.min.js', array(), '2.4', true, $infooter);
            wp_enqueue_script('bxslide-script', get_template_directory_uri() . '/plugins/bxslider/jquery.bxslider.min.js', array(), '4.1.12', true, $infooter);
            //wp_enqueue_script('datatable-script', '//cdn.datatables.net/1.10.13/js/jquery.dataTables.js', array(), '1.10.13', true, $infooter);
            //wp_enqueue_script('datatable-script', get_template_directory_uri() . '/plugins/datatables/jquery.dataTables.js', array(), '1.10.15', true, $infooter);
            //wp_enqueue_script('datatable-bt-script', get_template_directory_uri() . '/plugins/datatables/dataTables.bootstrap4.js', array(), '1.10.15', true, $infooter);
            wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/plugins/jquery-easing/jquery.easing.min.js', array(), '', true, $infooter);

            wp_enqueue_script('masked-input', get_template_directory_uri() . '/plugins/maskedinput.min.js', array('jquery'), '1.10.15', $infooter);

            wp_enqueue_script('ekko-lightbox',  'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', array('jquery'), '5.3.0', $infooter);
            //wp_enqueue_script('relogio', get_template_directory_uri() . '/plugins/relogio.js', array('jquery'), '1.0');

            wp_register_script('pushy-master', get_template_directory_uri() . '/plugins/pushy-master/js/pushy.min.js', array(), time(), true, $infooter);
            wp_enqueue_script('pushy-master'); // Enqueue it!

            wp_register_script('adenium-script', get_template_directory_uri() . '/theme/js/main.js', array('jquery'), time(), true, $infooter); // Custom scripts
            wp_enqueue_script('adenium-script'); // Enqueue it!

            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
        }
    }

    add_action('wp_enqueue_scripts', 'adenium_scripts', 100);
    add_action('init', 'adenium_scripts'); // Add Custom Scripts to wp_head
    add_action('wp_enqueue_scripts', 'adenium_styles'); // Add Theme Stylesheet
    add_action('init', 'adenium_styles'); // Add Custom Scripts to wp_head
    