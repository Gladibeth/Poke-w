<?php
/*
Plugin Name: CPT Ubicacion
Plugin URI:
Description: Realizado por: Renny petit
Version:
Author:
Author URI:
License:
License URI:
*/
if ( ! function_exists('ubicacion') ) {

// Register Custom Post Type
function ubicacion() {

	$labels = array(
		'name'                  => _x( 'ubicación', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'ubicación', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Ubicación', 'text_domain' ),
		'name_admin_bar'        => __( 'Ubicación', 'text_domain' ),
		'archives'              => __( 'Archivos de Ubicación', 'text_domain' ),
		'attributes'            => __( 'Atributos de Ubicación', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de Ubicación', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo Ubicación', 'text_domain' ),
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
		'insert_into_item'      => __( 'Insertar en Ubicacionesubicacion', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Ubicacionesubicacion', 'text_domain' ),
		'items_list'            => __( 'Listado de Ubicacionesubicacion', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de Ubicacionesubicacion', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de Ubicacionesubicacion', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'ubicacionesubicacion', 'text_domain' ),
		'description'           => __( 'ubicacion', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor','thumbnail'),
		'taxonomies'            => array( 'ciudad'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-admin-site',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ubicacion', $args );

}
add_action( 'init', 'ubicacion', 0 );

}

//Register Custom Taxonomy
function ciudad() {

	$labels = array(
		'name'                       => _x( 'Ciudad', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'ciudad', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Ciudad', 'text_domain' ),
		'all_items'                  => __( 'Todos los ciudad', 'text_domain' ),
		'parent_item'                => __( 'ciudad Padre', 'text_domain' ),
		'parent_item_colon'          => __( 'ciudad:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva ciudad', 'text_domain' ),
		'add_new_item'               => __( 'Añadir Nueva ciudad', 'text_domain' ),
		'edit_item'                  => __( 'Editar ciudad', 'text_domain' ),
		'update_item'                => __( 'Actualizar ciudad', 'text_domain' ),
		'view_item'                  => __( 'Ver ciudad', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o Remover ciudad', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'ciudad Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar ciudad', 'text_domain' ),
		'not_found'                  => __( 'No Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Lista de ciudad', 'text_domain' ),
		'items_list_navigation'      => __( 'Listado Navegable de ciudad', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ciudad', array( 'ubicacion' ), $args );

}
add_action( 'init', 'ciudad', 0 );
