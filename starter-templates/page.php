<?php
/**
 * The template file for pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <!--<?php get_sidebar() ?>-->
        <div class="main content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile; endif; ?>
        </div>
        <!--<?php get_sidebar() ?>-->
    </main>
<?php get_footer(); ?>