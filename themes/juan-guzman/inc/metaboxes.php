<?php

/*------------------------------------*\
	CUSTOM METABOXES
\*------------------------------------*/

add_action('add_meta_boxes', function(){
	global $post;
	switch ( $post->post_name ) {
		case 'PAGENAME':
			//add_metaboxes_PAGENAE();
			break;
		default:
			// POST TYPES
			add_metaboxes_map_test();
	}
});


/*------------------------------------*\
	CUSTOM METABOXES FUNCTIONS
\*------------------------------------*/

/**
* Add metaboxes for page type "Contacto"
**/
function add_metaboxes_map_test(){
	add_meta_box( 'coordenadas', 'Coordenadas', 'metabox_coordenadas', 'prueba-mapas', 'advanced', 'high' );
}// add_metaboxes_PAGE





/*-----------------------------------------*\
	CUSTOM METABOXES CALLBACK FUNCTIONS
\*-----------------------------------------*/
	
/**
* Display metabox in page or post type
**/
function metabox_coordenadas($post){
	$lat = get_post_meta($post->ID, '_lat_meta', true);
	$lng = get_post_meta($post->ID, '_lng_meta', true);

	wp_nonce_field(__FILE__, '_lat_meta_nonce');
	wp_nonce_field(__FILE__, '_lng_meta_nonce');

	echo "<label>Latitud:</label>";
	echo "<input type='text' class='[ widefat ]' name='_lat_meta' value='$lat' />";
	echo "<label>Longitud:</label>";
	echo "<input type='text' class='[ widefat ]' name='_lng_meta' value='$lng' />";
}// metabox_coordenadas

	



/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

	add_action('save_post', function( $post_id ){

		save_metabox_coordenadas( $post_id );
		
	});

	/**
	* Save the metaboxes for post type "Productos"
	**/
	function save_metabox_coordenadas( $post_id ){
		
		// Latitud
		if ( isset($_POST['_lat_meta']) and check_admin_referer( __FILE__, '_lat_meta_nonce') ){
			update_post_meta($post_id, '_lat_meta', $_POST['_lat_meta']);
		}
		// Longitud
		if ( isset($_POST['_lng_meta']) and check_admin_referer( __FILE__, '_lng_meta_nonce') ){
			update_post_meta($post_id, '_lng_meta', $_POST['_lng_meta']);
		}

	}// save_metabox_coordenadas
	