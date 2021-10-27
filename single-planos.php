<?php get_header(); ?>
<div class="clearfix"></div>
<div class="divisao"></div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <hr>
        <div class="info_post">
          <div class="dados-post">
            <i class="fa fa-calendar"></i> - <?php the_time('j \d\e F \d\e Y') ?> | <i class="fa fa-clock-o"></i> - <?php the_time('g:i') ?> - <i class="fa fa-sitemap"></i> -  <a href="#" title="#">Home</a> &raquo; <?php the_category('&raquo; '); ?>  
          </div>
        </div>
        <hr>
        <?php the_content(); ?>
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
get_footer();
