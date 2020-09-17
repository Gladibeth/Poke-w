<?php get_header(); ?>
  <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
    <div class="main-work">
      <div class="container">
        <div class="main-ambiental ">
          <div class="main-pokedots__box">
            <div class="main-experience">
              <div class="form__experience">
            
                <div class="main-general__description main-general__description--amb main-general__description--work main__form">
                  <h1><?php the_title();?></h1>
                </div>
                <?php the_content();?>
              </div>
            </div>
              <!-- <div class="logo-experience">
                <div class="main-experience__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Experiencia/logo-poke-experiencia.png" alt="icono poke">
                </div>
              </div> -->
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>
<?php get_footer(); ?> 