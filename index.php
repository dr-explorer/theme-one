<?php
/**
 * The fallback template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2>

            <article class="entry">
                <?php the_content(); ?>
            </article>
        </section>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>