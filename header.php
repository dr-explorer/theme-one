<?php
/**
 * The header for Theme One.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme One
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page">
        <header class="site-header">
            <?php if ( is_front_page()) { ?>
                <h1><?php bloginfo( 'name' ); ?></h1>
            <?php }
            else { ?>
                <h1><a href="<?php echo esc_url( home_url( '/' )); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php } ?>
            <nav id="site-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'site-navigation' )); ?>
                <?php get_search_form(); ?>
            </nav>
        </header>
