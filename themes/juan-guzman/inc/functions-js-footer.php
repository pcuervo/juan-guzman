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

			<?php if( is_single() ) : ?>
				initTestMap();
			<?php endif; ?>

<?php  ?>
		</script>
<?php
	endif;
}// footer_scripts
?>