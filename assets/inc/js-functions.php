<?php
/*assets scripts*/

function js_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:

    
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', true);
    wp_register_script('mi-js', get_bloginfo('template_directory') . '/assets/librerias/js/mis-scripts.js', array('jquery'), '1', true);
    //wp_register_script('slider-fluid', get_bloginfo('template_directory') . '/assets/librerias/js/slick.js', array('jquery'), '1', true);
    //wp_register_script('parallax', get_bloginfo('template_directory') . '/assets/librerias/js/parallax.js', array('jquery'), '1', false);
    //wp_register_script('titan-js', get_bloginfo('template_directory') . '/assets/librerias/js/titan.js', array('jquery'), '1', false);    
        
        /*encolamos los JS*/
        //wp_enqueue_script('titan-js', array('jquery'), true);
        wp_enqueue_script('mi-js', array('jquery'), true);
        wp_enqueue_script('bootstrap-js');
        //wp_enqueue_script('parallax');
        //wp_enqueue_script('slider-fluid');

        
        
        
    }
}
add_action("wp_enqueue_scripts", "js_script", 1);
