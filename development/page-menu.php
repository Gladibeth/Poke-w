<?php get_header(); ?>
  <div class="about-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/fondo chispiado + morado.png');">
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title">
        <h3>ENTRADAS</h3>
      </div>
    </div>
  </div>
  <div class="main-entries">
    <div class="container">
      <div class="main-entries__nav">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs" data-toggle="pill" href="#v-pills-home" id="pills-home-tab" role="tab">entradas</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs active" data-toggle="pill" href="#v-pills-profile" id="pills-profile-tab" role="tab">poke bowl</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-contact" aria-selected="true" class="nav-link--tabs" data-toggle="pill" href="#v-pills-contact" id="pills-contact-tab" role="tab">juice bar</a>
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
        <div aria-labelledby="pills-home-tab" class="tab-pane fade" id="v-pills-home" role="tabpanel">
          <div class="main-entries__content">
            <!--entradas-->
            <?php
              $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'order' => 'DESC'
            );
              $loop = new WP_Query( $args );
            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post();?>
              <a class="main-entries__item" data-target=".entries-modals" data-toggle="modal" href="">
                <div class="main-entries__img">
                  <img src="<?php echo the_post_thumbnail_url(); ?>">
                </div>
                <div class="main-entries__text">
                  <div class="main-entries__title">
                    <h3><?php the_title();?></h3>
                  </div>
                </div>
              </a>
            <?php endwhile; wp_reset_query();?>
          </div>
        </div>
        <div class="tab-pane fade show active" id="v-pills-profile">
          <div class="main-pokebowls__content">
            <!--poke bowl-->
            <?php
              $args = array(
              'post_type' => 'poke_bowls',
              'post_status' => 'publish',
              'order' => 'DESC'
            );
              $loop = new WP_Query( $args );
            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post();?>
              <a class="main-entries__item" data-target=".pokebolws-modals" data-toggle="modal" href="">
                <div class="main-entries__img">
                  <img src="<?php echo the_post_thumbnail_url(); ?>">
                </div>
                <div class="main-entries__text">
                  <div class="main-entries__title">
                    <h3><?php the_title();?></h3>
                  </div>
                </div>
              </a>
            <?php endwhile; wp_reset_query();?>
            
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-contact">
          <div class="main-pokebowls__content">
            <!--juice bar-->
            <?php
              $args = array(
              'post_type' => 'juice_bar',
              'post_status' => 'publish',
              'order' => 'DESC'
            );
              $loop = new WP_Query( $args );
            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post();?>
              <a class="main-entries__item" data-target=".juicebar-modals" data-toggle="modal" href="">
                <div class="main-entries__img">
                <img src="<?php echo the_post_thumbnail_url(); ?>">
                </div>
                <div class="main-entries__text">
                  <div class="main-entries__title">
                    <h3><?php the_title();?></h3>
                  </div>
                </div>
              </a>
            <?php endwhile; wp_reset_query();?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?> 