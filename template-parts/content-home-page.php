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
				<img src="..." class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
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
	<div class="container">
		<div class="row">
			<?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-productos.php'; ?>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->