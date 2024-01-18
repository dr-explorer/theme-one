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
        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

            <p class="subhead"><?php the_time('l, jS F Y') ?><br>By <?php the_author() ?></p>

            <div class="entry">
                <?php the_excerpt(); ?>
            </div>
        </section>
        <?php endwhile; endif; ?>
    </main>
    <?php get_footer(); ?>