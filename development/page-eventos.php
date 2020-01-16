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
  <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="main-event__banner--mobile d-lg-none  d-block">
    <div class="about-banner page-eventos">
    <?php if($mobile):?>
    <img itemprop = "img" src="<?php echo get_field('banner_mobile'); ?>" alt="<?php echo $alt; ?>">
    <?php else:?>
      <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>"><img itemprop="image" src="<?php the_post_thumbnail_url()?>" alt="<?php echo $alt; ?>">
    <?php endif;?>  
      <div class="overlay"></div>
      <div class="container">
        <div class="about-banner__text about-banner__text--acenter">
        <div class="main-general__title main-general__title--event">
          <?php the_content();?>
          <!--  <p class="format format--white">Déjanos tus datos, te llamaremos.</p> -->
        </div>
        </div>
      </div>
    </div>
    <div class="main-why__item">
        <?php echo do_shortcode('[contact-form-7 id="261" title="Eventos"]'); ?>
    </div>
  </div>
  <div class="main-event__banner--desktop d-none d-lg-block d-md-none">
    <div class="main-about main-about__mt">
    <div class="mask"></div>
      <div class="main-about__contentimg main-event__img-bg">
        <img src="<?php the_post_thumbnail_url()?>" alt="">
        <div class="container">
          <div class="main-why__content">
            <div class="main-why__item"></div>
            <div class="main-why__item main-why__item--event">
              <div class="main-general__title main-general__title--event">
                  <?php the_content();?>
                <!--  <p class="format format--white">Déjanos tus datos, te llamaremos.</p> -->
                </div>
              <hr class="line-gray line--white">
                <?php echo do_shortcode('[contact-form-7 id="261" title="Eventos"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?> 
<?php get_footer(); ?> 