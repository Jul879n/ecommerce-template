<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecommerce_template
 */

?>

<div class="site-footer bg-white">
	<div class="container ">
		<div class="row pt-3">
			<div class="col-12 col-sm-4 tarjeta-info position-relative">
				<div class="m-5 d-flex flex-column align-items-center">
					<?php
					$image = get_field('imagen_uno');
					if (!empty($image)) : ?>
						<img class="imagen" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="text-center">
						<h4><?php echo esc_html(get_field('titulo_uno')); ?></h4>
						<p><?php echo esc_html(get_field('info_uno')); ?></p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-4 tarjeta-info position-relative">
				<div class="m-5 d-flex flex-column align-items-center">
				<?php
					$image = get_field('imagen_dos');
					if (!empty($image)) : ?>
						<img class="imagen" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="text-center">
						<h4><?php echo esc_html(get_field('titulo_dos')); ?></h4>
						<p><?php echo esc_html(get_field('info_uno')); ?></p>
					</div>
				</div>

			</div>
			<div class="col-12 col-sm-4 tarjeta-info position-relative">
				<div class="m-5 d-flex flex-column align-items-center">
				<?php
					$image = get_field('imagen_tres');
					if (!empty($image)) : ?>
						<img class="imagen" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="text-center">
						<h4><?php echo esc_html(get_field('titulo_tres')); ?></h4>
						<p><?php echo esc_html(get_field('info_tres')); ?></p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer-container">
		<div class="nav nav-tabs bg-white d-flex justify-content-center" id="nav-tab" role="tablist" style="z-index: 1;">
			<a class="nav-link  active" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				Ver mas <i class="fa-solid fa-angle-up ms-2"></i>
			</a>
		</div>
		<div class="collapse" id="collapseExample">
			<div class="container">
				<footer class="row mt-4">
					<?php if (is_active_sidebar('footer-1')) :
						dynamic_sidebar('footer-1');
					endif; ?>
					<?php if (is_active_sidebar('footer-2')) :
						dynamic_sidebar('footer-2');
					endif; ?>
					<?php if (is_active_sidebar('footer-3')) :
						dynamic_sidebar('footer-3');
					endif; ?>
					<?php if (is_active_sidebar('footer-4')) :
						dynamic_sidebar('footer-4');
					endif; ?>
					<?php if (is_active_sidebar('footer-5')) :
						dynamic_sidebar('footer-5');
					endif; ?>
					<?php if (is_active_sidebar('footer-6')) :
						dynamic_sidebar('footer-6');
					endif; ?>
				</footer>
			</div>
		</div>
		<div class="bg-white" style="z-index: 0;">
			<div class="container">
				<?php if (is_active_sidebar('footer-final')) :
					dynamic_sidebar('footer-final');
				endif; ?>
				<span>Copyright © 1999-2023 MercadoLibre Chile Ltda.</span><br>
				<span>Av. Apoquindo 4800, Torre 2, piso 21, Las Condes, Santiago - Chile.</span>
			</div>

		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>