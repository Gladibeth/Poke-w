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
  <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/datepicker.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/bpf1deu.css">

</head>
<body>
  <header id="home">
    <?php $url = $_SERVER["REQUEST_URI"] ?>
    <?php if (($url == '/poke/eventos/') || ($url == '/poke/escribenos/') ||  ($url == '/poke/trabaja-con-nosotros/')):?>
      <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js fixed-bc">
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
            <img  src="<?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke.svg">
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
              <a class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/menu';?>">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/nosotros';?>">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/ubicaciones';?>">Ubicaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/poke-puntos';?>">Poke puntos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/ambiental';?>">Ambiental</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-bc" href="<?php echo bloginfo('url').'/eventos';?>">Eventos</a>
            </li>
            <li class="nav-item">
              <div class="main-nav__btn">
                <div class="btn__buy">
                 <a class="btn-btn_custom btn--medium btn--filled btn--filled--buy" href="https://bnc.lt/scMl/pMH3RUMe61" target="_blank">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg">
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
              <img id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/Header/Logo-poke-white.svg">
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
              <a class="nav-link" href="<?php echo bloginfo('url').'/menu';?>">Menu</a>
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
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg">
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