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
        add_theme_support( 'title-tag', 'html5', 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'theme1_setup' );
}

if ( ! function_exists( 'theme1_navigation' )) {
    function theme1_navigation() {
        register_nav_menu( 'site-navigation', 'Website Menu' ); /*'Website Menu' is a name; the theme will assign the name, via its slug (in this case, 'site-navigation'), to a particular page location in a template; the menu itself then needs to be constructed by the admin user and assigned to that location*/
    }
    add_action( 'init', 'theme1_navigation' );
}