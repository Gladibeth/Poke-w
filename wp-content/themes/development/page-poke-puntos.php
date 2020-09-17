<?php get_header(); ?>
<?php
$desktop = false;
$mobile = false;
$tablet_browser = 0;
$mobile_browser = 0;
$body_class = 'desktop';
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
    $body_class = "tablet";
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
    $body_class = "mobile";
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
    $body_class = "mobile";
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
if ($tablet_browser > 0) {
  $mobile = true;
}
else if ($mobile_browser > 0) {
$mobile = true;
}
else {
  $desktop = true;
}  

  if ($mobile){
    $link_rappi = 'https://bnc.lt/scMl/pMH3RUMe61';
  }else{
    $link_rappi = 'https://www.rappi.com.co/restaurantes/poke-cocina-0';
  }
?> 
<div itemscope itemtype = "http://schema.org/Restaurant" >
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <?php $link = get_field('registrate_menu'); ?>
  <div class="about-banner about-banner--full" id="poke-puntos">
    <?php 
      $img_id = get_post_thumbnail_id(get_the_ID());
      $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
    ?>
    <?php if($mobile):?>
    <img itemprop = "img" src="<?php echo get_field('banner_mobile'); ?>" alt="<?php echo $alt; ?>">
    <?php else:?>
      <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>"><img itemprop="image" src="<?php the_post_thumbnail_url()?>" alt="<?php echo $alt; ?>">
    <?php endif;?>  
    <div class="overlay"></div>
    <div class="container">
      <div class="about-banner__text about-banner__text--top mt-4">
        <div class="about-banner__title">
          <?php the_content();?>
        </div>
        <div class="btn-box btn-box--resgister">
          <a class="btn_custom btn--large btn--filled" target="_blank" href="<?php echo($link['url']); ?>">
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
  <div class="main-pokedots"  id="poke-puntos-content">
    <div class="container">
      <div class="main-pokedots__box">
        <div class="main-general__title main-general__title--dots">
          <h1>poke puntos</h1>
        </div>
        <div class="main-general__description main-general__description--dots">
          <p>Acumula y redime visitando nuestros puntos presenciales. Por cada $ 1.500 recibes 1 punto. No válido en domicilios.</p>
        </div>
      </div>
    </div>
    <hr class="line-gray">
  </div>
  <div class="main-pokedots padd-top" id="poke-puntos-premios">
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
                  <p>Con <?php the_field('puntos_100_poke_puntos');?> Puntos:</p>
                  <span>Redimes un <?php the_title();?></span>
                </div>
              </div>
              <?php if (get_field('opcion_2_poke_puntos')): ?>
                <div class="main-pokedots__text">
                  <div class="main-pokedots__title">
                    <p>Con <?php the_field('puntos_opcion_2_poke_puntos');?> Puntos:</p>
                    <span>Recibe el <?php the_field('opcion_2_poke_puntos');?> % de descuento en un <?php the_title();?></span>
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