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

				//toggleElementOnSscroll( $('header'), '.hero__text');
				toggleElementOnSscroll( $('.image-bg--hero'), '.btn--map--float');

				$(window).scroll(function(){
					//toggleElementOnSscroll( $('header'), '.hero__text');
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

				window.fbAsyncInit = function() {
					FB.init({
						appId      : '1487150328256182',
						xfbml      : true,
						version    : 'v2.4'
					});
				};

				(function(d, s, id){
				     var js, fjs = d.getElementsByTagName(s)[0];
				     if (d.getElementById(id)) {return;}
				     js = d.createElement(s); js.id = id;
				     js.src = "//connect.facebook.net/en_US/sdk.js";
				     fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));


				/**
				 * Triggered events
				**/

				// Pasar a función
				var lat = <?php echo get_lat( get_the_ID() ); ?>;
				var lng = <?php echo get_lng( get_the_ID() ); ?>;
				var decada = <?php echo get_decada( get_the_ID() ); ?>;
				var isAerial = <?php echo get_vista_aerea( get_the_ID() ) ?>;
				var heading = <?php echo get_heading( get_the_ID() ) ?>;

				showSingleMap( lat, lng, heading, isAerial, decada );

				$('.js-fb-share').click( function(){
					FB.ui(
					{
						method: 'share',
						name: '<?php echo get_the_title(); ?>',
						href: '<?php echo the_permalink() ?>'
					}, function(response){ console.log( response )});
				});

			<?php endif; ?>
		</script>
<?php
	endif;
}// footer_scripts
?>