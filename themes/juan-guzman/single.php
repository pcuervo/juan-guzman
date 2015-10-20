<?php
	get_header();

	global $post;

	$image 		= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$fecha 		= get_fecha( $post->ID );
	$lugar 		= get_lugar( $post->ID );
	$sabias_que = get_sabias_que( $post->ID );

?>
	<section class="[ main-image ][ container-fluid ][ no-padding margin-bottom ]">
		<img class="[ img-responsive ][ margin-auto ]" src="<?php echo $image[0]; ?>">
	</section>

	<div class="[ container-fluid ][ no-padding ]">

		<div class="[ clearfix ]">

			<section class="[ col-xs-1 ][ col-sm-offset-1 col-md-offset-2 ][ no-padding ]">
				<a href="" class="[ bg-gray-light ][ btn--square ][ pull-right ]">
					<span class=" [ fa fa-chevron-left ]"></span>
				</a>
			</section>

			<section class="[ col-xs-10 col-sm-8 col-md-6 ]">

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
				<a href="" class="[ bg-gray-light ][ btn--square ]">
					<span class="[ fa fa-chevron-right ]"></span>
				</a>
				<a href="" class="[ bg-gray-xlight ][ btn--square ]">
					<i class="[ fa fa-facebook-official ]"></i>
				</a>
				<a href="" class="[ bg-gray-light ][ btn--square ]">
					<i class="[ fa fa-twitter ]"></i>
				</a>
			</section>

		</div><!-- clearfix -->

		<div class="[ clearfix ][ margin-bottom ]">
			<section class="[ street-view ][ relative ][ no-padding ][ col-xs-10 col-sm-8 col-md-6 ][ col-xs-offset-1 col-sm-offset-2 col-md-offset-3 ]">
				<div class="[ img-responsive street-view-img ]"></div>
				<a class="[ btn btn-primary btn-sm ][ absolute absolute-top--0 absolute-right--0 ]" href="#">
					<i class="[ fa fa-street-view fa-2x ]"></i>
				</a>
			</section>
		</div><!-- clearfix -->

		<div class="[ clearfix ]">
			<section class="[ text-center ][ col-xs-10 col-sm-8 col-md-6 ][ col-xs-offset-1 col-sm-offset-2 col-md-offset-3 ]">
				<p><em>#SabíasQue</em>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><i class="[ fa fa-twitter ]"></i></a> </p>
				<p><?php echo $sabias_que; ?></p>
			</section>
		</div><!-- clearfix -->

		<section class="[ row ]">
			<div class="">
				<div id="mapa" class="[ map map--mini ]"></div>
			</div>
		</section>

	</div>

<?php get_footer(); ?>