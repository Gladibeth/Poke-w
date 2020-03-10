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
?> 
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
<div id="nosotros" itemscope itemtype = "http://schema.org/Restaurant" >  
<div class="about-banner">
  <?php 
    $img_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
  ?>
  <?php if($mobile):?>
    <img itemprop = "img" src="<?php echo get_field('banner_mobile'); ?>" alt="<?php echo $alt; ?>">
  <?php else:?>
    <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>">
  <?php endif;?>  
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
          <?php
            $image_desktop = get_field('imagen_seccion_1_nosotros');
            $image_mobile = get_field('imagen_seccion_1_nosotros__mobile');
          ?>
           <?php if($mobile):?>
          <img itemprop = "img" src="<?php echo $image_mobile['url']?>" alt="<?php echo $image_mobile['alt'];?>">
        <?php else:?>
          <img itemprop = "img" srcset="<?php echo $image_mobile['url'];?> 1024w, <?php echo $image_desktop['url'];?> 1920w," alt="<?php echo $image_desktop['alt'];?>">
        <?php endif;?>  
        </div>
      </div>
      <div class="main-ourorigin__item main-ourorigin__item--top">
        <div class="container">
          <div class="main-ourorigin__box">
            <div class="main-general__title main-general__title--color right">
              <h2><?php the_field('titulo_seccion_1_nosotros');?></h2>
            </div>
            <div class="main-ourorigin__description">
              <?php the_field('descripcion_seccion_1_nosotros');?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content__img main-img__desktop">
    <?php
      $image_desktop = get_field('imagen_seccion_1_nosotros_container');
      $image_mobile = get_field('imagen_seccion_1_nosotros_container_movil');
    ?>
    <?php if($mobile):?>
      <img itemprop = "img" src="<?php echo $image_mobile['url']?>" alt="<?php echo $image_mobile['url'];?>">
    <?php else:?>
      <img itemprop = "img" srcset="<?php echo $image_mobile['url'];?> 1024w, <?php echo $image_desktop['url'];?> 1920w," alt="<?php echo $image_desktop['alt'];?>">
    <?php endif;?>  
  </div>
  <div class="main-ourorigin">
    <div class="main-ourorigin__content">
      <div class="main-ourorigin__item">
        <div class="main-ourorigin__img">
        <?php
            $image_desktop = get_field('imagen_seccion_2_nosotros');
            $image_mobile = get_field('imagen_seccion_2_nosotros__mobile');
          ?>
           <?php if($mobile):?>
          <img itemprop = "img" src="<?php echo $image_mobile['url']?>" alt="<?php echo $image_mobile['alt'];?>">
        <?php else:?>
          <img itemprop = "img" srcset="<?php echo $image_mobile['url'];?> 1024w, <?php echo $image_desktop['url'];?> 1920w," alt="<?php echo $image_desktop['alt'];?>">
        <?php endif;?>  
        </div>
      </div>
      <div class="main-ourorigin__item main-ourorigin__item--top">
        <div class="container">
          <div class="main-ourorigin__box">
            <div class="main-general__title main-general__title--color right" id="nuestra-promesa">
            <h2><?php the_field('titulo_seccion_2_nosotros');?></h2>
            </div>
            <div class="main-ourorigin__description">
              <?php the_field('descripcion_seccion_2_nosotros');?>
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
        <h3>#Pokenvironmentally</h3>
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
            <div class="main-general__title main-general__title--color title--left left">
            <h2><?php the_field('titulo_seccion_3_nosotros');?></h2>
              
            </div>
            <div class="main-ourorigin__description main-ourorigin__description--left">
              <?php the_field('descripcion_seccion_3_nosotros');?>
            </div>
          </div>
        </div>
      </div>
      <div class="main-ourorigin__item">
        <div class="main-ourorigin__img">
        <?php
            $image_desktop = get_field('imagen_seccion_3_nosotros');
            $image_mobile = get_field('imagen_seccion_3_nosotros__mobile');
          ?>
           <?php if($mobile):?>
          <img itemprop = "img" src="<?php echo $image_mobile['url']?>" alt="<?php echo $image_mobile['alt'];?>">
        <?php else:?>
          <img itemprop = "img" srcset="<?php echo $image_mobile['url'];?> 1024w, <?php echo $image_desktop['url'];?> 1920w," alt="<?php echo $image_desktop['alt'];?>">
        <?php endif;?>  
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="main-home__contentline main-home__contentline--about main-home__contentline--aboutp">
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



  <div class="main-about main-about--mobile main-about__height que-es-poke" id="que-es-poke">
    <div class="mask"></div>
    <div class="main-about__contentimg main-about__contentimg--about main-about__contentimg--why">
      <?php
        $image_desktop = get_field('imagen_seccion_4_nosotros');
        $image_mobile = get_field('imagen_seccion_4_nosotros__mobile');
      ?>
      <?php if($mobile):?>
        <img itemprop = "img" src="<?php echo $image_mobile['url']?>" alt="<?php echo $image_mobile['alt'];?>">
      <?php else:?>
        <img itemprop = "img" srcset="<?php echo $image_mobile['url'];?> 1024w, <?php echo $image_desktop['url'];?> 1920w," alt="<?php echo $image_desktop['alt'];?>">
      <?php endif;?>  
      <div class="container">
        <div class="main-why__content">
          <div class="main-why__item"></div>
          <div class="main-why__item">
            <div class="main-general__title">
              <h2><?php the_field('titulo_seccion_4_nosotros');?></h2>
            </div>
            <div class="main-general__description main-general__description--font d-none d-lg-block d-md-none">
              <?php the_field('descripcion_seccion_4_nosotros');?>
            </div>
            <div class="main-general__description main-general__description--font text-about--mobile d-lg-none d-md-block d-block">
              <?php the_field('descripcion_seccion_4_movil');?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?> 