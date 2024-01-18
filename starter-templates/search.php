<?php
/**
 * The template file for search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <h2><?php echo "Search results for '" . get_search_query() . "'"; ?></h2>
        <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
            <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <div class="entry">
                    <!--Needed: a link to the found page/post-->
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt( ); ?></p>
                </div>
            </section>
            <?php endwhile;
        else : ?>
            <p>No match found</p>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>