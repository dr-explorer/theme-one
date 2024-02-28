<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 *
 * A theme might need to 'support' further features
 * And/or register a sidebar/sidebars
 * Enqueue Javascript files or additional style sheets
 * Maybe limit content width, or change excerpt length
 * Perhaps even disable the block editor and remove global CSS ...
 *
 * @package Theme One
 * @since 1.0
 */

if ( ! function_exists( 'theme1_setup' )) {
    function theme1_setup() {
        load_theme_textdomain( 'theme-one', get_template_directory() . '/languages' );

	   /*
		* Let WordPress manage the page titles.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
        add_theme_support( 'title-tag' );
        /*add_theme_support( 'html5', array() );*/
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'theme1_setup' );
}

if ( ! function_exists( 'theme1_enqueue_assets' )) {
    function theme1_enqueue_assets() {
        wp_enqueue_style( 'theme1_style', get_stylesheet_uri() );
        /* wp_enqueue_style( 't1-googlefonts', 'https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), null );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'theme1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true ); */
    }
    add_action( 'wp_enqueue_scripts', 'theme1_enqueue_assets' );
}

if ( ! function_exists( 'theme1_navigation' )) {
    function theme1_navigation() {
        register_nav_menu( 'site-navigation', 'Website Menu' ); /*'Website Menu' is a name; the theme will assign the name, via its slug (in this case, 'site-navigation'), to a particular page location in a template; the menu itself then needs to be constructed by the admin user and assigned to that location*/
    }
    add_action( 'init', 'theme1_navigation' );
}