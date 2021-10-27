<?php

    /**
     * Logotipo do Admin
     */
    function adenium_custom_login_logo() {
        echo '<style type = "text/css">
        .login h1 a { 
        background-image: url(https://blog.enium.com.br/wp-content/uploads/2017/03/logotipo-enium-criacao-de-sites-responsivos-com-wordpress.png)!important;
        background-size: 241px;
        width: 241px;
        height: 79px;        
        }
        </style>';
    }

    add_action('login_head', 'adenium_custom_login_logo');
    