<?php
/**
 * The template file for single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <div class="post-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'post' ); ?>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php get_footer(); ?>