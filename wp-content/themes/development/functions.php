<?php 
// Fija el tamaño del texto del excerpt
  function tamano__excerpt( $length ) { return 20;}
  add_filter( 'excerpt_length', 'tamano__excerpt', 20 );

// Fija el contenido del exceprt eliminando [...]
  function final__texto__excerpt( $more ) { return ''; }
  add_filter('excerpt_more', 'final__texto__excerpt' );


//insertar imagen destacada en el post
  add_theme_support( 'post-thumbnails' );

//redimencionando las imágenes
add_image_size( '480', 480, false);
add_image_size( '768', 480, false);
add_image_size( '1024', 480, false);
add_image_size( '1280', 480, false);
add_image_size( '1600', 480, false);
//end redimención de imágenes


//++++++++++++++++++++++++++++++++++++registrar sidebar
if(function_exists('register_sidebar')) {
  
  register_sidebar(array(
    'name'          => 'Footer columna 1',
    'id'            => 'footer-1',
    'description' => 'Columna 1',

  ));

  register_sidebar(array(
    'name'          => 'Footer columna 2',
    'id'            => 'footer-2',
    'description' => 'Columna 2',

  ));
  register_sidebar(array(
    'name'          => 'Footer columna 3',
    'id'            => 'footer-3',
    'description' => 'Listado footer 3',
    'before_title'  => "<div class='main-footer__title'><p>",
    'after_title'   => '</p></div>',

  ));
  register_sidebar(array(
    'name'          => 'Footer Redes sociales',
    'id'            => 'footer-redes-sociales',
    'description' => 'Listado redes sociales',
    'before_title'  => "<div class='main-footer__title'><p>",
    'after_title'   => '</p></div>',

  ));

  register_sidebar(array(
    'name'          => 'Footer email',
    'id'            => 'footer-email',
    'description' => 'email',

  ));

  register_sidebar(array(
    'name'          => 'Footer copyright',
    'id'            => 'footer-copyright',
    'description' => 'copyright',

  ));

};
//+++++++++++++++++++++++++++++++++++ end siderbar



//colocar logo en el login de wordpress
  function wprin_my_logo_on_login() {
    // Pon el path a tu imagen.
    $image = get_template_directory_uri().'/assets/img/Header/Logo-poke.svg';
    echo '<style type="text/css">h1 a { background-image:url(' . $image . ') !important; content/themes/theme/assets/img/Header/Logo-poke.svg) !important;background-size: auto !important;background-position: center !important;width: 100% !important;
  }</style>';
  }//end wprin_my_logo_on_login()
  add_action( 'login_head', 'wprin_my_logo_on_login' );
//end logo login de wordpress


//modificar el admin del footer de wordpress
  function wprin_custom_text_in_footer_admin() {
    return 'Realizado por: Si Señor Agencia';
  }//end wprin_custom_text_in_footer_admin()
  add_action( 'admin_footer_text', 'wprin_custom_text_in_footer_admin' );
// end footer admin de wordpres