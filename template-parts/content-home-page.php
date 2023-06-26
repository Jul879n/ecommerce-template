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
	<div id="loading-screen">
		<div class="spinner-border text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
	</div>
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
			<div class="border shadow bg-light esfera rounded-circle d-flex justify-content-center align-items-center">
				<i class="fs-1 text-primary fa-solid fa-angle-left"></i>
			</div>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#bannerSuperior" data-bs-slide="next">
			<div class="border shadow bg-light esfera rounded-circle d-flex justify-content-center align-items-center">
				<i class="fs-1 text-primary fa-solid fa-angle-right"></i>
			</div>
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
								<div class="col-12 col-sm-3">
									<div class="raya d-flex flex-column">
										<span><?php echo esc_html(get_field('cuadro_1')); ?></span>
										<span>con Mercado Pago</span>
									</div>
								</div>
								<div class="col-12 col-sm-3 d-flex">
									<?php
									$image = get_field('cuadro_2_imagen');
									if (!empty($image)) : ?>
										<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<div class="d-flex flex-column ps-2">
										<span><?php echo esc_html(get_field('cuadro_2')); ?></span>
										<a href="#">Ver más</a>
									</div>
								</div>
								<div class="col-12 col-sm-3 d-flex">

									<?php
									$image = get_field('cuadro_3_imagen');
									if (!empty($image)) : ?>
										<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<div class="d-flex flex-column ps-2">
										<span><?php echo esc_html(get_field('cuadro_3')); ?></span>
										<a href="#">Ver más</a>
									</div>
								</div>
								<div class="col-12 col-sm-3 d-flex">

									<?php
									$image = get_field('cuadro_4_imagen');
									if (!empty($image)) : ?>
										<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<div class="d-flex flex-column ps-2">
										<span><?php echo esc_html(get_field('cuadro_4')); ?></span>
										<a href="#">Ver todos</a>
									</div>
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
					<div class="card-header d-flex justify-content-between align-items-center text-light header-sub" style="--deg_loyalty:90deg;--first_color_loyalty:#a90f90;--percentage_loyalty:55%;--second_color_loyalty:#0c1a51">
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
										<img class="rounded-circle border img-sub" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<span>
										<?php echo esc_html(get_field('beneficio_1_texto')); ?>
									</span>
								</div>
								<div class="col-12 col-sm-4">
									<?php
									$image = get_field('beneficio_2_imagen');
									if (!empty($image)) : ?>
										<img class="rounded-circle border img-sub" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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
											<img class="rounded-circle border img-sub" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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
			<div class="d-flex align-items-end mt-3">
				<h2 class="m-0 me-2">Beneficios de Mercado Puntos</h2>
				<a href="#">Ver todos los beneficios</a>
			</div>
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
									<a class="text-light" href="#">Ver más <i class="ms-2 fa-solid fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--oferta del dia-->
			<!--descubre-->
			<h2 class="mt-3">Descubre</h2>
			<div class="col-12 col-sm-6">
				<div class="card p-0 sombra">
					<div class="container-fluid">
						<div class="row">
							<div class="col-6 col-sm-6 d-flex justify-content-center align-items-center">
								<div class="card-body">
									<span class="card-text text-uppercase"><?php echo esc_html(get_field('subtitulo_del_dia')); ?></span>
									<h2 class="card-title text-uppercase"><?php echo esc_html(get_field('titulo_del_dia')); ?></h2>
									<a class="btn btn-primary" href="#">Ver más</a>
								</div>
							</div>
							<div class="col-6 col-sm-6 p-0">
								<?php
								$image = get_field('imagen_del_dia');
								if (!empty($image)) : ?>
									<img class="img-fluid rounded-end" src="https://http2.mlstatic.com/D_NQ_665317-MLA70001271887_062023-C.webp" />
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="card p-0 sombra">
					<div class="container-fluid">
						<div class="row">
							<div class="col-6 col-sm-6 d-flex justify-content-center align-items-center">
								<div class="card-body">
									<span class="card-text text-uppercase"><?php echo esc_html(get_field('subtitulo_del_dia')); ?></span>
									<h2 class="card-title text-uppercase"><?php echo esc_html(get_field('titulo_del_dia')); ?></h2>
									<a class="btn btn-primary" href="#">Ver más</a>
								</div>
							</div>
							<div class="col-6 col-sm-6 p-0">
								<?php
								$image = get_field('imagen_del_dia');
								if (!empty($image)) : ?>
									<img class="img-fluid rounded-end" src="https://http2.mlstatic.com/D_NQ_817013-MLA69982326912_062023-C.webp" />
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!--descubre-->
			<!--tiendas-->
			<div class="d-flex align-items-end mt-3">
				<h2 class="m-0 me-2">Las mejores tiendas te esperan</h2>
				<a href="#">Ver tiendas</a>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card">
					<div class="card-body">GHGH</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card">
					<div class="card-body">GHGH</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card">
					<div class="card-body">GHGH</div>
				</div>
			</div>
			<div class="col-12 col-sm-3">
				<div class="card">
					<div class="card-body">GHGH</div>
				</div>
			</div>
			<!--tiendas-->
			<!--te puede interesar-->
			<h2 class="mt-3">Te puede interesar</h2>
			<div class="col-12 col-sm-6">
				<div class="card p-0 sombra">
					<div class="container-fluid">
						<div class="row">
							<div class="col-6 col-sm-6 d-flex justify-content-center align-items-center">
								<div class="card-body">
									<span class="card-text text-uppercase"><?php echo esc_html(get_field('subtitulo_del_dia')); ?></span>
									<h2 class="card-title text-uppercase"><?php echo esc_html(get_field('titulo_del_dia')); ?></h2>
									<a class="btn btn-primary" href="#">Ver más</a>
								</div>
							</div>
							<div class="col-6 col-sm-6 p-0">
								<?php
								$image = get_field('imagen_del_dia');
								if (!empty($image)) : ?>
									<img class="img-fluid rounded-end" src="https://http2.mlstatic.com/D_NQ_665317-MLA70001271887_062023-C.webp" />
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="card p-0 sombra">
					<div class="container-fluid">
						<div class="row">
							<div class="col-6 col-sm-6 d-flex justify-content-center align-items-center">
								<div class="card-body">
									<span class="card-text text-uppercase"><?php echo esc_html(get_field('subtitulo_del_dia')); ?></span>
									<h2 class="card-title text-uppercase"><?php echo esc_html(get_field('titulo_del_dia')); ?></h2>
									<a class="btn btn-primary" href="#">Ver más</a>
								</div>
							</div>
							<div class="col-6 col-sm-6 p-0">
								<?php
								$image = get_field('imagen_del_dia');
								if (!empty($image)) : ?>
									<img class="img-fluid rounded-end" src="https://http2.mlstatic.com/D_NQ_817013-MLA69982326912_062023-C.webp" />
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!--te puede interesar-->
			<!--colecciones-->
			<div class="container-fluid">
				<div class="d-flex align-items-end mt-3">
					<h2 class="m-0 me-2">Colecciones</h2>
					<a href="#"><?php echo esc_html(get_field('titulo_coleccion')); ?> <i class="fa-solid fa-angle-down ms-2"></i></a>
				</div>
				<div class="row">
					<div class="col-12 col-sm-4">
						<div class="card sombra">
							<?php
							$image = get_field('img_principal_coleccion');
							if (!empty($image)) : ?>
								<img class="rounded-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							<div class="card-body d-flex flex-column">
								<span class="text-uppercase"><?php echo esc_html(get_field('texto_coleccion')); ?></span>
								<span class="text-uppercase"><?php echo esc_html(get_field('titulo_coleccion')); ?></span>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-8">
						<div class="container-fluid">
							<div class="row">
								<div class="col-3 col-sm-3 mb-1">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_1');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<div class="col-3 col-sm-3 mb-1">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_2');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<div class="col-3 col-sm-3 mb-1">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_3');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<div class="col-3 col-sm-3 mb-1">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_4');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<div class="col-3 col-sm-3">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_5');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<div class="col-3 col-sm-3">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_6');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<div class="col-3 col-sm-3">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_7');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<div class="col-3 col-sm-3">
									<div class="card sombra">
										<?php
										$image = get_field('img_coleccion_8');
										if (!empty($image)) : ?>
											<img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--colecciones-->
			<!--categorias populares-->
			<h2>Categorias populares</h2>
			<div id="carouselExample" class="carousel slide">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="container-fluid d-flex flex-column align-items-center">
							<div class="row">
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-car"></i>
									<span class="fs-p text-center">Autos, Motos y Otros</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-camera"></i>
									<span class="fs-p text-center">Cámaras y Accesorios</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-gamepad"></i>
									<span class="fs-p text-center">Consolas y Videojuegos</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-fire-burner"></i>
									<span class="fs-p text-center">Electrodomésticos</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-couch"></i>
									<span class="fs-p text-center">Hogar y Muebles</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-shirt"></i>
									<span class="fs-p text-center">Vestuario y Calzado</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-face-smile"></i>
									<span class="fs-p text-center">Belleza y Cuidado Personal</span>
								</div>
							</div>
							<div class="row">
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-mobile"></i>
									<span class="fs-p text-center">Celulares y Telefonía</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-laptop"></i>
									<span class="fs-p text-center">Computación</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-microphone-lines"></i>
									<span class="fs-p text-center">Electrónica, Audio y Video</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-car-battery"></i>
									<span class="fs-p text-center">Accesorios para Vehículos</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-volleyball"></i>
									<span class="fs-p text-center">Deportes y Fitness</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-chess"></i>
									<span class="fs-p text-center">Juegos y Juguetes</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-baby-carriage"></i>
									<span class="fs-p text-center">Bebés</span>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container-fluid d-flex flex-column align-items-center">
							<div class="row">
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-paw"></i>
									<span class="fs-p text-center">Animales y Mascotas</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-palette"></i>
									<span class="fs-p text-center">Arte, Librería y Cordonería</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-screwdriver-wrench"></i>
									<span class="fs-p text-center">Herramientas</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-building"></i>
									<span class="fs-p text-center">Inmuebles</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-book-open"></i>
									<span class="fs-p text-center">Libros, Revistas y Comics</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-regular fa-gem"></i>
									<span class="fs-p text-center">Relojes y Joyas</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-tractor"></i>
									<span class="fs-p text-center">Agro</span>
								</div>
							</div>
							<div class="row">
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-hourglass-half"></i>
									<span class="fs-p text-center">Antigüedades y Colecciones</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-ticket"></i>
									<span class="fs-p text-center">Entradas para Eventos</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-print"></i>
									<span class="fs-p text-center">Industrias y Oficinas</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-guitar"></i>
									<span class="fs-p text-center">Instrumentos Musicales</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-music"></i>
									<span class="fs-p text-center">Música y Películas</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-people-group"></i>
									<span class="fs-p text-center">Servicios</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-utensils"></i>
									<span class="fs-p text-center">Alimentos y Bebidas</span>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container-fluid d-flex flex-column align-items-center">
							<div class="row">
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-helmet-safety"></i>
									<span class="fs-p text-center">Construcción</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-house-medical"></i>
									<span class="fs-p text-center">Salud y Equipamiento Médico</span>
								</div>
							</div>
							<div class="row">
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-cake-candles"></i>
									<span class="fs-p text-center">Souvenirs, Cotillón y Fiestas</span>
								</div>
								<div class="card cuadrado text-primary d-flex justify-content-center align-items-center rounded-0">
									<i class="fa-solid fa-table-cells-large"></i>
									<span class="fs-p text-center">Otras Categorías</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
					<div class="border shadow bg-light esfera rounded-circle d-flex justify-content-center align-items-center">
						<i class="fs-1 text-primary fa-solid fa-angle-left"></i>
					</div>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
					<div class="border shadow bg-light esfera rounded-circle d-flex justify-content-center align-items-center">
						<i class="fs-1 text-primary fa-solid fa-angle-right"></i>
					</div>
				</button>
			</div>
			<!--categorias populares-->
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->