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
	<div class="mt-5 d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center"><button class="volver btn">volver</button><?php if (is_active_sidebar('breadcrumb')) :
																								dynamic_sidebar('breadcrumb');
																							endif; ?>
		</div>
		<div class="d-flex align-items-center"><a href="#" class="pe-2">Compartir</a> <a href="#" class="border-start ps-2 border-primary">Vender uno igual</a>
		</div>
	</div>
	<div class="card shadow  mb-5">

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
