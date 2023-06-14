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

<div class="site-footer">
	<div class="d-flex justify-content-center" style="z-index: 1;">
		<a class="btn bg-white border border-bottom-0" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
			Ver mas
		</a>
	</div>
	<div class="collapse" id="collapseExample">
		<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
			<div class="col mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
				</ul>
			</div>

			<div class="col mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
				</ul>
			</div>

			<div class="col mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
				</ul>
			</div>

			<div class="col mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
				</ul>
			</div>
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
</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>