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
<div class="seccion-similares container-fluid mb-5"  style="position: relative;">
    <div class="row">
        <h2 class="text-white">Más títulos similares</h2>
        <?php
        $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 9; // -1 shows all posts
        $args = array(
            'post_type' => 'playlists',
            'orderby' => 'rand',
            'order' => 'asc',
            'paged' => $paged,
            'posts_per_page' => $post_per_page

        );

        $wp_query = new WP_Query($args);
        if (have_posts()): ?>
            <div class="d-flex container-fluid justify-content-center" style="position: absolute; bottom: -30px; z-index: 6;">
			<div class="linea"style="position: absolute; bottom: 30px; z-index: 6;"></div>
				<a class="btn btn-lg me-2 text-white " href="<?php echo the_permalink() ?>"style="z-index: 7;">
					<i class="fa-solid fa-angle-down fondo fs-4 rounded-circle border border-light border-2 d-flex justify-content-center align-items-center" style="height:48px; width: 48px;"></i>
				</a>
			</div><?php
            while ($wp_query->have_posts()):
                $wp_query->the_post(); ?>

                <div class="col-12 col-sm-4 mt-2 p-1">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('card border-0 bg-similares text-white similares'); ?>>
                        <a href="<?php the_permalink() ?>" style="position: relative;">
                            <img class="w-100 img-fluid rounded-top"
                                src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="..">
                                <img style="position: absolute; z-index: 6; left: 10px; bottom: 10px;" class="w-75" src="<?php echo get_site_url(null, '/wp-content/uploads/') ?><?php echo get_the_date('Y/m'); ?>/<?php $post_id = get_the_ID(); // Obtiene el ID del post actual
								   		$post_slug = get_post_field('post_name', $post_id); // Obtiene el slug del post
								   		echo $post_slug; ?>.webp" alt="">
                        </a>
                        <div class="card-body" style="position:absolute; z-index:5;right:0;">
                            <?php
                            $post_id = get_the_ID();
                            $temporadas = get_the_terms($post_id, 'temporadas-playlists');

                            if ($temporadas) {
                                foreach ($temporadas as $temporada) {
                                    echo '<span class="ms-1 me-1">' . esc_html($temporada->name) . ' temporadas</span>';
                                }
                            }
                            ?>
                            <?php
                            $post_id = get_the_ID();
                            $tiempo = get_the_terms($post_id, 'duracion-playlists');

                            if ($tiempo) {
                                foreach ($tiempo as $duracion) {
                                    echo '<span class="ms-1 me-1">' . esc_html($duracion->name) . '</span>';
                                }
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <span class="para-ti">
                                        <?php
                                        $post_id = get_the_ID();
                                        $varios = get_the_terms($post_id, 'para-ti-playlists');

                                        if ($varios) {
                                            foreach ($varios as $vario) {
                                                echo '<span class="ms-1 me-1">' . esc_html($vario->name) . ' % para ti</span>';
                                            }
                                        }
                                        ?>
                                    </span>
                                    <div class="d-flex">
                                        <?php
                                        $post_id = get_the_ID();
                                        $edades = get_the_terms($post_id, 'edad-playlists');
                                        if ($edades) {
                                            foreach ($edades as $edad) {
                                                echo '<a class="ms-1 me-1" href="' . esc_url(get_term_link($edad)) . '"><span class="edad">' . esc_html($edad->name) . '+</span></a>';
                                            }
                                        }
                                        ?>
                                        <?php
                                        $post_id = get_the_ID();
                                        $annos = get_the_terms($post_id, 'anno-playlists');

                                        if ($annos) {
                                            foreach ($annos as $anno) {
                                                echo '<span class="ms-1 me-1">' . esc_html($anno->name) . '</span>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-5 d-flex justify-content-end">
                                <a class="btn btn-lg me-2 text-white" href="<?php echo the_permalink() ?>">
									<i class="fa-solid fa-plus fs-3 fondo rounded-circle border border-light border-2 d-flex justify-content-center align-items-center"
										style="height:48px; width: 48px;"></i>
								</a>
                                </div>
                                <p class="card-text">
                                    <?php echo the_content() ?>
                                </p>
                            </div>
                        </div>

                    </div><!-- #post-<?php the_ID(); ?> -->
                </div>

            <?php endwhile;
        endif;
        wp_reset_query();
        $wp_query = $temp ?>
    </div>
</div>