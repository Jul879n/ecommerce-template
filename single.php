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
	<div class="card shadow mt-5 mb-5">
		<div class="card-header">
			<button class="volver btn">volver</button>
		</div>
		<div class="card-body">



			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content-single-producto', get_post_type());

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'ecommerce-template') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'ecommerce-template') . '</span> <span class="nav-title">%title</span>',
					)
				);

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
