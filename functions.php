<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 *
 * @package Theme One
 * @since 1.0
 */

if ( ! function_exists( 'theme1_setup' )) {
    function theme1_setup() {
	load_theme_textdomain( 'theme-one', get_template_directory() . '/languages' );       
    add_theme_support( 'title-tag', 'html5', 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'theme1_setup' );
}

if ( ! function_exists( 'theme1_navigation' )) {
    function theme1_navigation() {
        register_nav_menu( 'site-navigation', __( 'Website Menu' ));
    }
    add_action( 'init', 'theme1_navigation' );
}