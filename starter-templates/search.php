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
        <div class="search content">
            <h2 class="page-title"><?php echo "Search results for '" . get_search_query() . "'"; ?></h2>
            <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <section class="entry-content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt( ); ?></p>
                    </section>
                </article>
                <?php endwhile;
            else : ?>
                <section class="entry-content">
                    <p>No match found</p>
                </section>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>