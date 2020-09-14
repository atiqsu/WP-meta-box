<?php

/**
 * Plugin Name: All Metabox tester
 * Description: The wow and wow plugin.
 * Plugin URI: http://products.nyxman.com/
 * Author: Atiqur
 * Version: 1.0.0
 * Author URI: https://github.com/atiqsu
 *
 * Text Domain: wp-meta-box
 *
 */

defined( 'ABSPATH' ) || exit;


require __DIR__.'/autoloader.php';




function activate_wp_meta_box() {

}

function deactivate_wp_meta_box() {

}

register_activation_hook( __FILE__, 'activate_wp_meta_box' );
register_deactivation_hook( __FILE__, 'deactivate_wp_meta_box' );



add_action('plugins_loaded', function(){

	do_action('wp_meta_box/before_loaded');

	$plugin = new \WP_Meta_Box\Plugin();
	$plugin->init();

	do_action('wp_meta_box/after_loaded');
});

