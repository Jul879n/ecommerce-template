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
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 no-ver">
				<?php include get_template_directory() . '/template-parts/registrarse.php'; ?>
			</div>
			<div class="col-12 col-sm-2 p-0 estatico no-ver">
				<?php include get_template_directory() . '/template-parts/menu-lateral.php'; ?>
			</div>
			<div class="col-12 col-sm-2 p-0 no-ver">
			</div>
			<div class="col-12 col-sm-10 p-0 arriba mb-footer">
				<?php include get_template_directory() . '/template-parts/nav-spotify.php'; ?>
				<div class="playlists">
					<?php include get_template_directory() . '/assets/modulos/modulo-playlists/loop-enfoque.php'; ?>
					<?php include get_template_directory() . '/assets/modulos/modulo-playlists/loop-enfoque.php'; ?>
				</div>
				<?php include get_template_directory() . '/template-parts/footer.php'; ?>
			</div>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->