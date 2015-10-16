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
	$lon = get_post_meta($post->ID, '_lon_meta', true);

	wp_nonce_field(__FILE__, '_lat_meta_nonce');
	wp_nonce_field(__FILE__, '_lon_meta_nonce');

	echo "<label>Latitud:</label>";
	echo "<input type='text' class='[ widefat ]' name='_lat_meta' value='$lat' />";
	echo "<label>Longitud:</label>";
	echo "<input type='text' class='[ widefat ]' name='_lon_meta' value='$lon' />";
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
		if ( isset($_POST['_lat_content_meta']) and check_admin_referer( __FILE__, '_lat_content_meta_nonce') ){
			update_post_meta($post_id, '_lat_content_meta', $_POST['_lat_content_meta']);
		}
		// Longitud
		if ( isset($_POST['_lon_content_meta']) and check_admin_referer( __FILE__, '_lon_content_meta_nonce') ){
			update_post_meta($post_id, '_lon_content_meta', $_POST['_lon_content_meta']);
		}

	}// save_metabox_coordenadas
	