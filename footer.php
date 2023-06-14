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
	<div class="footer-container">

		<div class="d-flex justify-content-center bg-white" style="z-index: 1;">
			<a class="btn bg-white border border-bottom-0" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				Ver mas
			</a>
		</div>
		<div class="collapse container" id="collapseExample">
			<footer class="row">
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
		<div class="bg-white border-top" style="z-index: 0;">
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