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
get_sidebar();  // front page only, and before 'main' - but there are many other options!
?>
	<main>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2>

            <p><?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?></p>

            <article class="entry">
                <?php the_content(); ?>
            </article>
        </section>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>