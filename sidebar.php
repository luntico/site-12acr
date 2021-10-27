<aside class="sidebar">

    <div class="card">
        <a target="_blank" href="<?php if (function_exists('ot_get_option')): echo ot_get_option('link_banner_lateral_1_3');
    endif;
?>">
            <?php if (function_exists('ot_get_option')) : ?>
                    <img src="<?php echo ot_get_option('banner_lateral_1_3'); ?>" alt="Publicidade" />
    <?php endif; ?>
        </a>
    </div>    

    <div class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#leiatambem" role="tab">Leia Também</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#maisvistos" role="tab">Mais Vistos</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="leiatambem" role="tabpanel">
                <ul class="list-sidebar-foto">
                    <?php
                        query_posts('showposts=5&offset=0');
                        if (have_posts()): while (have_posts()) : the_post();
                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumb306x160');
                                        }
                                        the_title();
                                        ?>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                        else:
                        endif;
                    ?>
                </ul>
            </div>
            <div class="tab-pane" id="maisvistos" role="tabpanel">
                <ul class="list-sidebar-foto">
                    <?php
                        $i = 0;
                        query_posts('showposts=5&year=' . date('Y', current_time('timestamp')) . '&monthnum=' . date('n', current_time('timestamp')) . '&meta_key=views&orderby=meta_value_num&order=DESC');
                        if (have_posts()): while (have_posts()) : the_post();
                                ?>
                                <li>                                        
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <span class="numero-maisvistos"><?= ++$i; ?></span>
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumb306x160');
                                        }
                                        the_title();
                                        ?>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                        else:
                        endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <a target="_blank" href="<?php if (function_exists('ot_get_option')): echo ot_get_option('link_banner_lateral_2_3');
                        endif;
                    ?>">
            <?php if (function_exists('ot_get_option')) : ?>
                    <img src="<?php echo ot_get_option('banner_lateral_2_3'); ?>" alt="Publicidade" />
    <?php endif; ?>
        </a>
    </div>
    <div class="card">
        <a target="_blank" href="<?php if (function_exists('ot_get_option')): echo ot_get_option('link_banner_lateral_3_3');
    endif;
?>">
<?php if (function_exists('ot_get_option')) : ?>
                    <img src="<?php echo ot_get_option('banner_lateral_3_3'); ?>" alt="Publicidade" />
        <?php endif; ?>
        </a>
    </div>

<?php //dynamic_sidebar('sidebar-widget-area');  ?>

</aside>
