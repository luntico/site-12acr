<?php include("header.php"); ?>
<div class="clearfix"></div>
<div class="divisao"></div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1><?php single_cat_title('', true); ?></h1>
      <hr>
      <ul class="list-horizontal">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <li>
            <div class="box-shadow">
              <?php $itens = get_post_meta($post->ID, 'link', true); ?>
              <a href="<?php if(!empty($itens)): echo $itens; else: the_permalink(); endif; ?>" <?php if(!empty($itens)): echo 'target="_blank"'; else: endif; ?>>
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('thumb400x287');
                }else{
                  echo '<img src="'.get_template_directory_uri().'/plugins/theme/img/imagem-padrao.jpg">';
                }
                ?>
                <span><?php the_title(); ?></span> <br> <?php echo $itens = get_post_meta($post->ID, 'cidade', true); ?>
              </a>
            </div>  
          </li>
          <?php
        endwhile;
      else:
        echo '<li>Nenhum post cadastrado na categoria</li>';
      endif;
      ?>
    </ul>
  </div>
</div>
</div>
</div>
<div class="divisao"></div>
<div class="clearfix"></div>
<?php include("footer-interno.php");