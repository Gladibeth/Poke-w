<?php
/*
Plugin Name: CPT Poke Bowl
Plugin URI:
Description: Realizado por: Renny petit
Version:
Author:
Author URI:
License:
License URI:
*/
if ( ! function_exists('poke_bowls') ) {

// Register Custom Post Type
function poke_bowls() {

	$labels = array(
		'name'                  => _x( 'poke bowls', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'poke bowls', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'poke bowls', 'text_domain' ),
		'name_admin_bar'        => __( 'poke bowls', 'text_domain' ),
		'archives'              => __( 'Archivos de Poke Bowls', 'text_domain' ),
		'attributes'            => __( 'Atributos de Poke Bowls', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de Poke Bowls', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo Destino', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver Todos', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Poke Bowls', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Poke Bowls', 'text_domain' ),
		'items_list'            => __( 'Listado de Poke Bowls', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de Poke Bowls', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de Poke Bowls', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'poke bowls', 'text_domain' ),
		'description'           => __( 'poke bowls', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor','thumbnail'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'poke_bowls', $args );

}
add_action( 'init', 'poke_bowls', 0 );

}