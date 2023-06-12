<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce_template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-6 col-sm-2 mt-2 p-1">
		<div class="card miniatura">
			<div class="card-body">
				<?php wc_get_template_part('content', 'product'); ?>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->