<?php

/**
* Here we add all the javascript that needs to be run on the footer.
**/
function footer_scripts(){
	global $post;

	if( wp_script_is( 'functions', 'done' ) ) :

?>
		<script type="text/javascript">

			/*------------------------------------*\
				#GLOBAL
			\*------------------------------------*/

			/**
			 * On load
			**/

			/**
			 * Triggered events
			**/

			<?php if( is_archive() ) : ?>

				addAllMarkers();

			<?php endif; ?>



			<?php if( is_single() ) : ?>

				// Pasar a función
				var lat = <?php echo get_lat( get_the_ID() ); ?>;
				var lng = <?php echo get_lng( get_the_ID() ); ?>;
				var mapa = createEmptyMap();
				var markers = [ createMarker( mapa, lat, lng ) ];
				autoCenter( mapa, markers );
				displayStreetViewImage( '.street-view-img', lat, lng, 600, 300 );

			<?php endif; ?>
		</script>
<?php
	endif;
}// footer_scripts
?>