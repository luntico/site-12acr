<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <li class="pushy-submenu">
                    <button id="first-link">Todas as Páginas</button>
                    <ul>
                        <?php wp_list_pages('title_li=');?>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <button id="first-link">Todas Categorias</button>
                    <ul>
                        <?php wp_list_categories('title_li=');?>
                    </ul>
                </li>
                <li class="pushy-link">
                    <a href="#">Fechar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Site Overlay -->
    <div class="site-overlay"></div>
    <div id="container">
        <header id="header">
            <button class="menu-btn d-xs-block d-sm-block d-md-block d-lg-none">&#9776; Menu</button>
            <div class="full-header">
                <div class="container">
                    <div class="row menu-fixo">
                        <div class="col-md-5">
                            <a class="logotipo" href="<?php echo site_url(); ?>" title="Clique para voltar para página principal">
                                <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logotipo.png" alt="Logotipo Alternativa Telecom">
                            </a>
                        </div>
                        <div class="col-md-7 d-none d-lg-block" align="center">
                            <ul class="menu-header">
                              <li>
                                    <a href="<?= site_url(); ?>/Alternativa Blog">Blog</a>
                             </li>
                                <li>
                                    <a class="movediv" href="<?php site_url(); ?>/#box-sobre">Sobre</a>
                                </li>
                                <li>
                                    <a class="movediv" href="<?php site_url(); ?>/#box-planos">planos</a>
                                </li>
                                <li>
                                    <a class="movediv" href="<?php site_url(); ?>/#box-ajuda">ajuda</a>
                                </li>
                                <li>
                                    <a class="movediv" href="<?php site_url(); ?>/#box-app" href="">app</a>
                                </li>
                                <li>
                                    <a class="movediv" href="<?php site_url(); ?>/#box-contato" href="">fale conosco</a>
                                </li>
                                <li>
                                    <a href="http://central.alternativatelecom.net.br/" target="_blank" title="Central do Assinante">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        Central do Assinante
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="box-frase">
                                <p class="mt-5">
                                    Nossa
                                    <br>conexão,
                                </p>
                                <p class="dest">
                                    <strong>Sua melhor
                                        <br> opção
                                    </strong>
                                </p>
                                <p class="mt-5">
                                    <a href="#" class="btn-alternativa" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                        Ligamos para você.
                                    </a>
                                </p>
                                <p class="mt-5">
                                    <a href="#box-planos"  title="#" class="desticone movediv">
                                        <span class="fa-stack fa-lg animated infinite bounce">
                                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                                            <i class="fa fa-arrow-down fa-stack-1x"></i>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- /header -->