<?php

    /**
     * Página de Ggerenciamento de Shortcodes Enium Criação de Sitses
     */

    /**
     * Shortcode para adicionar vídeos responsivos do Youtube - [bartag foo="foo-value"]
     * As classes video, video-container e video-container iframe, deverão existir no style.css
     * Como usar: https://www.youtube.com/watch?v=LLMM6sWHm40
     */
    function down_func($atts, $content = null) {
        extract(shortcode_atts(array(
        'link' => '$content'
                        ), $atts));

        return "<div class=\"video\">
                            <div class=\"video-container\">
                                <iframe src=\"//www.youtube.com/embed/{$link}\" style=\"width:100%;\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                        </div>";
    }

    add_shortcode('youtube', 'down_func');

    function download($atts, $content = null) {
        extract(shortcode_atts(array(
        'link' => '$content'
                        ), $atts));

        return "<div style=\"clear:both\"></div><a class=\"btn btn-default btn-block\" href=\"{$link}\" title=\"Donwload\" target=\"_blank\" style=\"font-size:24px;\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Download</a>";
    }

    add_shortcode('baixar', 'download');
    