<?php
function mostrar_flash_ofertas() {
    global $product;
    // Obtener el valor del campo personalizado "flash_ofertas" utilizando ACF
    $flash_ofertas = get_field('flash_ofertas', $product->get_id());
    // Mostrar el contenido del campo personalizado si existe
    if ($flash_ofertas) {
        echo '<div class="flash-ofertas">' . esc_html($flash_ofertas) . '</div>';
    }
}
add_action('woocommerce_after_shop_loop_item', 'mostrar_flash_ofertas', 5);

function mostrar_cuotas() {
    global $product;
    // Obtener el valor del campo personalizado "cuotas" utilizando ACF
    $cuotas = get_field('cuotas', $product->get_id());
    // Obtener el precio del producto
    $precio = $product->get_price();
    // Calcular el precio de cada cuota
    $precio_cuota = $precio / $cuotas;
    // Formatear el precio con separadores de miles y decimales
    $precio_cuota_formateado = number_format($precio_cuota, 0, ',', '.');
    // Mostrar el contenido del campo personalizado si existe
    if ($cuotas) {
        echo '<div class="cuotas">' . esc_html($cuotas) . ' cuotas de $' . esc_html($precio_cuota_formateado) . '</div>';
    }
}
add_action('woocommerce_after_shop_loop_item_title', 'mostrar_cuotas', 15);

function mostrar_cuotas_single() {
    global $product;
    // Obtener el valor del campo personalizado "cuotas" utilizando ACF
    $cuotas = get_field('cuotas', $product->get_id());
    // Obtener el precio del producto
    $precio = $product->get_price();
    // Calcular el precio de cada cuota
    $precio_cuota = $precio / $cuotas;
    // Formatear el precio con separadores de miles y decimales
    $precio_cuota_formateado = number_format($precio_cuota, 0, ',', '.');
    // Mostrar el contenido del campo personalizado si existe
    if ($cuotas) {
        echo '<div class="cuotas">' . esc_html($cuotas) . 'x $' . esc_html($precio_cuota_formateado) . ' sin interés</div>';
    }
}
add_action('woocommerce_after_add_to_cart_button', 'mostrar_cuotas_single', 25);

//function boton_de_agregar(){
    //echo '<a href="?add-to-cart=' . get_the_ID() . '" rel="nofollow" data-product_id="' . get_the_ID() . '" data-product_sku="" class="btn btn-primary">Añadir al carrito</a>';
//}
//add_action( 'woocommerce_after_shop_loop_item', 'boton_de_agregar', 30 );
function caracteristicas(){
    echo "<div class='mt-5 bg-primary'>";
    $i = 1;
    while($i <= 10){
        echo "<span>" . esc_html( get_field('tienes_que_saber_' . $i) ) . "</span><br>";
        $i++;
    }
    echo "</div>";
}
add_action( 'woocommerce_after_add_to_cart_button', 'caracteristicas', 30 );

function nav(){
    include get_template_directory() . '/template-parts/nav.php';
}
add_action( 'woocommerce_before_main_content', 'nav', 20 );