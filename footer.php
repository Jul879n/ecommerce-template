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
				<div class="m-5">
					<h4>dfdfdfdf</h4>
					<p>Con Mercado Pago, paga con tus tarjetas de débito y crédito o hazlo con efectivo en puntos de pago. Paga siempre desde Mercado Libre para que podamos asegurar tu dinero.</p>
				</div>

			</div>
			<div class="col-12 col-sm-4 tarjeta-info position-relative">
				<div class="m-5">
					<h4>dfdfdfdf</h4>
				</div>

			</div>
			<div class="col-12 col-sm-4 tarjeta-info position-relative">
				<div class="m-5">
					<h4>dfdfdfdf</h4>
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