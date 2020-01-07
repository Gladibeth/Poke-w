<?php get_header(); ?>
<div itemscope itemtype = "http://schema.org/Restaurant" >
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <?php $link = get_field('registrate_menu'); ?>
  <div class="about-banner about-banner--full">
    <?php 
      $img_id = get_post_thumbnail_id(get_the_ID());
      $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
    ?>
    <img src="<?php the_post_thumbnail_url()?>" alt="<?php echo $alt; ?>">
    <div class="overlay"></div>
    <div class="container">
      <div class="about-banner__text about-banner__text--top mt-4">
        <div class="about-banner__title">
          <?php the_content();?>
        </div>
        <div class="btn-box btn-box--resgister">
          <a class="btn_custom btn--large btn--filled" href="<?php echo($link['url']); ?>">
            <?php echo($link['title']); ?>
          </a>
        </div>
        <div class="about-banner__boximg">
          <div class="about-banner__imgs">
            <div class="about-banner__img--one">
              <img alt="logo poke puntos" src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/Logo poke puntos.png">
            </div>
            <div class="about-banner__img--two">
              <img alt="logo leal" src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/Logo leal.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-pokedots">
    <div class="container">
      <div class="main-pokedots__box">
        <div class="main-general__title main-general__title--dots">
          <h1>poke puntos</h1>
        </div>
        <div class="main-general__description main-general__description--dots">
          <p>Acumula y redime visitando nuestros puntos presenciales, por cada $ 1.500 recibes 1 punto. No válido en domicilios</p>
        </div>
      </div>
    </div>
    <hr class="line-gray">
  </div>
  <div class="main-pokedots padd-top">
    <div class="container">
      <div class="main-pokedots__box">
        <div class="main-general__title main-general__title--dots">
          <h2>tabla de premios</h2>
        </div>
      </div>
      <div class="main-pokedots__content" itemscope itemtype = "http://schema.org/Menu">
        <?php
          $args = array(
          'post_type' => 'tabla_premios',
          'post_status' => 'publish',
          'order' => 'DESC'
          );
          $loop = new WP_Query( $args );
        ?>
        <?php while( $loop->have_posts() ) : $loop->the_post();?>
          <div class="main-pokedots__item">
            <div class="main-entries__text">
              <div class="main-entries__title">
                <h3 itemprop = "name"><?php the_title();?></h3>
              </div>
            </div>
            <div class="main-pokedots__img">
              <?php 
                $img_id = get_post_thumbnail_id(get_the_ID());
                $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
              ?>
              <img itemprop = "image" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
            </div>
            <div class="main-pokedots__boxtext">
              <div class="main-pokedots__text">
                <div class="main-pokedots__title">
                  <p><?php the_title();?></p>
                  <span>Puntos: <?php the_field('puntos_100_poke_puntos');?></span>
                </div>
              </div>
              <?php if (get_field('opcion_2_poke_puntos')): ?>
                <div class="main-pokedots__text">
                  <div class="main-pokedots__title">
                    <p><?php the_field('opcion_2_poke_puntos');?> % <?php the_title();?></p>
                    <span>Puntos: <?php the_field('puntos_opcion_2_poke_puntos');?></span>
                  </div>
                </div>
              <?php endif;?> 
            </div>
          </div>
        <?php endwhile; wp_reset_query();?>
      </div>
    </div>
    <hr class="line-gray">
    <div class="container">
      <div class="main-general__description main-general__description--requiere">
        <p>*Valido únicamente en puntos presenciales. No acumulable con otras promociones. Aplica en territorio nacional. Calculado con un ticket promedio de $ 36.000</p>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?> 
  </div>
<?php get_footer(); ?> 