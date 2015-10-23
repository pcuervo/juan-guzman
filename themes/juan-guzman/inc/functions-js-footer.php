<?php

/**
* Here we add all the javascript that needs to be run on the footer.
**/
function footer_scripts(){
	global $post;

	if( wp_script_is( 'functions', 'done' ) ) :

?>
		<script type="text/javascript">


			<?php if( is_home() ) : ?>
				/*------------------------------------*\
					#HOME
				\*------------------------------------*/

				toggleElementOnSscroll( $('header'), '.hero__text');
				toggleElementOnSscroll( $('.image-bg--hero'), '.btn--map--float');

				$(window).scroll(function(){
					toggleElementOnSscroll( $('header'), '.hero__text');
					toggleElementOnSscroll( $('.image-bg--hero'), '.btn--map--float');
				});

			<?php endif; ?>

			<?php if( is_archive() ) : ?>
				/*------------------------------------*\
					#MAP
				\*------------------------------------*/

				addAllMarkers();

			<?php endif; ?>


			<?php if( is_single() ) : ?>
				/*------------------------------------*\
					#SINGLE
				\*------------------------------------*/

				// Pasar a función
				var lat = <?php echo get_lat( get_the_ID() ); ?>;
				var lng = <?php echo get_lng( get_the_ID() ); ?>;
				var decada = <?php echo get_decada( get_the_ID() ); ?>;
				var isAerial = <?php echo get_vista_aerea( get_the_ID() ) ?>;
				var heading = <?php echo get_heading( get_the_ID() ) ?>;
				console.log( decada );

				showSingleMap( lat, lng, heading, isAerial, decada );

			<?php endif; ?>
		</script>
<?php
	endif;
}// footer_scripts
?>