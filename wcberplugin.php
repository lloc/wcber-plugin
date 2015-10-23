<?php

/*
 * Plugin Name: WordCamp Berlin 2015 Plugin
 * Description: Example plugin - WordCamp Berlin 2015
 * Author:      Dennis Ploetner
 * Author URI:  https://profiles.wordpress.org/realloc
 * Text Domain: wcbertheme
 */

/**
 * Load plugin textdomain
 */
add_action( 'plugins_loaded', function () {
	load_plugin_textdomain( 'wcberplugin', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
} );

/**
 * do_action( 'wcberplugin/regular' );
 */
add_action( 'wcberplugin/regular', function () {
	echo '<h2>', __( 'Hello, dear user!', 'wcberplugin' ), '</h2>';

	echo '<p>';
	_e( 'Howdy!', 'wcberplugin' );
	echo '</p>';

	$stars = 1;
	$str   = _n( 'One star', 'More stars', $stars, 'wcberplugin' );
	echo $str; // One star

	$stars = 3;
	printf( _n( '%d star', '%d stars', $stars, 'wcberplugin' ), $stars ); // 3 stars
} );

/**
 * do_action( 'wcberplugin/with_context' );
 */
add_action( 'wcberplugin/with_context', function () {
	echo '<h2>', _x( 'Hello, dear user!', 'With Context', 'wcberplugin' ), '</h2>';

	echo '<p>';
	_ex( 'Howdy!', 'With Context', 'wcberplugin' );
	echo '</p>';

	$stars = 1;
	$str   = _nx( 'One star', 'More stars', $stars, 'With Context', 'wcberplugin' );
	echo $str; // One star

	$stars = 3;
	printf( _nx( '%d star', '%d stars', $stars, 'With Context', 'wcberplugin' ), $stars ); // 3 stars
} );

/**
 * do_action( 'wcberplugin/esc_text' );
 */
add_action( 'wcberplugin/esc_text', function () {
	printf( '<h2 title="%s">%s</h2>',
		esc_attr__( 'Hello, dear user!', 'wpberplugin' ),
		esc_html__( 'Hello, dear user!', 'wpberplugin' ) );

	echo '<p>';
	esc_attr_e( 'Howdy!', 'wcberplugin' );
	esc_html_e( 'Hallo!', 'wcberplugin' );
	echo '</p>';

	esc_attr_x( 'It is not in the stars to hold our destiny but in ourselves.', 'William Shakespeare', 'wcberplugin' );
	esc_html_x( 'We are all of us stars, and we deserve to twinkle.', 'Marilyn Monroe', 'wcberplugin' );
} );










