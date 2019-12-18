<?php get_header(); ?>
  <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="main-about main-about__mt" style="background-image: url('<?php the_post_thumbnail_url()?>');">
  <div class="mask"></div>
    <div class="container">
      <div class="main-why__content">
        <div class="main-why__item"></div>
        <div class="main-why__item main-why__item--event">
          <div class="main-general__title main-general__title--event">
              <?php the_content();?>
             <!--  <p class="format format--white">Déjanos tus datos, te llamaremos.</p> -->
             </div>
          <hr class="line-gray line--white">
            <?php echo do_shortcode('[contact-form-7 id="247" title="Eventos"]'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?> 
<?php get_footer(); ?> 