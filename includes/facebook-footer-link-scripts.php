<?php


/**
 * Proper way to enqueue scripts and styles.
 */
function ffl_add_scripts() {
    wp_enqueue_style( 'ffl-main-style', plugins_url() . '/facebook-footer-link/css/styles.css' );
    wp_enqueue_script( 'ffl-main-script', plugins_url() . '/facebook-footer-link/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ffl_add_scripts' );