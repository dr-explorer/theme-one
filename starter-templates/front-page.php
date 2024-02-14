<?php
/**
 * The template file for front pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <div class="front content">
            <!--<?php get_sidebar(); ?>-->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'front' ); ?>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php get_footer(); ?>