<?php
/**
 * Plugin Name: Facebook Footer Link
 * Plugin URI:   https://gazelleweb-tech.com
 * Description:  Basic WordPress Plugin Header Comment
 * Version:      1.0
 * Author:       Mal3k Eden
 */

//exit if accessed directly

if(!defined('ABSPATH')){
    exit;
}

//GLOBAL OPTIONS

$ffl_options = get_option('ffl_settings');

require_once( plugin_dir_path(__FILE__) .'includes/facebook-footer-link-scripts.php');

require_once( plugin_dir_path(__FILE__) .'includes/facebook-footer-link-content.php');

//check if its in admin view

if(is_admin()){

    //load settings
    require_once( plugin_dir_path(__FILE__) .'includes/facebook-footer-link-settings.php');
}