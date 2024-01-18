<?php
/**
 * The template file for blog archive pages
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

            <div class="entry">
                <?php the_excerpt(); ?>
                <p><?php the_tags(); ?></p>
            </div>
        </section>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>