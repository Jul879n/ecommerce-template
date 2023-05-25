<script>
	function incrustar_hoja_estilos_playlists() {
		var hoja_estilos_url =
			'<?php echo get_site_url() . '/wp-content/themes/base/assets/modulos/modulo-playlists/modulo-playlist.css'; ?>';
		var hoja_estilos = document.createElement('link');
		hoja_estilos.rel = 'stylesheet';
		hoja_estilos.href = hoja_estilos_url;
		document.head.appendChild(hoja_estilos);
	}
	incrustar_hoja_estilos_playlists();
</script>

<!-- contenido playlists -->
<div class="seccion-playlists container-fluid mb-5">
	<div class="row">
		<h2 class="text-white">Tendencias</h2>
		<?php $active = true;
		$temp = $wp_query;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$post_per_page = 6; // -1 shows all posts
		$args = array(
			'post_type' => 'playlist',
			'orderby' => 'rand',
			'order' => 'asc',
			'paged' => $paged,
			'posts_per_page' => $post_per_page
		);
		$wp_query = new WP_Query($args);
		if (have_posts()) :
			while ($wp_query->have_posts()) :
				$wp_query->the_post(); ?>

				<div class="col-6 col-sm-2 mt-2 p-1">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink() ?>" style="position: relative;">
							<img class="w-100 img-fluid rounded-1" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="..">
							<img style="position: absolute; z-index: 6;" class="w-75 logo" src="<?php echo get_site_url(null, '/wp-content/uploads/') ?><?php echo get_the_date('Y/m'); ?>/<?php $post_id = get_the_ID(); // Obtiene el ID del post actual
																																															$post_slug = get_post_field('post_name', $post_id); // Obtiene el slug del post
																																															echo $post_slug; ?>.webp" alt="">
						</a>
					</div><!-- #post-<?php the_ID(); ?> -->
				</div>


		<?php endwhile;
		endif;
		wp_reset_query();
		$wp_query = $temp ?>



	</div>
</div>