<?php


/*------------------------------------*\
	CUSTOM PAGES
\*------------------------------------*/

add_action('init', function(){

	// HOME
	if( ! get_page_by_path('mapa') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'mapa',
			'post_name'   => 'mapa',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	
});
