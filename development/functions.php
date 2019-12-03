<?php 
// Fija el tamaño del texto del excerpt
  function tamano__excerpt( $length ) { return 20;}
  add_filter( 'excerpt_length', 'tamano__excerpt', 20 );

// Fija el contenido del exceprt eliminando [...]
  function final__texto__excerpt( $more ) { return ''; }
  add_filter('excerpt_more', 'final__texto__excerpt' );


//insertar imagen destacada en el post
  add_theme_support( 'post-thumbnails' );