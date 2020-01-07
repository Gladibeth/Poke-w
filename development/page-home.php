<?php get_header(); ?>
<div class="main-banner">
    <div class="main-banner__content">
    <?php
      $args = array(
      'post_type' => 'slider',
      'showposts'=> 5,
      'post_status' => 'publish',
      'order' => 'ASC'
      );
      $loop = new WP_Query( $args );
    ?>
    <?php while( $loop->have_posts() ) : $loop->the_post();?>
      <div class="main-banner__item" itemscope itemtype = "http://schema.org/Restaurant">
        <div class="mask2">
          <div class="container">
            <div class="main-banner__boxtext">
              <div class="main-banner__text">
                <div class="main-banner__title" itemprop = "description">
                  <?php the_content();?>
                </div>
                <div class="btn-box">
                  <?php $page = get_field('pagina'); ?>
                  <a itemprop = "url" class="btn_custom btn--large btn--filled" href="<?php echo($page['url']); ?>">
                    <?php echo($page['title']); ?>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <?php 
            $img_id = get_post_thumbnail_id(get_the_ID());
            $alt_banner_principal = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
          ?>
          <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt_banner_principal; ?>">
          
        </div>
      </div>
    <?php endwhile; wp_reset_query();?>
    </div>
  </div>
  <div class="">
    <div class="main-home__contentline">
      <div class="main-home__item">
        <div class="main-home__line main-home__line--first"></div>
      </div>
      <div class="main-home__item">
        <div class="main-general__subtitle">
          <h3>eat better, feel better</h3>
        </div>
      </div>
      <div class="main-home__item">
        <div class="main-home__line main-home__line--last"></div>
      </div>
    </div>
  </div>
  <div class="main-about">
    <div class="main-about__contentimg">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/nuestro-compromiso.jpg" alt="Nuestro compromiso">
      <div class="container">
        <div class="main-about__content">
          <div class="main-about__item">
            <div class="main-general__title">
              <h2>nuestro </h2>
              <h2>compromiso</h2>
            </div>
            <div class="main-general__description">
              <p>Alimentar el cambio para una generación sostenible.</p>
              <p>¿Por qué?</p>
              <p>Porque queremos generar consciencia, porque el cambio está en nuestras manos, porque creemos en el bienestar de nuestros equipo, nuestros clientes y el medio ambiente.</p>
              <p>Porque queremos disrumpir, reinventar y ser agentes de cambio.</p>
            </div>
            <div class="btn-box--about float-left">
              <a class="btn_custom btn--large btn--filled" href="<?php echo bloginfo('url').'/nosotros';?>">
                  Nosotros
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="main-home__contentline">
      <div class="main-home__item">
        <div class="main-home__line main-home__line--first"></div>
      </div>
      <div class="main-home__item">
        <div class="main-general__subtitle">
          <h3>Look Good Naked</h3>
        </div>
      </div>
      <div class="main-home__item">
        <div class="main-home__line main-home__line--last"></div>
      </div>
    </div>
  </div>
  <div class="main-about main-about__height" id="que-es-poke">
    <div class="mask"></div>
    <div class="main-about__contentimg main-about__contentimg--why">
    <img itemprop = "img" srcset="<?php echo get_template_directory_uri();?>/assets/img/Home/que-es-poke-mobile.jpg 1024w, <?php echo get_template_directory_uri();?>/assets/img/Home/que-es-poke.jpg 1920w," alt="que es poke">
      <div class="container">
        <div class="main-why__content">
          <div class="main-why__item"></div>
          <div class="main-why__item">
            <div class="main-general__title main-general__title--font">
              <h2>¿Qué es</h2>
              <h2>poke?</h2>
            </div>
            <div class="main-general__description main-general__description--font">
              <br>
              <p>Poke significa “cortar” en hawaiano.</p>
              <p>Su significado le da vida a un plato típico de la gastronomía de Hawaii.</p>
              <p>El poke es una combinación saludable de pescado fresco, sobre arroz de sushi, y una enorme variedad de toppings y salsas de autor.</p>
              <p>Nuestra filosofía culinaria se centra en utilizar productos locales, siempre frescos y pescado sostenible de la más alta calidad. Combinamos de forma novedosa ingredientes nutritivos con lo mejor de la pesca del Pacífico y sabores asiáticos
                que provienen de Japón.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="main-follow">
    <div class="">
      <div class="main-home__contentline">
        <div class="main-home__item">
          <div class="main-home__line main-home__line--first"></div>
        </div>
        <div class="main-home__item">
          <div class="main-general__boxsubtitle">
            <div class="main-general__subtitle">
              <h3>if you dig us, like us</h3>
            </div>
            <div class="main-general__subtitle--medium">
              <h4>Follow us</h4>
            </div>
          </div>
        </div>
        <div class="main-home__item">
          <div class="main-home__line main-home__line--last"></div>
        </div>
      </div>
    </div>
    <?php echo do_shortcode('[instagram-feed showheader=false showbutton=false showfollow=false]'); ?>
<?php get_footer(); ?> 