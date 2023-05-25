<?php
function css_base_framework(){
    
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', 'all');
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    wp_register_style('iconos', 'https://use.fontawesome.com/releases/v6.4.0/css/all.css');

    wp_enqueue_style('fuentes');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
    wp_enqueue_style('iconos');
    
    
}


add_action('wp_enqueue_scripts', 'css_base_framework');


/*assets styles*/