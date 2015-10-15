<?php

/*------------------------------------*\
	CUSTOM POST TYPES
\*------------------------------------*/

add_action('init', function(){

	// MAP TEST
	$labels = array(
		'name'          => 'Prueba mapas',
		'singular_name' => 'Prueba mapas',
		'add_new'       => 'Nuevo prueba',
		'add_new_item'  => 'Nuevo prueba',
		'edit_item'     => 'Editar prueba',
		'new_item'      => 'Nuevo prueba',
		'all_items'     => 'Todas',
		'view_item'     => 'Ver prueba',
		'search_items'  => 'Buscar pruebas',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Prueba mapas'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'prueba-mapas' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'prueba-mapas', $args );

});