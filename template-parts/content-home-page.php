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
	<div class="container">
		<div class="row">
			<?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-productos.php'; ?>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->