<?php
/**
 * Plugin Name: Posts Social Connect
 * Plugin URI:   https://gazelleweb-tech.com
 * Description:  Basic WordPress plugin to enable you add your social links to blog posts and threads
 * Version:      1.1
 * Author:       Mal3k Eden
 */



//exit if accessed directly

if(!defined('ABSPATH')){
    exit;
}

//GLOBAL OPTIONS

$wppsl_options = get_option('wppsl_settings');

require_once( plugin_dir_path(__FILE__) .'includes/wppsl-scripts.php');

require_once( plugin_dir_path(__FILE__) .'includes/wppsl-content.php');

//check if its in admin view

if(is_admin()){

    //load settings
    require_once( plugin_dir_path(__FILE__) .'includes/wppsl-settings.php');
}