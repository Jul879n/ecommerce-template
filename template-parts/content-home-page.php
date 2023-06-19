<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce_template
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--banner superior-->

	<div id="bannerSuperior" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<?php
				$image = get_field('banner_1');
				if (!empty($image)) : ?>
					<img class="banner w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_2');
				if (!empty($image)) : ?>
					<img class="banner w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_3');
				if (!empty($image)) : ?>
					<img class="banner w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_4');
				if (!empty($image)) : ?>
					<img class="banner w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_5');
				if (!empty($image)) : ?>
					<img class="banner w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_6');
				if (!empty($image)) : ?>
					<img class="banner w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#bannerSuperior" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#bannerSuperior" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!--banner superior-->
	<div class="container mt-5">
		<div class="row">
			<!--medio de pago-->
			<div class="col-12 col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-3">
									<div class="border-start border-primary ps-3 border-5">
										<span>
											<?php echo esc_html(get_field('cuadro_1')); ?>
										</span>
									</div>

								</div>
								<div class="col-3">
									<span>
										<?php echo esc_html(get_field('cuadro_2')); ?>
									</span>
								</div>
								<div class="col-3">
									<span>
										<?php echo esc_html(get_field('cuadro_3')); ?>
									</span>
								</div>
								<div class="col-3">
									<span>
										<?php echo esc_html(get_field('cuadro_4')); ?>
									</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--medio de pago-->
			<div class="col-12 col-sm-12">
				<?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-productos.php'; ?>
			</div>
			<!--Suscríbete-->
			<div class="col-12 col-sm-12">
				<div class="card p-0">
					<div class="card-header d-flex justify-content-between">
						<h2>
							<?php echo esc_html(get_field('titulo')); ?>
						</h2>
						<div class="border-start border-primary ps-3">
							<span>$
								<?php echo esc_html(get_field('precio_original')); ?>
							</span><br>
							<span>$
								<?php echo esc_html(get_field('precio_oferta')); ?> / mes
							</span>
						</div>

					</div>
					<div class="card-body">
						<p>
							<?php echo esc_html(get_field('informacion')); ?>
						</p>
						<div class="container">
							<div class="row">
								<div class="col-12 col-sm-4">
									<?php
									$image = get_field('beneficio_1_imagen');
									if (!empty($image)) : ?>
										<img class="banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<span>
										<?php echo esc_html(get_field('beneficio_1_texto')); ?>
									</span>
								</div>
								<div class="col-12 col-sm-4">
									<?php
									$image = get_field('beneficio_2_imagen');
									if (!empty($image)) : ?>
										<img class="banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<span>
										<?php echo esc_html(get_field('beneficio_2_texto')); ?>
									</span>
								</div>
								<div class="col-12 col-sm-4">
									<div class="d-flex align-items-center">
										<?php
										$image = get_field('beneficio_3_imagen');
										if (!empty($image)) : ?>
											<img class="banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
										<span>
											<?php echo esc_html(get_field('beneficio_3_texto')); ?>
										</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-end">
						<div><a href="#" class="btn btn-primary">Suscríbete</a></div>
					</div>
				</div>
			</div>

			<!--Suscríbete-->

			<!--beneficios-->
			<h2>Beneficios de Mercado Puntos</h2>
			<div class="col-12 col-sm-4 mt-3 mb-3">
				<?php
				$tarjeta_1 = get_field('tarjeta_1');
				if ($tarjeta_1) : ?>
					<div class="card beneficio">
						<a class="enlace" href="#">
							<img class="fondo rounded-2" src="<?php echo esc_url($tarjeta_1['fondo']['url']); ?>" alt="<?php echo esc_url($tarjeta_1['fondo']['url']); ?>" />
							<div class="card-body rounded-bottom rounded-2" style="background:linear-gradient(0deg, rgb(8,19,48) 0%, rgba(8,19,48, 0.0001) 100%)">
								<div class="caja d-flex align-items-end">
									<img style="width: 80px; height: 80px;" class="rounded-3" src="<?php echo esc_url($tarjeta_1['miniatura']['url']); ?>" alt="<?php echo esc_attr($tarjeta_1['miniatura']['alt']); ?>" />
									<div class="text-light ms-2">
										<span class="ante-titulo text-uppercase">
											<?php echo esc_html($tarjeta_1['antes_de_titulo']); ?>
										</span>
										<h3 class="titulo">
											<?php echo esc_html($tarjeta_1['titulo']); ?>
										</h3>
										<span class="subtitulo">
											<?php echo esc_html($tarjeta_1['subtitulo']); ?>
										</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-12 col-sm-4 mt-3 mb-3">
				<?php
				$tarjeta_2 = get_field('tarjeta_2');
				if ($tarjeta_2) : ?>
					<div class="card beneficio">
						<a class="enlace" href="#">
							<img class="fondo rounded-2" src="<?php echo esc_url($tarjeta_2['fondo_2']['url']); ?>" alt="<?php echo esc_url($tarjeta_2['fondo_2']['url']); ?>" />
							<div class="card-body rounded-bottom rounded-2" style="background:linear-gradient(0deg, rgb(60,3,78) 0%, rgba(60,3,78, 0.0001) 100%)">
								<div class="caja d-flex align-items-end">
									<img style="width: 80px; height: 80px;" class="rounded-3" src="<?php echo esc_url($tarjeta_2['miniatura_2']['url']); ?>" alt="<?php echo esc_attr($tarjeta_2['miniatura_2']['alt']); ?>" />
									<div class="text-light ms-2">
										<span class="ante-titulo text-uppercase">
											<?php echo esc_html($tarjeta_2['antes_de_titulo_2']); ?>
										</span>
										<h3 class="titulo">
											<?php echo esc_html($tarjeta_2['titulo_2']); ?>
										</h3>
										<span class="subtitulo">
											<?php echo esc_html($tarjeta_2['subtitulo_2']); ?>
										</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-12 col-sm-4 mt-3 mb-3">
				<?php
				$tarjeta_3 = get_field('tarjeta_3');
				if ($tarjeta_3) : ?>
					<div class="card beneficio">
						<a class="enlace" href="#">
							<img class="fondo rounded-2" src="<?php echo esc_url($tarjeta_3['fondo_3']['url']); ?>" alt="<?php echo esc_url($tarjeta_3['fondo_3']['url']); ?>" />
							<div class="card-body rounded-bottom rounded-2" style="background:linear-gradient(0deg, rgb(0,100,255) 0%, rgba(0,100,255, 0.0001) 100%)">
								<div class="caja d-flex align-items-end">
									<img style="width: 80px; height: 80px;" class="rounded-3" src="<?php echo esc_url($tarjeta_3['miniatura_3']['url']); ?>" alt="<?php echo esc_attr($tarjeta_3['miniatura_3']['alt']); ?>" />
									<div class="text-light ms-2">
										<span class="ante-titulo text-uppercase">
											<?php echo esc_html($tarjeta_3['antes_de_titulo_3']); ?>
										</span>
										<h3 class="titulo">
											<?php echo esc_html($tarjeta_3['titulo_3']); ?>
										</h3>
										<span class="subtitulo">
											<?php echo esc_html($tarjeta_3['subtitulo_3']); ?>
										</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endif; ?>
			</div>
			<!--beneficios-->
			<!--oferta del dia-->
			<div class="col-12 col-sm-12 oferta-del-dia">
				<div class="card p-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-sm-7 p-0">
								<?php
								$image = get_field('imagen_del_dia');
								if (!empty($image)) : ?>
									<img class="img-fluid rounded-start" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
							<div class="col-12 col-sm-5 bg-black rounded-end text-light d-flex align-items-center">
								<div class="card-body">
									<span class="card-text text-uppercase"><?php echo esc_html(get_field('subtitulo_del_dia')); ?></span>
									<h2 class="card-title text-uppercase"><?php echo esc_html(get_field('titulo_del_dia')); ?></h2>
									<a class="text-light" href="#">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--oferta del dia-->
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->