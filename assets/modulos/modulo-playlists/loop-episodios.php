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
<div class="seccion-playlists container-fluid mb-5" style="position: relative;">
	<div class="row">
		<?php
		$post_id = get_the_ID();
		$duracion_terms = get_the_terms($post_id, 'nombre-temporada-playlists');
		$duracion = $duracion_terms ? $duracion_terms[0] : null;

		$active = true;
		$temp = $wp_query;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$post_per_page = 6; // -1 shows all posts
		global $wp;
		$slug = add_query_arg(array(), $wp->request);
		$slug_modificado = str_replace('playlists/', '', $slug);
		$args = array(
			'post_type' => 'episodios',
			'orderby' => 'asc',
			'order' => 'asc',
			'paged' => $paged,
			'posts_per_page' => $post_per_page,
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'nombre-serie',
					'field' => 'slug',
					'terms' => $slug_modificado
				),
				array(
					'taxonomy' => 'temporada-episodios',
					'field' => 'slug',
					'terms' => esc_html($duracion->name)
				),
			),
		);
		$wp_query = new WP_Query($args);
		if (have_posts()) : ?>
			<div class="d-flex container-fluid justify-content-center" style="position: absolute; bottom: -30px; z-index: 6;">
			<div class="linea"style="position: absolute; bottom: 30px; z-index: 6;"></div>
				<a class="btn btn-lg me-2 text-white " href="<?php echo the_permalink() ?>"style="z-index: 7;">
					<i class="fa-solid fa-angle-down fondo fs-4 rounded-circle border border-light border-2 d-flex justify-content-center align-items-center" style="height:48px; width: 48px;"></i>
				</a>
			</div>
			<h2 class="text-white">Episodios</h2>
			<!--temporada-->
			<div class="d-flex mb-3">
				<?php
				$post_id = get_the_ID();
				$duracion = get_the_terms($post_id, 'nombre-temporada-playlists');
				if ($duracion) {
					foreach ($duracion as $tiempo) {
						echo '<span>' . esc_html($tiempo->name) . ':</span>';
					}
				}
				?>
				<?php
				$post_id = get_the_ID();
				$edades = get_the_terms($post_id, 'edad-playlists');
				if ($edades) {
					foreach ($edades as $edad) {
						echo '<a class="ms-1 me-1" href="' . esc_url(get_term_link($edad)) . '"><span class="edad">' . esc_html($edad->name) . '+</span></a>';
					}
				}
				?>
			</div>
			<!--temporada-->
			<?php
			while ($wp_query->have_posts()) :
				$wp_query->the_post(); ?>
				<a class="card border-0 episodios container-fluid bg-tarjeta text-white mb-1" href="<?php the_permalink() ?>" style="position: relative;">
					<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
						<div class="col-1 d-flex justify-content-center align-items-center">
							<span class="fs-3"><?php echo the_excerpt() ?></span>
						</div>
						<div class="col-2">
							<img class="w-100 img-fluid rounded-1" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="..">
						</div>
						<div class="col-9">
							<span class="fw-bold"><?php echo get_the_title() ?></span>
							<span><?php echo the_content() ?></span>
						</div>
					</div><!-- #post-<?php the_ID(); ?> -->
					<!--duracion-->
					<div style="position: absolute; z-index: 5; right: 20px;">
						<?php
						$post_id = get_the_ID();
						$duracion = get_the_terms($post_id, 'duracion-episodios');
						if ($duracion) {
							foreach ($duracion as $tiempo) {
								echo '<span>' . esc_html($tiempo->name) . ' min</span>';
							}
						}
						?>
					</div>
					<!--duracion-->
				</a>

		<?php endwhile;
		endif;
		wp_reset_query();
		$wp_query = $temp ?>
	</div>
</div>