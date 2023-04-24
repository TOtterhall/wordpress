<!-- add action remove action -->
<?php
// Kroka in för att ändra på Checkout fältet order_comments (orderanteckningar)
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
// Inkrokad funktion - $fields skickas med filtret!


function custom_override_checkout_fields( $fields ) {
     $fields['order']['order_comments']['placeholder'] = 'Fyll i ditt meddelande här, om du har några speciella önskemål.';
     $fields['order']['order_comments']['label'] = 'Meddelande till oss:';
     return $fields;
}

    // Ta bort produktbilden HITTA NGT ATT TA BORT
    // remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail');

// Skriver ut text innan brödtexten
add_action( 'woocommerce_breadcrumb' , 'min_funktion');
 
function min_funktion(){

    echo 'krokbanan';
}

add_action('after_setup_theme','my_remove_product_result_count',99);

function my_remove_product_result_count() {
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);
remove_action('woocommerce_after_shop_loop','woocommerce_result_count',20);
}

?>