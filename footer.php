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
										<h2 class="titulo">
											<?php echo esc_html($tarjeta_1['titulo']); ?>
										</h2>
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
										<h2 class="titulo">
											<?php echo esc_html($tarjeta_2['titulo_2']); ?>
										</h2>
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
										<h2 class="titulo">
											<?php echo esc_html($tarjeta_3['titulo_3']); ?>
										</h2>
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