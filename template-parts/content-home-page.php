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
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
				aria-label="Slide 4"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
				aria-label="Slide 5"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
				aria-label="Slide 6"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<?php
				$image = get_field('banner_1');
				if (!empty($image)): ?>
					<img class="banner" src="<?php echo esc_url($image['url']); ?>"
						alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_2');
				if (!empty($image)): ?>
					<img class="banner" src="<?php echo esc_url($image['url']); ?>"
						alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_3');
				if (!empty($image)): ?>
					<img class="banner" src="<?php echo esc_url($image['url']); ?>"
						alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_4');
				if (!empty($image)): ?>
					<img class="banner" src="<?php echo esc_url($image['url']); ?>"
						alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_5');
				if (!empty($image)): ?>
					<img class="banner" src="<?php echo esc_url($image['url']); ?>"
						alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="carousel-item">
				<?php
				$image = get_field('banner_6');
				if (!empty($image)): ?>
					<img class="banner" src="<?php echo esc_url($image['url']); ?>"
						alt="<?php echo esc_attr($image['alt']); ?>" />
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
			<div class="card">
				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-3">
								<span>
									<?php echo esc_html(get_field('cuadro_1')); ?>
								</span>
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
			<!--medio de pago-->
			<?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-productos.php'; ?>
			<!--Suscríbete-->
			<div class="card p-0">
				<div class="card-header d-flex justify-content-between">
						<h2><?php echo esc_html(get_field('titulo')); ?></h2>
						<div>
						<span>$<?php echo esc_html(get_field('precio_original')); ?></span><br>
						<span>$<?php echo esc_html(get_field('precio_oferta')); ?> / mes</span>
						</div>
						
				</div>
				<div class="card-body">
					<p>
						<?php echo esc_html(get_field('informacion')); ?>
					</p>
					<div class="container">
						<div class="row">
							<div class="col-4">
								<?php
								$image = get_field('beneficio_1_imagen');
								if (!empty($image)): ?>
									<img class="banner" src="<?php echo esc_url($image['url']); ?>"
										alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								<span><?php echo esc_html(get_field('beneficio_1_texto')); ?></span>
							</div>
							<div class="col-4">
								<?php
								$image = get_field('beneficio_2_imagen');
								if (!empty($image)): ?>
									<img class="banner" src="<?php echo esc_url($image['url']); ?>"
										alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								<span><?php echo esc_html(get_field('beneficio_2_texto')); ?></span>
							</div>
							<div class="col-4">
								<div class="d-flex border-start">
								<?php
								$image = get_field('beneficio_3_imagen');
								if (!empty($image)): ?>
									<img class="banner" src="<?php echo esc_url($image['url']); ?>"
										alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								<span><?php echo esc_html(get_field('beneficio_3_texto')); ?></span>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-end">
					<div><a href="#" class="btn btn-primary">Suscríbete</a></div>
  </div>
			</div>
			<!--Suscríbete-->
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->