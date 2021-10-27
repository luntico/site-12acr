<?php get_header(); ?>
<div class="clearfix"></div>
<div class="divisao"></div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
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
