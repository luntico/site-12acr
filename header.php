<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>
        <?php
        wp_title('');
        if (wp_title('', false)) {
            echo ' :';
        }
        bloginfo('name');
        ?>
    </title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- Pushy Menu -->
    <nav class="pushy pushy-left" data-focus="#first-link">
        <div class="pushy-content">
            <ul>
                 <li>
                    <a href="http://alternativaprovedor.com.br/Alternativa Blog">Blog</a>
                </li>
                <li>
                    <a href="http://alternativaprovedor.com.br/>/quem-somos">Sobre</a>
                </li>
                <li>
                    <a class="movediv" href="#box-planos">planos</a>
                </li>
                <li>
                    <a class="movediv" href="#box-ajuda">ajuda</a>
                </li>
                <li>
                    <a class="movediv" href="#box-app" href="">app</a>
                </li>
                <li>
                    <a class="movediv" href="#box-contato" href="">fale conosco</a>
                </li>
                <li>
                    <a href="http://alternativaprovedor.com.br//" target="_blank" title="Central do Cliente">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Central do Cliente
                    </a>
                </li>
                <!-- <li class="pushy-submenu">
                    <button id="first-link">Todas as Páginas</button>
                    <ul>
                        <?php //wp_list_pages('title_li=');?>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <button id="first-link">Todas Categorias</button>
                    <ul>
                        <?php //wp_list_categories('title_li=');?>
                    </ul>
                </li>
                <li class="pushy-link">
                    <a href="#">Fechar</a>
                </li> -->
            </ul>
        </div>
    </nav>

    <!-- Site Overlay -->
    <div class="site-overlay"></div>
    <div id="container">
        <header id="header">
            <button class="menu-btn d-xs-block d-sm-block d-md-block d-lg-none">&#9776; Menu</button>
            <div class="slide-top">
                <div class="fixar">
                    <div class="container">
                        <?php include("includes/menu-top.php"); ?>
                    </div>
                </div>
                <ul class="rslides">
                    <li>
                        <img src="<?= get_template_directory_uri(); ?>/theme/img/slide/slide1.jpg" alt="">
                    </li>
                    <li>
                        <img src="<?= get_template_directory_uri(); ?>/theme/img/slide/slide1.jpg" alt="">
                    </li>
                </ul>
            </div>

        </header>

        <!-- /header -->