<div class="clearfix"></div>
        <div class="slideshow d-none d-md-block d-lg-block">
            <ul class="rslides">
                <?php query_posts('showposts=5&category_name=slide&offset=0'); ?>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                  <li>
                      <a href="<?php echo $itens = get_post_meta($post->ID, 'link', true); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumb1366x300');
                        }else{
                          echo '<img src="'.get_template_directory_uri().'/plugins/theme/img/slide/01-slide-tio-luiz.jpg">';
                      }
                      ?>
                  </a>
              </li>
              <?php
          endwhile;
      else:
        echo '<img src="'.get_template_directory_uri().'/plugins/theme/img/slide/01-slide-tio-luiz.jpg">';
    endif;
    wp_reset_query();
    ?>
</ul>
</div>
<div class="clearfix"></div>