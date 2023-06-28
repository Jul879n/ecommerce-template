<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ecommerce_template
 */

get_header();
?>

<main id="primary" class="site-main container">
	<div id="loading-screen">
		<div class="spinner-border text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
	</div>
	<div id="tarjetas" class="card">
		<div class="card-body d-flex flex-column justify-content-between">
			<div>
				<span class="titulo">Medios de pago</span>
				<a class="btn btn-success text-white catorce w-100" href="#"><i class="fa-regular fa-credit-card me-2"></i>¡Paga en hasta 12 cuotas sin interés!</a>
			</div>
			<div>
				<span class="titulo mb-2">Tarjetas de crédito</span>
				<div class="d-flex w-100 justify-content-around mb-2">
					<img class="img-tarjetas" src="https://http2.mlstatic.com/storage/logos-api-admin/a5f047d0-9be0-11ec-aad4-c3381f368aaf-m.svg" alt="visa">
					<img class="img-tarjetas" src="https://http2.mlstatic.com/storage/logos-api-admin/aa2b8f70-5c85-11ec-ae75-df2bef173be2-m.svg" alt="master card">
					<img class="img-tarjetas" src="https://http2.mlstatic.com/storage/logos-api-admin/b2c93a40-f3be-11eb-9984-b7076edb0bb7-m.svg" alt="american express">
					<img class="img-tarjetas" src="https://http2.mlstatic.com/storage/logos-api-admin/751ea930-571a-11e8-9a2d-4b2bd7b1bf77-m.svg" alt="dinners club">
				</div>
			</div>
			<div>
				<span class="titulo mb-2">Tarjetas de débito</span>
				<div class="d-flex w-100 justify-content-around">
					<img class="img-tarjetas" src="https://http2.mlstatic.com/storage/logos-api-admin/312238e0-571b-11e8-823a-758d95db88db-m.svg" alt="visa debito">
					<img class="img-tarjetas" src="https://http2.mlstatic.com/storage/logos-api-admin/157dce60-571b-11e8-95d8-631c1a9a92a9-m.svg" alt="master card debito">
					<img class="img-tarjetas" src="https://http2.mlstatic.com/storage/logos-api-admin/3ba729e0-f3a0-11eb-9984-b7076edb0bb7-m.svg" alt="red compra">
				</div>
			</div>
			<a class="text-primary" href="#">Conoce otros medios de pago</a>
		</div>

	</div>
	<div class="mt-5 d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center"><button class="volver btn">volver</button><?php if (is_active_sidebar('breadcrumb')) :
																								dynamic_sidebar('breadcrumb');
																							endif; ?>
		</div>
		<div class="d-flex align-items-center"><a href="#" class="pe-2 text-primary">Compartir</a> <a href="#" class="border-start ps-2 border-primary text-primary">Vender uno igual</a>
		</div>
	</div>
	<div id="envio" class="d-flex mt-3">
	<i class="fa-solid fa-truck porcentaje me-2"></i>
		<div class="d-flex flex-column">
			<span class="porcentaje mb-2">Llega gratis entre el sábado y el lunes</span>
			<a class="text-primary" href="#">Ver más formas de entrega</a>
		</div>
	</div>
	<a id="ver-pago" class="text-primary" href="#">Ver los medios de pago</a>
	<div id="single-producto" class="card shadow  mb-5">

		<div class="card-body">



			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content-single-producto', get_post_type());

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
