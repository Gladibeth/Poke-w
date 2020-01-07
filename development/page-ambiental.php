<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="about-banner div-ambiental" >
    <?php 
    $img_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
  ?>
  <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>">
      <div class="overlay"></div>
      <div class="about-banner__text about-banner__text--center">
        <div class="about-banner__title">
          <h1><?php the_title();?></h1>
        </div>
      </div>
    </div>
    <div class="main-pokedots">
      <div class="container">
        <div class="main-ambiental">
          <div class="main-pokedots__box">
            <div class="main-general__description main-general__description--amb ambiental__description">
              <?php the_content();?>
            </div>
          </div>
          <div class="main-ambiental__content">
            <div class="main-ambiental__item">
              <div class="main-ambiental__boxitem">
                <div class="main-ambiental__title">
                  <span>2016:</span>
                  <p>20% Libre de plástico</p>
                </div>
                <div class="main-ambiental__smallbox">
                  <div class="main-ambiental__smallimg">
                    <img alt="imagen ambiental" src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/1.png">
                  </div>
                  <div class="main-ambiental__description">
                    <p>
                      <strong>Implementamos los peltres</strong> en todos nuestros puntos presenciales,
                      <strong>Bolsas Kraft</strong> para los domicilios y take out, reutilizables, reciclables y biodegradables.
                    </p>
                  </div>
                </div>
              </div>
              <div class="main-ambiental__boxitem main-ambiental__boxitem--top">
                <div class="main-ambiental__img">
                  <img alt="imagen ambiental" src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/arrow1.png">
                </div>
              </div>
            </div>
            <div class="main-ambiental__item main-ambiental__item--reverse">
              <div class="main-ambiental__boxitem main-ambiental__boxitem--top">
                <div class="main-ambiental__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/arrow2.png">
                </div>
              </div>
              <div class="main-ambiental__boxitem">
                <div class="main-ambiental__title">
                  <span>2017:</span>
                  <p>30% Libre de plástico</p>
                </div>
                <div class="main-ambiental__smallbox main-ambiental__smallbox--reverse">
                  <div class="main-ambiental__description">
                    <p>
                      <strong>Le decimos adios a los desechables</strong> en nuestros puntos presenciales, implementamos tenedores de metal.
                    </p>
                  </div>
                  <div class="main-ambiental__smallimg order">
                    <img alt="imagen ambiental" src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/2.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="main-ambiental__item">
              <div class="main-ambiental__boxitem">
                <div class="main-ambiental__title">
                  <span>2018:</span>
                  <p>55% Libre de plástico</p>
                </div>
                <div class="main-ambiental__smallbox">
                  <div class="main-ambiental__smallimg">
                    <img alt="imagen ambiental" src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/3.png">
                  </div>
                  <div class="main-ambiental__description">
                    <p>
                      Empezamos a usar
                      <strong>vasos de papel</strong> para los domicilios y de vidrio en los puntos presenciales.
                    </p>
                    <p>
                      Dejamos a un lado los pitillos de plástico y
                      <strong>empezamos a usar pitillos de papel, fáciles de compostar.</strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="main-ambiental__boxitem main-ambiental__boxitem--top">
                <div class="main-ambiental__img">
                  <img alt="imagen ambiental" src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/arrow1.png">
                </div>
              </div>
            </div>
            <div class="main-ambiental__item main-ambiental__item--reverse main-ambiental__item--last">
              <div class="main-ambiental__boxitem main-ambiental__boxitem--top">
              </div>
              <div class="main-ambiental__boxitem">
                <div class="main-ambiental__title">
                  <span>2019:</span>
                  <p>80% Libre de plástico</p>
                </div>
                <div class="main-ambiental__smallbox main-ambiental__smallbox--reverse">
                  <div class="main-ambiental__description main-ambiental__description--left order--one">
                    <div class="main-ambiental__title main-ambiental__mintitle">
                      <p>marzo: 60% Libre de plástico</p>
                    </div>
                    <p>
                      <strong>Le decimos adios a los desechables</strong> en nuestros puntos presenciales, implementamos tenedores de metal.
                    </p>
                  </div>
                  <div class="main-ambiental__smallimg order order--two">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/4.png">
                  </div>
                  <div class="main-ambiental__description main-ambiental__description--left order order--three">
                    <div class="main-ambiental__title main-ambiental__mintitle">
                      <p>junio: 75% Libre de plástico</p>
                    </div>
                    <p>
                      <strong>Cambiamos el plástico por vidrio</strong> para todas nuestras botellas, tanto en domicilios como en puntos presenciales.
                    </p>
                  </div>
                  <div class="main-ambiental__smallimg order order--four">
                    <img alt="imagen ambiental" src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/5.png">
                  </div>
                  <div class="main-ambiental__description main-ambiental__description--left order order--five">
                    <div class="main-ambiental__title main-ambiental__mintitle">
                      <p>Agosto: 80% Libre de plástico</p>
                    </div>
                    <p>
                      Seguimos avanzando. p
                      <strong>Cambiamos nuestros empaques por empaques Kraft y con tapa PET, reciclables</strong> ara todos los domicilios / Take Outs.
                    </p>
                  </div>
                  <div class="main-ambiental__smallimg order order--six">
                    <img alt="imagen ambiental" src="<?php echo get_template_directory_uri();?>/assets/img/Ambiental/6.png">
                  </div>
                  <div class="main-ambiental__description main-ambiental__description--left order order--seven">
                    <div class="main-ambiental__title main-ambiental__mintitle">
                      <p>2020...coming soon</p>
                    </div>
                    <p>
                      Seguimos trabajando en nuestra campaña de reciclaje, próximamente te contaremos.
                    </p>
                  </div>
                  <div class="main-ambiental__smallimg"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-ambiental">
          <div class="main-pokedots__box">
            <div class="main-general__description main-general__description--amb ambiental__description">
              <p>Continuamos trabajando en disminuir el uso de plástico,</p> 
              <p>queremos contribuir con el cuidado del medio ambiente...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?> 
<?php get_footer(); ?> 