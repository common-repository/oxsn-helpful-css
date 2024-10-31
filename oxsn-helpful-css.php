<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/*
Plugin Name: OXSN Helpful CSS
Plugin URI: https://wordpress.org/plugins/oxsn-helpful-css/
Description: This plugin adds helpful CSS classes!
Author: oxsn
Author URI: https://oxsn.com/
Version: 0.0.4
*/


define( 'oxsn_helpful_css_plugin_basename', plugin_basename( __FILE__ ) );
define( 'oxsn_helpful_css_plugin_dir_path', plugin_dir_path( __FILE__ ) );
define( 'oxsn_helpful_css_plugin_dir_url', plugin_dir_url( __FILE__ ) );

if ( ! function_exists ( 'oxsn_helpful_css_settings_link' ) ) {

	add_filter( 'plugin_action_links', 'oxsn_helpful_css_settings_link', 10, 2 );
	function oxsn_helpful_css_settings_link( $links, $file ) {

		if ( $file != oxsn_helpful_css_plugin_basename )
		return $links;
		$settings_page = '<a href="' . menu_page_url( 'oxsn-helpful-css', false ) . '">' . esc_html( __( 'Settings', 'oxsn-helpful-css' ) ) . '</a>';
		array_unshift( $links, $settings_page );
		return $links;

	}

}

require_once( oxsn_helpful_css_plugin_dir_path . 'main-tab/etc.php' );
require_once( oxsn_helpful_css_plugin_dir_path . 'plugin-tab/etc.php' );
require_once( oxsn_helpful_css_plugin_dir_path . 'customizer/etc.php' );
require_once( oxsn_helpful_css_plugin_dir_path . 'inc/etc.php' );


?>