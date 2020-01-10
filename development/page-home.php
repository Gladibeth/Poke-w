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
                  <?php if ( get_the_ID() == '52'):?>
                    <a itemprop = "url" class="btn_custom btn--large btn--filled" href="<?php echo $link_rappi;?>" target="_blank">
                      <?php echo($page['title']); ?>
                    </a>
                  <?php else:?>
                    <a itemprop = "url" class="btn_custom btn--large btn--filled" href="<?php echo($page['url']); ?>">
                      <?php echo($page['title']); ?>
                    </a>
                  <?php endif;?>
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
          <?php if($mobile):?>
            <img itemprop = "img" src="<?php echo get_field('banner_mobile'); ?>" alt="<?php echo $alt_banner_principal; ?>">
          <?php else:?>
            <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt_banner_principal; ?>">
          <?php endif;?>    
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
  <div class="main-about main-about--mobile main-about__height que-es-poke" id="que-es-poke">
    <div class="mask"></div>
    <div class="main-about__contentimg main-about__contentimg--about main-about__contentimg--why">
    <?php if($mobile):?>
      <img itemprop = "img" src="<?php echo get_template_directory_uri();?>/assets/img/Home/nuestro-compromiso.jpg" alt="Nuestro compromiso">
          <?php else:?>
            <img itemprop = "img" srcset="<?php echo get_template_directory_uri();?>/assets/img/Home/nuestro-compromiso-mobile.jpg 1024w, <?php echo get_template_directory_uri();?>/assets/img/Home/nuestro-compromiso.jpg 1920w," alt="Nuestro compromiso">
          <?php endif;?>    
      <div class="container">
        <div class="main-why__content">
          <div class="main-why__item"></div>
          <div class="main-why__item">
            <div class="main-general__title">
              <h2>nuestro </h2>
              <h2>compromiso</h2>
            </div>
            <div class="main-general__description main-general__description--font">
              <p>Alimentar el cambio para una generación sostenible.</p>
              <p>¿Por qué?</p>
              <p>Porque queremos generar consciencia, porque el cambio está en nuestras manos, porque creemos en el bienestar de nuestros equipo, nuestros clientes y el medio ambiente.</p>
              <p>Porque queremos disrumpir, reinventar y ser agentes de cambio.</p>
            </div>
            <div class="btn-box--about float-left">
            <a class="btn_custom btn--large btn--filled btn--filled--mobile" href="<?php echo bloginfo('url').'/nosotros';?>">
                Nosotros
              </a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="main-home__contentline contentline__margint">
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
  <div class="main-about main-about__height que-es-poke" id="que-es-poke">
    <div class="mask"></div>
    <div class="main-about__contentimg main-about__contentimg--why main-about__contentimg--why--mobile">
    <?php if($mobile):?>
      <img itemprop = "img" src="<?php echo get_template_directory_uri();?>/assets/img/Home/que-es-poke-mobile.jpg" alt="que es poke">
    <?php else:?>
      <img itemprop = "img" srcset="<?php echo get_template_directory_uri();?>/assets/img/Home/que-es-poke-mobile.jpg 1024w, <?php echo get_template_directory_uri();?>/assets/img/Home/que-es-poke.jpg 1920w," alt="que es poke">
    <?php endif;?>
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
      <div class="main-home__contentline contentline__margint">
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
  <script> var variableJS = "contenido de la variable javascript"; </script>