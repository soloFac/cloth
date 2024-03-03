<?php

function enqueue_styles_child_theme() {

	$parent_style = 'parent-style';
	$child_style  = 'child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );


// - Retener Campos del Checkout

add_action( 'woocommerce_checkout_update_order_review', 'bbloomer_save_checkout_values', 9999 );
 
function bbloomer_save_checkout_values( $posted_data ) {
    parse_str( $posted_data, $output );
    WC()->session->set( 'checkout_data', $output );
}
 
add_filter( 'woocommerce_checkout_get_value', 'bbloomer_get_saved_checkout', 9999, 2 );
 
function bbloomer_get_saved_checkout( $value, $index ) {
    $data = WC()->session->get( 'checkout_data' );
    if ( ! $data || empty( $data[$index] ) ) return $value;
    return is_bool( $data[$index] ) ? (int) $data[$index] : $data[$index];
}
 
add_filter( 'woocommerce_ship_to_different_address_checked', 'bbloomer_get_saved_ship_to_different' );
 
function bbloomer_get_saved_ship_to_different( $checked ) {
    $data = WC()->session->get( 'checkout_data' );
    if ( ! $data || empty( $data['ship_to_different_address'] ) ) return $checked;
    return true;
}