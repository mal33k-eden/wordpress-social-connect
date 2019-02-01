<?php


/**
 * Proper way to enqueue scripts and styles.
 */
function wppsl_add_scripts() {
    wp_enqueue_style( 'wppsl-main-style', plugins_url() . '/wordpress-social-connect/css/styles.css' );
    wp_enqueue_script( 'wppsl-main-script', plugins_url() . '/wordpress-social-connect/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wppsl_add_scripts' );