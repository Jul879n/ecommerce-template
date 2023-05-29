<script>
    function incrustar_hoja_estilos_playlists() {
        var hoja_estilos_url =
            '<?php echo get_site_url() . '/wp-content/themes/ecommerce-template/assets/modulos/modulo-productos/modulo-productos.css'; ?>';
        var hoja_estilos = document.createElement('link');
        hoja_estilos.rel = 'stylesheet';
        hoja_estilos.href = hoja_estilos_url;
        document.head.appendChild(hoja_estilos);
    }
    incrustar_hoja_estilos_playlists();
</script>

<!-- contenido playlists -->
<div class="seccion-enfoque container">
    <div class="container">
    <div class="row">
        <h2 class="text-white">Enfoque</h2>
        <?php $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 6; // -1 shows all posts
        $args = array(
            'post_type' => 'product',
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
		                <div class="card miniatura">
		                    <div class="card-body">
		                        <img class="sombra mb-3 rounded" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="<?php echo get_the_title() ?>">
		                        <span class="card-title">
		                            <?php echo get_the_title() ?>
		                        </span>
		                        <span class="card-text">
		                            <?php echo the_content(); ?>
		                        </span>
                                <a class="btn btn-primary" href="<?php the_permalink() ?>">Ver más</a>
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
</div>
