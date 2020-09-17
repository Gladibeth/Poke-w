<?php get_header(); ?>
  <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="main-work">
      <div class="container">
        <div class="main-ambiental--fep">
          <div class="main-pokedots__box--fep">
            <div class="main-experience fep">
              <div class="form__experience">
                  <div class="container--fep">
                      <div class="main-general__description--fep main-general__description--amb main-general__description--work main__form">
                        <?php the_content();?>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="container__img--fep">
              <div class="container">
                <div class="row">
                <div class="img__fep">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/fep/imagen-1.svg" alt="Imagen 1">
              </div>
              <div class="img__fep">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/fep/imagen-2.svg" alt="Imagen 2">
              </div>
              <div class="img__fep">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/fep/imagen-estereo-picnic.svg" alt="Imagen picnic">
              </div>
              <div class="img__fep">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/fep/imagen-3.svg" alt="Imagen 4">
              </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
<?php get_footer();?> 