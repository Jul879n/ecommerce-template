<?php
function mostrar_flash_ofertas()
{
    global $product;
    // Obtener el valor del campo personalizado "flash_ofertas" utilizando ACF
    $flash_ofertas = get_field('flash_ofertas', $product->get_id());
    // Mostrar el contenido del campo personalizado si existe
    if ($flash_ofertas) {
        echo '<div class="flash-ofertas">' . esc_html($flash_ofertas) . '</div>';
    }
}
add_action('woocommerce_after_shop_loop_item', 'mostrar_flash_ofertas', 5);

function mostrar_cuotas()
{
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
        echo '<div class="cuotas">en <span class="verde">' . esc_html($cuotas) . 'x $' . esc_html($precio_cuota_formateado) . ' sin interés</span></div>';
    }
}
add_action('woocommerce_after_shop_loop_item_title', 'mostrar_cuotas', 15);

function mostrar_cuotas_single()
{
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
        echo '<div class="cuotas mt-5">en <span class="verde">' . esc_html($cuotas) . 'x $' . esc_html($precio_cuota_formateado) . ' sin interés</span></div>';
    }
}
add_action('woocommerce_after_add_to_cart_button', 'mostrar_cuotas_single', 25);

function caracteristicas(){
    $existe = false;
    for ($i = 1; $i <= 10; $i++) {
        if (get_field('tienes_que_saber_' . $i)) {
            $existe = true;
            break;
        }
    }
    if ($existe) {
        echo '<div class="mt-5">';
        for ($i = 1; $i <= 10; $i++) {
            echo "<span>" . esc_html(get_field('tienes_que_saber_' . $i)) . "</span><br>";
        }
        echo "</div>";
    }
}
add_action('woocommerce_after_add_to_cart_button', 'caracteristicas', 30);

function nav(){
    include get_template_directory() . '/template-parts/nav.php';
}
add_action('woocommerce_before_main_content', 'nav', 20);

function titulo(){
    echo '<h1>' . get_the_title() . '</h1>';
}
add_action('woocommerce_single_product_summary', 'titulo', 5);

function mostrar_porcentaje() {
    global $product;
    // Obtener el precio del producto
    $precio_original = $product->get_regular_price();
    $precio_oferta = $product->get_sale_price();
    if ( $precio_oferta ) {
        $diferencia = abs( $precio_original - $precio_oferta );
        $porcentaje = round( ( $diferencia / $precio_original ) * 100 );
        echo '<div class="porcentaje">' . esc_html( $porcentaje ) . '% OFF</div>';
    }
}
add_action( 'woocommerce_single_product_summary', 'mostrar_porcentaje', 10 );

function columnas_cart(){
    echo '<div class="card">';
    echo '<div class="card-body">';
}
add_action( 'woocommerce_cart_collaterals', 'columnas_cart', 5 );

function columnas_cart_medio(){
    echo '</div>';
    echo '</div>';
}
add_action( 'woocommerce_cart_collaterals', 'columnas_cart_medio', 10 );