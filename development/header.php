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
  <header id="home" itemscope itemtype = "http://schema.org/Restaurant">
    <?php $url = $_SERVER["REQUEST_URI"] ?>
    <?php if (($url == '/eventos/') || ($url == '/escribenos/') ||  ($url == '/trabaja-con-nosotros/') ||  ($url == '/cuentanos-tu-experiencia/')):?>
      <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js fixed-bc sombra">
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
            <img  itemprop = "logo" id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke.svg" alt="logo poke">
            
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
                 <a itemprop = "url" class="btn-btn_custom btn--medium btn--filled btn--filled--buy" href="https://bnc.lt/scMl/pMH3RUMe61" target="_blank">
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
            <img  itemprop = "logo"  id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke-white.svg" alt="logo poke blanco">
            <img itemprop = "logo"  id="iso_green" alt="logo Poke" class="display_none" src="<?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke.svg">
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
              <a class="nav-link" href="<?php echo bloginfo('url').'/menu';?>">Menú</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/nosotros';?>">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/ubicaciones';?>">Ubicaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/poke-puntos';?>">Poke puntos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/ambiental';?>">Ambiental</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo bloginfo('url').'/eventos';?>">Eventos</a>
            </li>
            <li class="nav-item">
              <div class="main-nav__btn">
                <div class="btn__buy">
                  <a class="btn-btn_custom btn--medium btn--filled btn--filled--buy" href="https://bnc.lt/scMl/pMH3RUMe61" target="_blank">
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