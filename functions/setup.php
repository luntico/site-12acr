<?php

    function adenium_setup() {
        add_editor_style('theme/css/editor-style.css');
        // Add Menu Support
        add_theme_support('menus');
        // Add Thumbnail Theme Support
        add_theme_support('post-thumbnails');
        add_image_size('thumb400x287', 400, 287, true);
        add_image_size('thumb1366x300', 1366, 300, true);

        // Enables post and comment RSS feed links to head
        add_theme_support('automatic-feed-links');
    }

    add_action('init', 'adenium_setup');

    if (!isset($content_width))
        $content_width = 975;

    function adenium_excerpt_readmore() {
        return '&nbsp; <a href="' . get_permalink() . '">' . '&hellip; ' . __('Read more', 'adenium') . ' <i class="fa fa-arrow-right"></i>' . '</a></p>';
    }

    add_filter('excerpt_more', 'adenium_excerpt_readmore');

    function custom_excerpt_length($length) {
        return 20;
    }

    add_filter('excerpt_length', 'custom_excerpt_length', 999);

// Add post formats support. See http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
    function my_css_attributes_filter($var) {
        return is_array($var) ? array() : '';
    }

    // Remove invalid rel attribute values in the categorylist
    function remove_category_rel_from_category_list($thelist) {
        return str_replace('rel="category tag"', 'rel="tag"', $thelist);
    }

    add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
    // Remove Admin bar

    function remove_admin_bar() {
        return false;
    }

    add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
    // Remove 'text/css' from our enqueued stylesheet

    function adenium_style_remove($tag) {
        return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
    }

    add_filter('style_loader_tag', 'adenium_style_remove'); // Remove 'text/css' from enqueued stylesheet
    // Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail

    function remove_thumbnail_dimensions($html) {
        $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
        return $html;
    }

    add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
    add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
    // add a favicon to your

    function blog_favicon() {
        echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.ico" />';
    }

    //para ser usado com o slug da categoria
    add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php"; } return $t;'));

    // add support menu
    register_nav_menus(array(
    'primary' => __('Outros Links', 'adenium-main-menu'),
    ));

    define('ENIUM_DESIGN_BY', '<a href="https://enium.com.br/" title="Desenvolvido por Enium Criação de Sites" target="_blank"><img src="https://enium.com.br/wp-content/themes/enium2017/img/logotipo-enium-criacao-de-sites-branco.svg" width="200px" alt="Logotipo da Enium Criação de Sites em Wordpress e com versões para dispositivos móveis"></a>');

   // function _remove_script_version($src) {
    //    $parts = explode('?ver', $src);
    //    return $parts[0];
    //}

   // add_filter('script_loader_src', '_remove_script_version', 15, 1);
   // add_filter('style_loader_src', '_remove_script_version', 15, 1);
    