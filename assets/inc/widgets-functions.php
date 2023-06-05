<?php
//widget assets
function ecommerce_widget() {
    register_sidebar( array(
        'name'          => 'nav-izquierda',
        'id'            => 'nav1',
        'before_widget' => '<div class="columnas">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="titulo-menu-nav">', //añadimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
    register_sidebar( array(
        'name'          => 'nav-centro',
        'id'            => 'nav2',
        'before_widget' => '<div class="columnas">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="titulo-menu-nav">', //añadimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
    register_sidebar( array(
        'name'          => 'nav-derecha',
        'id'            => 'nav3',
        'before_widget' => '<div class="columnas">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="titulo-menu-nav">', //a単ñdimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
    register_sidebar( array(
        'name'          => 'nav-celular',
        'id'            => 'nav-responsivo',
        'before_widget' => '<div class="col-12">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="titulo-menu-nav">', //añadimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
}

add_action( 'widgets_init', 'ecommerce_widget' );