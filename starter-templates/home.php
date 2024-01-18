<?php
/**
 * The template file for a blog-based home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'posts' ); ?>
        <?php endwhile; endif; ?>
    </main>
    <?php get_footer(); ?>