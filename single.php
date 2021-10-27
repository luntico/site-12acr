<?php get_header(); ?>
<div class="clearfix"></div>
<div class="divisao"></div>
<div class="container">

  <div class="row">
    <div class="col-sm-12" style="background:#f3f3f3!important; border-radius: 2em; padding: 15px">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php $itens = get_post_meta($post->ID, 'valor', true); ?>
      <?php if (!empty($itens)): ?>
      <!-- Single Planos -->
      <div class="box-planos-single">
        <div class="container-form-single">
          <h5>Olá, ótima escolha!</h5>
          <p>Nos envie seus dados para que possamos concluir seu cadastro!</p>
          <div class="formsingle">
            <?php dynamic_sidebar('formplanos'); ?>
          </div>
        </div>
        <div class="planos-selecionado-single">
                <div class="cplanos-header">
                  <p>Plano Selecionado</p>
                  <div class="titulo-plano">
                    <?php the_title();?>
                  </div>
                  <div class="velocidade-plano">
                    <h3>
                      <i class="fa fa-download" aria-hidden="true"></i>
                      <?php echo get_post_meta(get_the_ID(), 'velocidade', true) ?>
                    </h3>
                    <span class="velocidade-plano-texto">
                      velocidade de download
                    </span>
                  </div>
                </div>
                <div class="cplanos-footer">
                  <div class="preco-plano">
                    <h3>
                      <?php echo get_post_meta(get_the_ID(), 'valor', true) ?>
                    </h3>
                    <span class="preco-plano-texto">
                      /mês
                    </span>
                  </div>
                </div>
        </div>
      </div>

      <?php endif;
      if (empty($itens)):
      ?>
      <!-- Single Normal -->
      <h1>
        <?php the_title(); ?>
      </h1>
      <hr>
      <div class="info_post">
        <div class="dados-post">
          <i class="fa fa-calendar"></i> -
          <?php the_time('j \d\e F \d\e Y') ?> |
          <i class="fa fa-clock-o"></i> -
          <?php the_time('g:i') ?> -
          <i class="fa fa-sitemap"></i> -
          <a href="#" title="#">Home</a> &raquo;
          <?php the_category('&raquo; '); ?>
        </div>
      </div>
      <hr>
      <?php the_content(); ?>
      <?php endif; ?>
      <?php
      endwhile;
    else:
    endif;
    ?>
    </div>
  </div>
</div>
</div>
<div class="divisao"></div>
<div class="clearfix"></div>
<?php
include('includes/box-planos.php');
get_footer();