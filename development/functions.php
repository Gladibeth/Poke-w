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