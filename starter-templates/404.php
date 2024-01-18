<?php
/**
 * The template file for a failed search or a mistyped URL
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <?php get_template_part( 'template-parts/content', '404' ); ?>
    </main>
<?php get_footer(); ?>