<div id="box-ajuda">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-3" align="center">
        <h2>Ajuda
          <span class="laranja fontthin">perguntas frequentes</span>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="list-ajuda">
          <?php
          query_posts('showposts=6&category_name=ajuda&offset=0&order=ASC');
          if (have_posts()):
              while (have_posts()):
                  the_post();
                  ?>
                      <li>
                        <a href="<?php the_permalink();?>">
                          <?php the_title();?>
                        </a>
                      </li>
                      <?php
              endwhile;
          endif;
          ?>
        </ul>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12" align="center">
        <a href="<?php echo site_url();?>/categoria/ajuda"><i class="fa fa-plus"></i> Mais perguntas</a>
      </div>
    </div>
  </div>
</div>