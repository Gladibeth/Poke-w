<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php echo bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php wp_head(); ?>
    <title>Poke</title>
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
</head>
<body>
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
  <header id="home" itemscope itemtype = "http://schema.org/Restaurant">
    <?php $url = $_SERVER["REQUEST_URI"] ?>
    <?php if (($url == '/eventos/') || ($url == '/escribenos/') ||  ($url == '/trabaja-con-nosotros/') ||  ($url == '/cuentanos-tu-experiencia/')):?>
      <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js fixed-bc sombra">
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
            <img  itemprop = "logo" id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke.svg" alt="logo poke" class="active"> 
          </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner color-black"></span>
              </span>
            </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="nav-item active">
              <a itemprop = "url" class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/menu';?>">Menú</a>
            </li>
            <li class="nav-item">
              <a itemprop = "url" class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/nosotros';?>">Nosotros</a>
            </li>
            <li class="nav-item">
              <a itemprop = "url" class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/ubicaciones';?>">Ubicaciones</a>
            </li>
            <li class="nav-item">
              <a itemprop = "url" class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/poke-puntos';?>">Poke puntos</a>
            </li>
            <li class="nav-item">
              <a itemprop = "url" class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/ambiental';?>">Ambiental</a>
            </li>
            <li class="nav-item">
              <a itemprop = "url" class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/eventos';?>">Eventos</a>
            </li>
            <li class="nav-item">
              <div class="main-nav__btn">
                <div class="btn__buy">
                 <a itemprop = "url" class="btn-btn_custom btn--medium btn--filled btn--filled--buy" href="<?php echo $link_rappi;?>" target="_blank">
                      <img itemprop = "logo" src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg" alt="logo Rappi">
                      <span class="line"></span>
                      Pide en línea
                    </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php else:?>
      <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
            <img itemprop = "logo"  id="iso" alt="logo Poke" src="<?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke.svg">
            <!-- <img  itemprop = "logo"  id="iso" src="< ?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke-white.svg" alt="logo poke blanco">
            <img itemprop = "logo"  id="iso_green" alt="logo Poke" class="display_none" src="< ?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke.svg"> -->
            </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo bloginfo('url').'/poke/menu';?>">Menú</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/poke/nosotros';?>">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/poke/ubicaciones';?>">Ubicaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/poke/poke-puntos';?>">Poke puntos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/poke/ambiental';?>">Ambiental</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/poke/eventos';?>">Eventos</a>
            </li>
            <li class="nav-item">
              <div class="main-nav__btn">
                <div class="btn__buy">
                  <a class="btn-btn_custom btn--medium btn--filled btn--filled--buy" href="<?php echo $link_rappi;?>" target="_blank">
                      <img itemprop = "logo"  src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg" alt="logo rappi">
                      <span class="line"></span>
                      Pide en línea
                    </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php endif;?>
  </header>
