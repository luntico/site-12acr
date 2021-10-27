<?php get_header(); ?>
<div class="clearfix"></div>
<div class="divisao"></div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1>                    
        <i class="fa fa-search" aria-hidden="true"></i> - Foram encontrados
        <?php
        $allsearch = &new WP_Query("s=$s&showposts=-1");
        $count = $allsearch->post_count;
        $key = wp_specialchars($s, 1);
        echo '<strong>' . $count . '</strong>';
        _e(' resultados para a busca por <span>');
        echo '<strong>' . $key . '</strong>';
        _e('</span> ');
        wp_reset_query();
        ?></h1>
        <hr>
        <ul class="list-horizontal list-merchant">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <li>
              <div class="box-shadow">
                <a href="<?php the_permalink(); ?>">
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
<?php
get_footer();
