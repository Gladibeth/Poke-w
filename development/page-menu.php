<?php get_header(); ?>
<div id="banner-entradas" class="about-banner js-hiddenMenu" style="background-image: url('<?php echo get_field('imagen_entrada_menu');?>">
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title">
        <h3>ENTRADAS</h3>
      </div>
    </div>
  </div>
  <div  id="banner-pokeBowl" class="about-banner" style="background-image: url('<?php echo get_field('imagen_poke_bowl_menu');?>">
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title">
        <h1>Poke Bowl</h1>
      </div>
    </div>
  </div>
  <div  id="banner-juiceBar" class="about-banner js-hiddenMenu" style="background-image: url('<?php echo get_field('imagen_juice_bar_menu');?>">
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title">
        <h3>Juice Bar</h3>
      </div>
    </div>
  </div>
  <div class="main-entries">
    <div class="container">
      <div class="main-entries__nav">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs" data-toggle="pill" href="#v-pills-home" id="entradas" role="tab" onclick="menu(this)">entradas</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs active" data-toggle="pill" href="#v-pills-profile" id="pokeBowl" role="tab" onclick="menu(this)">poke bowl</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-contact" aria-selected="true" class="nav-link--tabs" data-toggle="pill" href="#v-pills-contact" id="juiceBar" role="tab" onclick="menu(this)">juice bar</a>
          </li>
        </ul>
        <div class="btn__tabs">
          <a class="btn-btn_custom btn--large btn--filled btn--filled-gray" href="createpokebolw.html">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/Bowl.svg">
              <span class="line"></span>
              ARMA TU BOWL
            </a>
        </div>
      </div>
      <hr class="line-gray line-gray--entries">
      <div class="tab-content">
        <div aria-labelledby="entradas" class="tab-pane fade" id="v-pills-home" role="tabpanel">
          <div class="main-entries__content">
            <!--1 entradas-->
            <?php
              $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'order' => 'DESC'
            );
              $loop = new WP_Query( $args );
              global $post;
            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post();?>
              <a class="main-entries__item" data-target="<?php echo '#'.$post->post_name;?>" data-toggle="modal" href="">
                <div class="main-entries__img">
                  <img src="<?php echo the_post_thumbnail_url(); ?>">
                </div>
                <div class="main-entries__text">
                  <div class="main-entries__title">
                    <h3><?php the_title();?></h3>
                  </div>
                </div>
              </a>
               <!--- MODAL 1-->
              <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" role="dialog" tabindex="-1" id="<?php echo $post->post_name;?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                          <span aria-hidden="true">×</span>
                        </button>
                      <div class="main-modal__content">
                        <div class="main-modal__item">
                          <div class="main-modal__img">
                            <img src="<?php echo the_post_thumbnail_url(); ?>">
                          </div>
                        </div>
                        <div class="main-modal__item">
                          <div class="main-modal__text">
                            <div class="main-modal__title d-flex">
                              <p class="mt-2"><?php the_title();?></p>
                              <span class="line line-color  line-color--entries"></span>
                              <div class="main-modals__icons mt-2">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/noun_Flame_816755.svg">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/noun_sesame_1048330.svg">
                              </div>
                            </div>
                            <hr class="line-gray line-gray--entries">
                            <div class="main-modal__description">
                              <strong>Ingredientes:</strong>
                              <p><?php the_field('ingredientes_menu');?></p>
                            </div>
                            <div class="main-modal__boxdetails">
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_calorias_menu');?></span>
                                <p>Calorías</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_carbohidratos');?></span>
                                <p>Carbohidratos</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_grasas_menu');?>g</span>
                                <p>Grasas</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><img src="<?php echo get_template_directory_uri();?>/assets/img/Menu/icono-carne.svg"> / <img src="<?php echo get_template_directory_uri();?>/assets/img/Menu/icono-pescado.svg"></span>
                                <p>Superfoods</p>
                              </div>
                            </div>
                            <div class="main-modal__price">
                              <p>COP: <?php the_field('precio_menu');?></p>
                            </div>
                            <div class="btn-modal">
                              <?php $urlRappi= get_field('link_rappi_menu'); ?>
                              <a class="btn-btn_custom btn--medium btn--filled btn--filled-gray" style="width:140px;" target="_blank" href="<?php echo($urlRappi['url']); ?>">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg">
                                  <span class="line"></span>
                                  Pide en línea
                                </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query();?>
          </div>
        </div>
        <div class="tab-pane fade show active" id="v-pills-profile">
          <div class="main-pokebowls__content">
            <!--2 poke bowl-->
            <?php
              $args = array(
              'post_type' => 'poke_bowls',
              'post_status' => 'publish',
              'order' => 'DESC'
            );
              $loop = new WP_Query( $args );
              global $post;
            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post();?>
              <a class="main-entries__item" data-target="<?php echo '#'.$post->post_name;?>" data-toggle="modal" href="">
                <div class="main-entries__img">
                  <img src="<?php echo the_post_thumbnail_url(); ?>">
                </div>
                <div class="main-entries__text">
                  <div class="main-entries__title">
                    <h3><?php the_title();?></h3>
                  </div>
                </div>
              </a>

               <!--- MODAL 2-->
              <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" role="dialog" tabindex="-1" id="<?php echo $post->post_name;?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                          <span aria-hidden="true">×</span>
                        </button>
                      <div class="main-modal__content">
                        <div class="main-modal__item">
                          <div class="main-modal__img">
                            <img src="<?php echo the_post_thumbnail_url(); ?>">
                          </div>
                        </div>
                        <div class="main-modal__item">
                          <div class="main-modal__text">
                            <div class="main-modal__title">
                              <p class="mt-2"><?php the_title();?></p>
                            </div>
                            <hr class="line-gray line-gray--entries">
                            <div class="main-modal__description">
                              <strong>Ingredientes:</strong>
                              <p><?php the_field('ingredientes_menu');?></p>
                              
                            </div>
                            <div class="main-modal__boxdetails">
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_calorias_menu');?></span>
                                <p>Calorías</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_carbohidratos');?></span>
                                <p>Carbohidratos</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_grasas_menu');?>g</span>
                                <p>Grasas</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><img src="<?php echo get_template_directory_uri();?>/assets/img/Menu/icono-carne.svg"></span>
                                <p>Superfoods</p>
                              </div>
                            </div>
                            <div class="main-modal__price">
                              <div class="main-modal__smallprice">
                                <span>M:</span>
                                <p>COP <?php the_field('precio_mediano_menu');?></p>
                              </div>
                              <div class="main-modal__smallprice">
                                <span>G:</span>
                                <p>COP <?php the_field('precio_grande_menu');?></p>
                              </div>
                            </div>
                            <div class="btn-modal">
                              <?php $urlRappi= get_field('link_rappi_menu'); ?>
                              <a class="btn-btn_custom btn--medium btn--filled btn--filled-gray" style="width:140px;" target="_blank" href="<?php echo($urlRappi['url']); ?>">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg">
                                  <span class="line"></span>
                                  Pide en línea
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php endwhile; wp_reset_query();?>
            
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-contact">
          <div class="main-pokebowls__content">
            <!--3 juice bar-->
            <?php
              $args = array(
              'post_type' => 'juice_bar',
              'post_status' => 'publish',
              'order' => 'DESC'
            );
              $loop = new WP_Query( $args );
              global $post;
            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post();?>
              <a class="main-entries__item" data-target="<?php echo '#'.$post->post_name;?>" data-toggle="modal" href="">
                <div class="main-entries__img">
                <img src="<?php echo the_post_thumbnail_url(); ?>">
                </div>
                <div class="main-entries__text">
                  <div class="main-entries__title">
                    <h3><?php the_title();?></h3>
                  </div>
                </div>
              </a>
              <!--- MODAL 3-->
              <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" role="dialog" tabindex="-1" id="<?php echo $post->post_name;?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                          <span aria-hidden="true">×</span>
                        </button>
                      <div class="main-modal__content">
                        <div class="main-modal__item">
                          <div class="main-modal__img">
                            <img src="<?php echo the_post_thumbnail_url(); ?>">
                          </div>
                        </div>
                        <div class="main-modal__item">
                          <div class="main-modal__text">
                            <div class="main-modal__title">
                              <p class="mt-2"><?php the_title();?></p>
                            </div>
                            <hr class="line-gray line-gray--entries">
                            <div class="main-modal__description">
                              <strong>Ingredientes:</strong>
                              <p><?php the_field('ingredientes_menu');?></p>
                              <strong>Beneficios:</strong>
                              <p><?php the_field('beneficios_menu');?></p>
                            </div>
                            <div class="main-modal__boxdetails">
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_calorias_menu');?></span>
                                <p>Calorías</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_carbohidratos');?></span>
                                <p>Carbohidratos</p>
                              </div>
                              <div class="main-modal__details">
                                <span class="badge badge-secondary"><?php the_field('cantidad_de_grasas_menu');?>g</span>
                                <p>Grasas</p>
                              </div>
                              <!-- <div class="main-modal__details">
                                <span class="badge badge-secondary">123</span>
                                <p>Superfoods</p>
                              </div> -->
                            </div>
                            <div class="main-modal__price">
                              <p>COP: <?php the_field('precio_menu');?></p>
                            </div>
                            <!-- <div class="btn-modal">
                              <?php $urlRappi= get_field('link_rappi_menu'); ?>
                              <a class="btn-btn_custom btn--medium btn--filled btn--filled-gray" target="_blank" href="<?php echo($urlRappi['url']); ?>">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg">
                                  <span class="line"></span>
                                  Pide en línea
                                </a>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query();?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?> 