<?php get_header(); ?>

	<style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #mapa { height: 100%; }
    </style>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12"><?php the_title() ?></div>
			<div class="col-md-6">
				<div id="mapa" style="height: 500px;"></div>
			</div>
			<div class="col-md-6">
				<div class="[ street-view-img ]">
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>