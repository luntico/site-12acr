<?php
/**
     * Rename file name when doing upload
     *
     * @param   string 	$filename   The name of the file being uploaded
     * @return  string 	The sanitized string
     */
    function my_custom_file_name($filename) {

        $info = pathinfo($filename);
        $ext = empty($info['extension']) ? '' : '.' . $info['extension'];
        $name = basename($filename, $ext);
        if (isset($_REQUEST['post_id']) && is_numeric($_REQUEST['post_id'])) {
            $postObj = get_post($_REQUEST['post_id']);
            $postSlug = sanitize_title($postObj->post_title);
        }
        if (isset($postSlug) && !empty($postSlug) && $postSlug != 'rascunho-automatico')
            $finalFileName = $postSlug; // File name will be the same as the post slug.
        else
            $finalFileName = sanitize_title($name); // File name will be the same as the image file name, but sanitized.
        return $finalFileName . $ext;
    }

    add_filter('sanitize_file_name', 'my_custom_file_name', 100);