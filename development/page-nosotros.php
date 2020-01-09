<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
<div id="nosotros" itemscope itemtype = "http://schema.org/Restaurant" >  
<div class="about-banner">
  <?php 
    $img_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
  ?>
  <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>">
  
    <div class="overlay"></div>
    <div class="container">
      <div class="about-banner__text about-banner__text--acenter">
        <div class="about-banner__title">
          <?php the_content();?>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="main-home__contentline main-home__contentline--about">
      <div class="main-home__item">
        <div class="main-home__line main-home__line--first"></div>
      </div>
      <div class="main-home__item">
        <div class="main-general__subtitle">
          <h3>keep it fresh</h3>
        </div>
      </div>
      <div class="main-home__item">
        <div class="main-home__line main-home__line--last"></div>
      </div>
    </div>
  </div>

  <div class="main-ourorigin">
    <div class="main-ourorigin__content">
      <div class="main-ourorigin__item">
        <div class="main-ourorigin__img">
          <img itemprop = "img" srcset="<?php echo get_template_directory_uri();?>/assets/img/About/nuestro-origen-mobile.jpg 1024w, <?php echo get_template_directory_uri();?>/assets/img/About/nuestro-origen.jpg 1920w," alt="Nuestro origen">
        </div>
      </div>
      <div class="main-ourorigin__item main-ourorigin__item--top">
        <div class="container">
          <div class="main-ourorigin__box">
            <div class="main-general__title main-general__title--color">
              <h2>nuestro </h2>
              <h2>origen</h2>
            </div>
            <div class="main-ourorigin__description">
              <p>Poke nace como el proyecto de una pareja emprendedora, amantes de la gastronomía, y apasionados por generar experiencias memorables.</p>
              <p>En Agosto de 2016 abren las puertas de su primer restaurante. Con esfuerzo y perseverancia pronto se posicionó como la primera cadena de restaurantes "healthy, fast-casual" en Colombia.</p>
              <p>Con un anhelo de ser la generación del cambio, Poke busca promover una cultura de alimentación consciente, siendo sostenibles con el medio ambiente y generando impacto social.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content__img main-img__desktop">
    <img itemprop = "img" srcset="<?php echo get_template_directory_uri();?>/assets/img/About/nosotros-grande-mobile.jpg 1024w, <?php echo get_template_directory_uri();?>/assets/img/About/nosotros-grande.jpg 1920w," alt="Nosotros">
  </div>
  <div class="main-ourorigin">
    <div class="main-ourorigin__content">
      <div class="main-ourorigin__item">
        <div class="main-ourorigin__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/About/nuestra-promesa.jpg" alt="Nuestra promesa">
        </div>
      </div>
      <div class="main-ourorigin__item main-ourorigin__item--top">
        <div class="container">
          <div class="main-ourorigin__box">
            <div class="main-general__title main-general__title--color" id="nuestra-promesa">
              <h2>nuestra </h2>
              <h2>PROMESA</h2>
            </div>
            <div class="main-ourorigin__description">
              <p>Nuestros ingredientes son frescos, toda nuestra materia prima llega a diario a nuestros restaurantes, para asegurar la más alta calidad.</p>
              <p>Las recetas y preparaciones se realizan todos los días en nuestras cocinas. Los cortes y procesos se hacen de manera artesanal por nuestro equipo. Ningún producto contiene aditivos, preservantes, o colorantes.</p>
              <p>En Poke trabajamos de la mano de nuestros aliados y proveedores locales, en busca de ofrecer los mejores ingredientes para cada preparación.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-content__img main-img__mobile">
    <img src="<?php echo get_template_directory_uri();?>/assets/img/About/nuestros-valores.jpg" alt="Nuestros valores">
  </div>
  <div class="">
    <div class="main-home__contentline main-home__contentline--about">
      <div class="main-home__item">
        <div class="main-home__line main-home__line--first"></div>
      </div>
      <div class="main-home__item">
        <div class="main-general__subtitle">
        <h3>Pokenvironmentally</h3>
        </div>
      </div>
      <div class="main-home__item">
        <div class="main-home__line main-home__line--last"></div>
      </div>
    </div>
  </div>
  <div class="main-ourorigin">
    <div class="main-ourorigin__content">
      <div class="main-ourorigin__item main-ourorigin__item--top">
        <div class="container">
          <div class="main-ourorigin__box main-ourorigin__box--ml">
            <div class="main-general__title main-general__title--color title--left">
              <h2>nuestros </h2>
              <h2>valores</h2>
            </div>
            <div class="main-ourorigin__description main-ourorigin__description--left">
              <p>En Poke creemos en la <strong>Excelencia</strong>, en retar los estándares de la industria para lograr una oferta diferenciada y el mejor servicio. Aprendemos de nuestros errores, trabajamos en equipo y estamos comprometidos con la mejora continua.</p>
              <p>Tenemos <strong>pasión</strong> por lo que hacemos, esto se refleja en el entusiasmo y energía de todo el equipo. Estamos <strong>comprometidos</strong> en pensar en grande, dar la mejor actitud y trabajar hacia un objetivo común.</p>
              <p>En Poke empoderamos a nuestro talento para que sean <strong>creativos</strong>. Todas las ideas son bienvenidos y valoradas. Creemos en formar equipos diversos basados en una cultura de puertas abiertas y respeto.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="main-ourorigin__item">
        <div class="main-ourorigin__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/About/nuestros-valores.jpg" alt="Nuestros valores">
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="main-home__contentline main-home__contentline--about">
      <div class="main-home__item">
        <div class="main-home__line main-home__line--first"></div>
      </div>
      <div class="main-home__item">
        <div class="main-general__subtitle">
        <h3>food evolution</h3>
        </div>
      </div>
      <div class="main-home__item">
        <div class="main-home__line main-home__line--last"></div>
      </div>
    </div>
  </div>



  <div class="main-about main-about__height que-es-poke" id="que-es-poke">
    <div class="mask"></div>
    <div class="main-about__contentimg main-about__contentimg--about main-about__contentimg--why">
    <img itemprop = "img" srcset="<?php echo get_template_directory_uri();?>//assets/img/About/nuestro-talento.jpg 1024w, <?php echo get_template_directory_uri();?>/assets/img/About/nuestro-talento.jpg 1920w," alt="Nuestro talento">
      <div class="container">
        <div class="main-why__content">
          <div class="main-why__item"></div>
          <div class="main-why__item">
            <div class="main-general__title">
              <h2>nuestro </h2>
              <h2>talento</h2>
            </div>
            <div class="main-general__description main-general__description--font">
              <p>Nuestro talento es jovial,</p>
              <p>Nuestro talento es diverso,</p>
              <p>Nuestro talento es determinado,</p>
              <p>Nuestro talento es responsable,</p>
              <p>Nuestro talento es empoderado,</p>
              <p>Nuestro talento es apasionado.</p>
              <strong>Nuestro talento es nuestro recurso más valioso.</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?> 