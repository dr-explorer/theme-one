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
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

            <p class="subhead"><?php the_time('l, jS F Y') ?><br>By <?php the_author() ?></p>

            <p><?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?></p>

            <article class="entry">
                <?php the_content(); ?>
                <?php comments_template(); ?>
            </article>
        </section>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>