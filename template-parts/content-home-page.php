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
	
	<div class="container">
		<div class="row">
			<?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-productos.php'; ?>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->