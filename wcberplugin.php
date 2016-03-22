<?php

/*
 * Plugin Name: wcber
 * Description: Example plugin - WordCamp Berlin 2015
 * Author:      Dennis Ploetner
 * Author URI:  https://profiles.wordpress.org/realloc
 * Text Domain: wcberplugin
 */

/**
 * Load plugin textdomain on plugins_loaded
 */
add_action( 'plugins_loaded', function () {
	$path = plugin_basename( dirname( __FILE__ ) ) . '/languages';
	load_plugin_textdomain( 'wctrn', false, $path );
} );

/**
 * Load theme textdomain on after_theme_setup
 */
add_action( 'after_setup_theme', function () {
	$path = get_template_directory() . '/languages';
	load_theme_textdomain( 'wctrn', $path );
} );

/**
 * Regular functions
 */
printf( '<h2>%s</h2>', __( 'Hello, dear user!', 'wctrn' ) );

_e( 'Howdy pal!', 'wctrn' );

$stars = 3;
printf( _n( '%d star', '%d stars', $stars, 'wctrn' ), $stars );
// Output => 3 stars

/**
 * With context
 */
printf( '<h2>%s</h2>', _x( 'Hello, dear user!', 'With Context', 'wctrn' ) );

_ex( 'Howdy!', 'With Context', 'wctrn' );

$stars = 3;
printf( _nx( '%d star', '%d stars', $stars, 'With Context', 'wctrn' ), $stars );
// Output => 3 stars

/**
 * Escape output
 */
printf( '<h2 title="%s">%s</h2>',
	esc_attr__( 'Hello, dear user!', 'wctrn' ),
	esc_html__( 'Howdy pal!', 'wctrn' )
);

/* translators: Here is a message for you. */
esc_html_e( 'How are you?', 'wctrn' );

esc_html_x(
	'It is not in the stars to hold our destiny but in ourselves.',
	'William Shakespeare',
	'wctrn'
);










