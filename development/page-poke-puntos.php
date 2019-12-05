<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <?php $link = get_field('registrate_menu'); ?>
  <div class="about-banner about-banner--full" style="background-image: url('<?php the_post_thumbnail_url()?>">
    <div class="overlay"></div>
    <div class="container">
      <div class="about-banner__text mt-4">
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
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/Logo poke puntos.png">
            </div>
            <div class="about-banner__img--two">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/Logo leal.png">
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
      <div class="main-pokedots__content">
        <div class="main-pokedots__item">
          <div class="main-pokedots__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/bowl grande.png">
          </div>
          <div class="main-pokedots__boxtext">
            <div class="main-pokedots__text">
              <div class="main-pokedots__title">
                <p>POKE GRANDE</p>
                <span>Puntos: 173</span>
              </div>
            </div>
            <div class="main-pokedots__text">
              <div class="main-pokedots__title">
                <p>50% POKE GRANDE</p>
                <span>Puntos: 90</span>
              </div>
            </div>
          </div>
        </div>
        <div class="main-pokedots__item">
          <div class="main-pokedots__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/bowl mediano.png">
          </div>
          <div class="main-pokedots__boxtext">
            <div class="main-pokedots__text">
              <div class="main-pokedots__title">
                <p>POKE Mediano</p>
                <span>Puntos: 150</span>
              </div>
            </div>
            <div class="main-pokedots__text">
              <div class="main-pokedots__title">
                <p>50% POKE Mediano</p>
                <span>Puntos: 80</span>
              </div>
            </div>
          </div>
        </div>
        <div class="main-pokedots__item">
          <div class="main-pokedots__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/limonada.png">
          </div>
          <div class="main-pokedots__boxtext">
            <div class="main-pokedots__text">
              <div class="main-pokedots__title">
                <p>jugo</p>
                <span>Puntos: 33</span>
              </div>
            </div>
          </div>
        </div>
        <div class="main-pokedots__item">
          <div class="main-pokedots__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_puntos/brownie.png">
          </div>
          <div class="main-pokedots__boxtext">
            <div class="main-pokedots__text">
              <div class="main-pokedots__title">
                <p>POKE brownie</p>
                <span>Puntos: 33</span>
              </div>
            </div>
          </div>
        </div>
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
<?php get_footer(); ?> 