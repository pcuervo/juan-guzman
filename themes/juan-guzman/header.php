<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php print_title(); ?></title>

		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Favicon - generated with http://www.favicomatic.com/ -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="Little Crow"/>
		<meta name="msapplication-TileColor" content="#009C9F" />
		<meta name="msapplication-TileImage" content="<?php echo THEMEPATH; ?>favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="<?php echo THEMEPATH; ?>favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x310.png" />

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<!-- Typekit -->
		<script src="https://use.typekit.net/hub0pmr.js"></script>
		<script> try{Typekit.load({ async: true });}catch(e){} </script>
		<!-- Google Maps -->
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=es&libraries=places&key=AIzaSyAjE9TVybKKQNNOa1g760xJ4y6b5YaZmq4"></script>

		<?php wp_head(); ?>
	</head>

	<body>

		<?php if ( is_home() ){ ?>

			<header class="[ text-center ][ container ][ absolute absolute-top--0 z-index-10 ]">
				<div class="[ bg-primary ][ padding--xs no-margin ][ inline-block ][ pull-right ]">
					<img src="<?php echo THEMEPATH; ?>img/logo-fundacion.png">
				</div>
			</header>

		<?php } ?>

		<?php if ( is_single() ){ ?>

			<header class="[ text-center ][ container ]">
				<div class="[ row ]">
					<span class="[ text-left ][ col-xs-8 ]">
						<h1 class="[ bg-primary ][ header__title ][ padding--xs no-margin ][ text-uppercase ][ inline-block ]">
							<a class="[ color-light ]" href="<?php echo site_url(); ?>">
								<strong>Juan Guzmán</strong>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<i class="[ fa fa-book ]"></i>
							</a>
						</h1>
					</span>
					<span class="[ text-right ][ col-xs-4 ]">
						<a href="<?php echo site_url('foto-jg'); ?>" class="[ btn btn-primary btn-xs ][ header__back ]">
							regresar
						</a>
					</span>
				</div><!-- row -->
			</header>

		<?php } ?>

		<?php if ( is_archive() OR is_page() ){ ?>

			<header class="[ text-left ][ container ][ fixed z-index-10 ]">
				<div class="[ container ]">
					<h1 class="[ header__title ][ bg-primary ][ padding--xs no-margin ][ text-uppercase ][ inline-block ]">
						<a class="[ color-light ]" href="<?php echo site_url(); ?>">
							<strong>Juan Guzmán</strong>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="[ fa fa-book ]"></i>
						</a>
					</h1>
				</div>
			</header>

		<?php } ?>