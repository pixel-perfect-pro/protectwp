<?php
/*
 Plugin Name: ProtectWP starter pack
 Description: Podstawowe ustawienia i zabezpieczenia strony.
 Author:      ProtectWP
 Author URI:  https://protectwp.pl
 Version:     1.0
*/
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



/* HARDENING */

/* Remove unnecessary info from head section */
function protectwp_remove_header_info() {
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'feed_links_extra' );
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
}
add_action( 'init', 'protectwp_remove_header_info' );



/* RSS */
function protectwp_secure_generator( $generator, $type ) {
    return '';
}
add_filter( 'the_generator', 'protectwp_secure_generator', 10, 2 );



/* Remove query strings */
function protectwp_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_filter( 'style_loader_src', 'protectwp_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'protectwp_remove_wp_ver_css_js', 9999 );



/* Disable XMLRPC */
add_filter( 'xmlrpc_enabled', '__return_false' );



/* Hide failed login details */
function protectwp_wrong_login() {
return __( 'Zła nazwa użytkownika lub hasło', 'protectwp-starter-pack' );
}
add_filter( 'login_errors', 'protectwp_wrong_login' );



/* Remove Dummy option from Two-Factor */
function protectwp_remove_two_factor_dummy_option( $providers ) {
    unset( $providers['Two_Factor_Dummy'] );
    return $providers;
}
add_filter( 'two_factor_providers', 'protectwp_remove_two_factor_dummy_option' );
