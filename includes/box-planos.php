<div id="box-planos">
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h2>NOSSOS PLANOS
                    <span class="laranja fontthin">mais facilidade para você</span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                        aria-selected="true">Fibra óptica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Cabo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Wireless</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div id="accordion">
                            <?php 
                            query_posts('showposts=5&category_name=fibra-optica&offset=0&order=ASC');
                            if (have_posts()): 
                                while (have_posts()) :
                                    the_post();
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="heading<?= get_the_ID() ?>">
                                          <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= get_the_ID() ?>" aria-expanded="true" aria-controls="collapseOne">
                                              <?php the_title(); ?> | <?php echo get_post_meta(get_the_ID(), 'velocidade', true) ?> | <?php echo get_post_meta(get_the_ID(), 'valor', true)?> mês
                                          </button>
                                      </h5>
                                  </div>

                                  <div id="collapse<?= get_the_ID() ?>" class="collapse" aria-labelledby="heading<?= get_the_ID() ?>" data-parent="#accordion">
                                      <div class="card-body"  style="text-align: center">
                                       <div class="row">
                                           <div class="col-md-4">
                                               <h3>PLANO <?php echo get_post_meta(get_the_ID(), 'velocidade', true) ?></h3>
                                               <h4><?php echo get_post_meta(get_the_ID(), 'valor', true)?> mês</h4>
                                           </div>
                                           <div class="col-md-4">
                                               <p> <i class="fa fa-download"></i> Download: <?php echo get_post_meta(get_the_ID(), 'download', true) ?>*</p>
                                               <p> <i class="fa fa-upload"></i> Upload: <?php echo get_post_meta(get_the_ID(), 'upload', true) ?>*</p>
                                           </div>
                                           <div class="col-md-4">
                                               <a href="<?php the_permalink(); ?>" class="btn btn-warning">
                                                   ASSINAR
                                               </a>

                                               <p class="mt-2"><?php echo get_post_meta(get_the_ID(), 'observacoes', true) ?></p>
                                           </div>
                                       </div>
                                       <div class="row mt-5">
                                           <div class="col-md-12">
                                               <p><?php echo get_post_meta(get_the_ID(), 'descricao', true) ?></p>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-12">
                                            <ul class="list-icones">
                                                <?php 

                                                $celular = get_post_meta(get_the_ID(), 'celular', true);
                                                $computador = get_post_meta(get_the_ID(), 'computador', true);
                                                $musica = get_post_meta(get_the_ID(), 'musica', true);
                                                $tablet = get_post_meta(get_the_ID(), 'tablet', true);
                                                $tv = get_post_meta(get_the_ID(), 'tv', true);
                                                $videogame = get_post_meta(get_the_ID(), 'videogame', true);
                                                for ($i = 0; $i < $celular; $i++) {
                                                    echo '<li title="Smartphone" data-toggle="tooltip">
                                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                                    </li>';
                                                }
                                                for ($i = 0; $i < $computador; $i++) {
                                                    echo '<li title="Computador" data-toggle="tooltip"><i class="fa fa-laptop" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $musica; $i++) {
                                                    echo '<li title="Música" data-toggle="tooltip"><i class="fa fa-headphones" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $tablet; $i++) {
                                                    echo '<li title="Tablet" data-toggle="tooltip"><i class="fa fa-tablet" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $tv; $i++) {
                                                    echo '<li title="Smart TV" data-toggle="tooltip"><i class="fa fa-television" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $videogame; $i++) {
                                                    echo '<li title="Vídeo Game" data-toggle="tooltip"><i class="fa fa-gamepad" aria-hidden="true"></i></li>';
                                                }

                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <!-- Accorddion -->
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div id="accordion">
                            <?php 
                            query_posts('showposts=4&category_name=cabo&offset=0&order=ASC');
                            if (have_posts()): 
                                while (have_posts()) :
                                    the_post();
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="heading<?= get_the_ID() ?>">
                                          <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= get_the_ID() ?>" aria-expanded="true" aria-controls="collapseOne">
                                              <?php the_title(); ?> | <?php echo get_post_meta(get_the_ID(), 'velocidade', true) ?> | <?php echo get_post_meta(get_the_ID(), 'valor', true)?> mês
                                          </button>
                                      </h5>
                                  </div>

                                  <div id="collapse<?= get_the_ID() ?>" class="collapse" aria-labelledby="heading<?= get_the_ID() ?>" data-parent="#accordion">
                                      <div class="card-body"  style="text-align: center">
                                       <div class="row">
                                           <div class="col-md-4">
                                               <h3>PLANO <?php echo get_post_meta(get_the_ID(), 'velocidade', true) ?></h3>
                                               <h4><?php echo get_post_meta(get_the_ID(), 'valor', true)?> mês</h4>
                                           </div>
                                           <div class="col-md-4">
                                               <p> <i class="fa fa-download"></i> Download: <?php echo get_post_meta(get_the_ID(), 'download', true) ?>*</p>
                                               <p> <i class="fa fa-upload"></i> Upload: <?php echo get_post_meta(get_the_ID(), 'upload', true) ?>*</p>
                                           </div>
                                           <div class="col-md-4">
                                               <a href="<?php the_permalink(); ?>" class="btn btn-warning">
                                                   ASSINAR
                                               </a>

                                                <p class="mt-2"><?php echo get_post_meta(get_the_ID(), 'observacoes', true) ?></p>
                                           </div>
                                       </div>
                                       <div class="row mt-5">
                                           <div class="col-md-12">
                                               <p><?php echo get_post_meta(get_the_ID(), 'descricao', true) ?></p>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-12">
                                            <ul class="list-icones">
                                                <?php 

                                                $celular = get_post_meta(get_the_ID(), 'celular', true);
                                                $computador = get_post_meta(get_the_ID(), 'computador', true);
                                                $musica = get_post_meta(get_the_ID(), 'musica', true);
                                                $tablet = get_post_meta(get_the_ID(), 'tablet', true);
                                                $tv = get_post_meta(get_the_ID(), 'tv', true);
                                                $videogame = get_post_meta(get_the_ID(), 'videogame', true);
                                                for ($i = 0; $i < $celular; $i++) {
                                                    echo '<li><i class="fa fa-mobile" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $computador; $i++) {
                                                    echo '<li><i class="fa fa-laptop" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $musica; $i++) {
                                                    echo '<li><i class="fa fa-headphones" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $tablet; $i++) {
                                                    echo '<li><i class="fa fa-tablet" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $tv; $i++) {
                                                    echo '<li><i class="fa fa-television" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $videogame; $i++) {
                                                    echo '<li><i class="fa fa-gamepad" aria-hidden="true"></i></li>';
                                                }

                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <!-- Accorddion -->
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div id="accordion">
                            <?php 
                            query_posts('showposts=4&category_name=wireless&offset=0&order=ASC');
                            if (have_posts()): 
                                while (have_posts()) :
                                    the_post();
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="heading<?= get_the_ID() ?>">
                                          <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= get_the_ID() ?>" aria-expanded="true" aria-controls="collapseOne">
                                              <?php the_title(); ?> | <?php echo get_post_meta(get_the_ID(), 'velocidade', true) ?> | <?php echo get_post_meta(get_the_ID(), 'valor', true)?> mês
                                          </button>
                                      </h5>
                                  </div>

                                  <div id="collapse<?= get_the_ID() ?>" class="collapse" aria-labelledby="heading<?= get_the_ID() ?>" data-parent="#accordion">
                                      <div class="card-body"  style="text-align: center">
                                       <div class="row">
                                           <div class="col-md-4">
                                               <h3>PLANO <?php echo get_post_meta(get_the_ID(), 'velocidade', true) ?></h3>
                                               <h4><?php echo get_post_meta(get_the_ID(), 'valor', true)?> mês</h4>
                                           </div>
                                           <div class="col-md-4">
                                               <p> <i class="fa fa-download"></i> Download: <?php echo get_post_meta(get_the_ID(), 'download', true) ?>*</p>
                                               <p> <i class="fa fa-upload"></i> Upload: <?php echo get_post_meta(get_the_ID(), 'upload', true) ?>*</p>
                                           </div>
                                           <div class="col-md-4">
                                               <a href="<?php the_permalink(); ?>" class="btn btn-warning">
                                                   ASSINAR
                                               </a>

                                                <p class="mt-2"><?php echo get_post_meta(get_the_ID(), 'observacoes', true) ?></p>
                                           </div>
                                       </div>
                                       <div class="row mt-5">
                                           <div class="col-md-12">
                                               <p><?php echo get_post_meta(get_the_ID(), 'descricao', true) ?></p>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-12">
                                            <ul class="list-icones">
                                                <?php 

                                                $celular = get_post_meta(get_the_ID(), 'celular', true);
                                                $computador = get_post_meta(get_the_ID(), 'computador', true);
                                                $musica = get_post_meta(get_the_ID(), 'musica', true);
                                                $tablet = get_post_meta(get_the_ID(), 'tablet', true);
                                                $tv = get_post_meta(get_the_ID(), 'tv', true);
                                                $videogame = get_post_meta(get_the_ID(), 'videogame', true);
                                                for ($i = 0; $i < $celular; $i++) {
                                                    echo '<li><i class="fa fa-mobile" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $computador; $i++) {
                                                    echo '<li><i class="fa fa-laptop" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $musica; $i++) {
                                                    echo '<li><i class="fa fa-headphones" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $tablet; $i++) {
                                                    echo '<li><i class="fa fa-tablet" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $tv; $i++) {
                                                    echo '<li><i class="fa fa-television" aria-hidden="true"></i></li>';
                                                }
                                                for ($i = 0; $i < $videogame; $i++) {
                                                    echo '<li><i class="fa fa-gamepad" aria-hidden="true"></i></li>';
                                                }

                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <!-- Accorddion -->
            </div>
        </div>
        <div class="col-md-12 mt-2" align="center">
            <a href="/CONTRATOS_DE_SCM_E_COMODATO.pdf">
                <i class="fa fa-file-text" aria-hidden="true"></i> Contrato de Adesão
            </a>
        </div>
    </div>
</div>
</div>