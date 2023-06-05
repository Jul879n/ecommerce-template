<script>
    function incrustar_hoja_estilos_ecommerce() {
        var hoja_estilos_url =
            '<?php echo get_site_url() . '/wp-content/themes/ecommerce-template/assets/modulos/modulo-productos/modulo-productos.css'; ?>';
        var hoja_estilos = document.createElement('link');
        hoja_estilos.rel = 'stylesheet';
        hoja_estilos.href = hoja_estilos_url;
        document.head.appendChild(hoja_estilos);
    }
    incrustar_hoja_estilos_ecommerce();
</script>

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
                            <?php wc_get_template_part('content', 'product'); ?>
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
