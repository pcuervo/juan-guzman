<?php


/*------------------------------------*\
	CUSTOM PAGES
\*------------------------------------*/

add_action('init', function(){


	// HOME
	if( ! get_page_by_path('escaner') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'escaner',
			'post_name'   => 'escaner',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

});
