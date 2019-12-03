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
      <div class="main-banner__item">
        <div class="mask">
          <div class="container">
            <div class="main-banner__boxtext">
              <div class="main-banner__text">
                <div class="main-banner__title">
                  <?php the_content();?>
                </div>
                <div class="btn-box">
                  <?php $page = get_field('pagina'); ?>
                  <a class="btn_custom btn--large btn--filled" href="<?php echo($page['url']); ?>">
                    <?php echo($page['title']); ?>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <img src="<?php echo the_post_thumbnail_url(); ?>">
        </div>
      </div>
    <?php endwhile; wp_reset_query();?>
    </div>
  </div>
  <div class="container">
    <div class="main-general__boxsubtitle">
      <div class="main-general__subtitle">
        <h3>eat better, feel better</h3>
      </div>
    </div>
  </div>
  <div class="main-about" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/Home/--75.png');">
    <div class="container">
      <div class="main-about__content">
        <div class="main-about__item">
          <div class="main-general__title">
            <h2>nuestro compromiso</h2>
          </div>
          <div class="main-general__description">
            <p>Alimentar el cambio para una generación sostenible.</p>
            <p>¿Por qué?</p>
            <p>Porque queremos generar consciencia, porque el cambio está en nuestras manos, porque creemos en el bienestar de nuestros equipo, nuestros clientes y el medio ambiente.</p>
            <p>Porque queremos disrumpir, reinventar y ser agentes de cambio.</p>
          </div>
          <div class="btn-box--about float-left">
            <a class="btn_custom btn--large btn--filled" href="about.html">
                Nosotros
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="main-general__boxsubtitle">
      <div class="main-general__subtitle">
        <h3>eat better, feel better</h3>
      </div>
    </div>
  </div>
  <div class="main-about main-about__height" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/Home/POKE_-245.png');">
    <div class="mask"></div>
    <div class="container">
      <div class="main-why__content">
        <div class="main-why__item"></div>
        <div class="main-why__item">
          <div class="main-general__title main-general__title--font">
            <h2>¿Qué es poke?</h2>
          </div>
          <div class="main-general__description main-general__description--font">
            <p>Poke significa “cortar” en hawaiano. Su significado le da vida a un plato típico de la gastronomía de Hawaii.</p>
            <p>El poke es una combinación saludable de pescado fresco, sobre arroz de sushi, y una enorme variedad de toppings y salsas de autor.</p>
            <p>Nuestra filosofía culinaria se centra en utilizar productos locales, siempre frescos y pescado sostenible de la más alta calidad. Combinamos de forma novedosa ingredientes nutritivos con lo mejor de la pesca del Pacífico y sabores asiáticos
              que provienen de Japón.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-follow">
    <div class="container">
      <div class="main-general__boxsubtitle">
        <div class="main-general__subtitle">
          <h3>if you dig us, like us</h3>
        </div>
        <div class="main-general__subtitle--medium">
          <h4>Follow us</h4>
        </div>
      </div>
    </div>
    <div class="main-follow__content">
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/1.png">
        </div>
      </div>
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/2.png">
        </div>
      </div>
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/3.png">
        </div>
      </div>
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/4.png">
        </div>
      </div>
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/5.png">
        </div>
      </div>
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/6.png">
        </div>
      </div>
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/7.png">
        </div>
      </div>
      <div class="main-follow__item">
        <div class="main-follow__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/8.png">
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?> 