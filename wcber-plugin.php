<?php

/*
 * Plugin Name: WordCamp Berlin 2015 Test Plugin
 * Version: 0.1
 * Description: Example plugin for my slots at the WordCamp Berlin 2015
 * Author: Dennis Ploetner
 * Author URI: https://profiles.wordpress.org/realloc
 */

/**
 * Load plugin textdomain.
 */
function wcberplugin_load_textdomain() {
	load_plugin_textdomain( 'wcberplugin', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'wcberplugin_load_textdomain' );

/**
 * Content filter
 *
 * @param string $content
 *
 * @return string
 */
function wcberplugin_the_content( $content ) {

	return $content;
}

add_filter( 'the_content', 'wcberplugin_the_content' );