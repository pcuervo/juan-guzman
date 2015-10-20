<?php get_header(); ?>

<?php
	global $post;

	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$fecha = get_fecha( $post->ID );
	$lugar = get_lugar( $post->ID );
?>
	<section class="[ main-image ]">
		<img class="[ img-responsive ][ margin-bottom ]" src="<?php echo $image[0]; ?>">
		<article class="[ ficha-tecnica ]">
			<p class="[ text-center ]">
				<strong><?php the_title(); ?></strong><br/>
				<?php echo $lugar; ?>, <?php echo $fecha; ?>
			</p>
		</article>
	</section>

	<article>
		<?php the_content(); ?>
	</article>


	<section>
		<div class="[ text-right ]">
			<div>
				<a href="" class="[ bg-gray-light ] [ btn-social ] [ padding--xs inline-block ]">
					<i class=" [ fa fa-facebook-official ]"></i>
				</a>
			</div>
			<div>
				<a href="" class="[ bg-gray-xlight ] [ btn-social ] [ padding--xs inline-block ]">
					<i class="[ fa fa-twitter ]"></i>
				</a>
			</div>
		</div>
	</section>

	<section>
		<div class=" [ col-xs-6 ] [ text-right padding-none]">
			<a href="" class="[ bg-gray-light ] [ btn-social ] [ padding--xs inline-block ]">
				<span class=" [ glyphicon glyphicon-chevron-left ]"></span>
			</a>
		</div>
		<div class=" [ col-xs-6 ] [ text-left ]">
			<a href="" class="[ bg-gray-light ] [ btn-social ] [ padding--xs inline-block ]">
				<span class=" [ glyphicon glyphicon-chevron-right ]"></span>
			</a>
	</section>

	<section>
		<a class="[ btn btn-primary btn-squared ]" href="#">
			<span class="icon-street"></span>
		</a>
	</section>

	<div class="[ container-fluid ]">
		<div class="[ row ]">
			<a href="#" class="btn__corner">
				<div class="[ text--bordered ][ text-center ]">
					<p><em>#SabíasQue</em>&nbsp;&nbsp;&nbsp;&nbsp; <i class="[ fa fa-twitter ]"></i> </p>
				</div>
			</a>
		</div>
		<div class="[ row ]">
			<div class="[ col-xs-12 col-md-6 col-md-offset-3  ]">
				<p><strong><?php echo get_the_title() ?>.</strong> <?php echo $lugar . ', ' . $fecha ?>.</p>
			</div>
			<div class="[ col-xs-12 col-md-6 col-md-offset-3 ]">
				<div id="mapa" style="height: 500px;"></div>
			</div>
			<div class="[ col-xs-12 ]">
				<div class="[ street-view-img ]">
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>