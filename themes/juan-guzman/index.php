<?php get_header(); ?>

	<section>
		<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>img/img1.jpg" alt="">
		<div class="[ text-center ]">
			<p class="[ bg-light ][ header__subtitle ][ padding-top-bottom no-margin ][ color-dark font-sans-serif text-uppercase ]"><strong>La crónica citadina de</strong></p>
			<h1 class="[ bg-primary ][ header__title ][ padding-top-bottom no-margin ][ text-uppercase ]"><strong>Juan Guzmán</strong></h1>
			<p class="[ bg-light ][ padding-top-bottom ]">En donde no cabe un alfiler <wbr> bien caben dos <em>ruleteros</em></p>
		</div>
		<div class="[ row ][ bg-dark ]">
			<div class="[ text-center ]">
				<a href="#" class="[ btn btn-bordered ][ padding-bottom ]">
					Leer texto
				</a>
				<a href="#" class="[ btn btn-bordered ][ padding-bottom ]">
					Ir a mapa
				</a>
				<span class="[ color-primary text-center ][ glyphicon glyphicon-arrow-down ]"></span>
			</div>
		</div>
	</section>
	<section>
		<div class="[ row ]">
			<div class="[ col-xs-12 ] [ text-center ]">
				<img class="[ img-background-block ]" src=" <?php echo THEMEPATH; ?> img/img3.jpg" alt="">
			</div>
		</div>
		<div class="[ row ]">
			<div class="[ col-xs-12 ]">
				<p class="[ padding--10 ] [ text--white ]">El primer nombre de Juan Guzmàn fue Hans Gutmann. Nacido en <span class="[ border__dotted--white ]">Colonia, Alemania,</span> en 1911. Hizo estudios en ingenierìa metalùrgica.</p>
				<span class="[ text--red text--center ] [ glyphicon glyphicon-arrow-down ]"></span>
			</div>
		</div>
	</section>
	<section>
		<div class="[ row ]">
			<div class="[ col-xs-12 ] [ text-center ]">
				<!-- slide -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo THEMEPATH; ?>img/img1.jpg" alt="">
						</div>
						<div class="item">
							<img src="<?php echo THEMEPATH; ?>img/img2.jpg" alt="">
						</div>
						<div class="item">
							<img src="<?php echo THEMEPATH; ?>img/img3.jpg" alt="">
						</div>
						<div class="item">
							<img src="<?php echo THEMEPATH; ?>img/img1.jpg" alt="">
						</div>
					</div>
					<!-- Left arrow -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<!-- Right arrow -->
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div>
			<a class="[ btn__map ][ uppercase ]" href="">
				Mapa
			</a>
			<img class=" [ img-background-home ] " src="<?php echo THEMEPATH; ?>img/img3.jpg">
		</div>
		<div class="[ bg-color--black ] [ padding--10 ]">
			<div class="[ row ]">
				<div class="[ col-xs-12]">
					<h2 class="[ border__bottom--red text--white ] [ margin--auto ]">HANS GUTMANN</h2>
				</div>
			</div>
			<div class="[ row ]">
				<div class="[ col-xs-12 ]">
					<p class="[ padding--10 ] [ text--white ]">El primer nombre de Juan Guzmàn fue Hans Gutmann. Nacido en <span class="[ border__dotted--white ]">Colonia, Alemania,</span> en 1911. Hizo estudios en ingenierìa metalùrgica.</p>
					<span class="[ text--red  text--center] [ glyphicon glyphicon-arrow-down ]"></span>
				</div>
			</div>
		</div>
	</section>
	<section>
		<img class=" [ img-background-home ] " src="<?php echo THEMEPATH; ?>img/img2.jpg">
		<div class="padding--10">
			<div class="[ row ]">
				<div class="[ col-xs-12 ]">
					<h2 class="[ border__bottom--red ] [ margin--auto ]">SEGUNDA GUERRA MUNDIAL</h2>
				</div>
			</div>
			<div class="[ row ]">
				<div class="[ col-xs-12 text--center]">
					<p class="[ padding--10 ]">La situaciòn econòmica de su paìs natal no fue propicia para su desenvlvimiento en esa disciplina. Las producciones de una pequeña compañìa cinematogràfica le dieron oportunidad de aprender otros oficios.</p>
					<span class="[ text--red  text--center] [ glyphicon glyphicon-arrow-down ]"></span>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="[ container ][ text-center ]">
			<div class="[ row ]">
				<a href="#" class="btn__corner">
					<div class="[ btn__corner--bordered ]">
						<div class="[ btn__bordered--one ]"></div>
						<div class="[ btn__bordered--two ]"></div>
						<div class="[ btn__bordered--tree ]"></div>
						<div class="[ btn__bordered--four ]"></div>
					</div>
					<div class="[ text--bordered ][ text-center ]">
						<p><em>#SabíasQue</em></p>
					</div>
				</a>
			</div>
			<div class="[ row ]">
				<p>Fue en el cruce de las calles 5 de Mayo y San Juan de Letrán, hoy Eje Central, donde se colocaron los letreros de la XEB anunciando el aumento de su potencia a 100,000 watts.</p>
			</div>
		</div>
	</section>

<?php get_footer(); ?>