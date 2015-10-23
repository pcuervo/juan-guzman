<?php
	get_header();

	global $post;

	$image 				= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$fecha 				= get_fecha( $post->ID );
	$lugar 				= get_lugar( $post->ID );
	$is_aerial 			= get_vista_aerea( $post->ID );
	$sabias_que 		= get_sabias_que( $post->ID );
	$street_view_url 	= get_street_view_url( $post->ID );

?>
	<section class="[ main-image ][ container-fluid ][ no-padding margin-bottom ]">
		<div class="[ clearfix ]">
			<div class="[ col-md-3 ][ hidden-xs hidden-sm ]">
				<div class="embed-responsive embed-responsive-4by3">
					<div id="mapa" class="[ map map--mini ][ embed-responsive-item ]"></div>
				</div>
			</div>
			<div class="[ col-xs-12 col-sm-8 col-md-6 ][ col-sm-offset-2 col-md-offset-0 ][ no-padding ]">
				<img class="[ img-responsive ][ margin-auto ]" src="<?php echo $image[0]; ?>">
			</div>
		</div>
	</section>

	<a href="<?php echo get_previous_photo_url( $post->post_name ) ?>" class="[ col-xs-1 ][ bg-gray-light ][ btn--square ][ fixed top-50 absolute-left--0 ][ z-index-10 ]">
		<span class="[ fa fa-chevron-left ]"></span>
	</a>
	<a href="<?php echo get_next_photo_url( $post->post_name ) ?>" class="[ col-xs-1 ][ bg-gray-light ][ btn--square ][ fixed top-50 absolute-right--0 ][ z-index-10 ]">
		<span class="[ fa fa-chevron-right ]"></span>
	</a>

	<div class="[ container-fluid ][ no-padding ]">

		<div class="[ clearfix ][ margin-bottom--large ]">

			<section class="[ col-xs-10 col-sm-8 col-md-6 ][ col-xs-offset-1 col-sm-offset-2 col-md-offset-3 ]">

				<article class="[ ficha-tecnica ]">
					<p class="[ text-center ]">
						<strong><?php the_title(); ?></strong><br/>
						<?php echo $lugar; ?>, <?php echo $fecha; ?>
					</p>
				</article>

				<article>
					<?php the_content(); ?>
				</article>

			</section>

			<section class="[ col-xs-1 ][ no-padding ]">
				<a href="" class="[ bg-gray-xlight ][ btn--square ]">
					<i class="[ fa fa-facebook-official ]"></i>
				</a>
				<a href="" class="[ bg-gray-light ][ btn--square ]">
					<i class="[ fa fa-twitter ]"></i>
				</a>
			</section>

		</div><!-- clearfix -->

		<?php if ( $is_aerial == false ){ ?>

			<div class="[ clearfix ][ margin-bottom--large ]">
				<section class="[ street-view ][ relative ][ no-padding ][ col-xs-10 col-sm-8 col-md-6 ][ col-xs-offset-1 col-sm-offset-2 col-md-offset-3 ]">
					<div class="[ street-view-img ]"></div>
					<a href="<?php echo $street_view_url ?>" class="[ btn btn-primary btn-sm ][ absolute absolute-top--0 absolute-right--0 ]" target="_blankg">
						<i class="[ fa fa-street-view fa-2x ]"></i>
					</a>
				</section>
			</div><!-- clearfix -->

		<?php } ?>

		<?php if ( '' !== $sabias_que ){ ?>

			<div class="[ clearfix ][ margin-bottom--large ]">
				<section class="[ text-center ][ col-xs-10 col-sm-8 col-md-6 ][ col-xs-offset-1 col-sm-offset-2 col-md-offset-3 ]">
					<p><em>#SabíasQue</em>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><i class="[ fa fa-twitter ]"></i></a> </p>
					<p><?php echo $sabias_que; ?></p>
				</section>
			</div><!-- clearfix -->

		<?php } ?>

	</div>

<?php get_footer(); ?>