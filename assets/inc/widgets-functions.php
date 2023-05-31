<?php
//widget assets
function ecommerce_widget() {
    register_sidebar( array(
        'name'          => 'logo',
        'id'            => 'nav-principal-0',
        'before_widget' => '<div class="col-12 col-sm-12">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="titulo-menu-nav">', //añadimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
    register_sidebar( array(
        'name'          => 'promociones',
        'id'            => 'nav-principal-1',
        'before_widget' => '<div class="col-12 col-sm-12">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="titulo-menu-nav">', //añadimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
}

add_action( 'widgets_init', 'ecommerce_widget' );