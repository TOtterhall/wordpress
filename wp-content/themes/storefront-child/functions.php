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



?>