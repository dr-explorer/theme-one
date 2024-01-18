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
        <header class="entry-header">
            <h2 class="entry-title">><?php echo "Search results for '" . get_search_query() . "'"; ?></h2>
        </header>
        <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
            <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <div class="entry-content">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php the_excerpt( ); ?></p>
                </div>
            </section>
            <?php endwhile;
        else : ?>
            <p>No match found</p>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>