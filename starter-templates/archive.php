<?php
/**
 * The template file for blog archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <div class="archive content">
            <article>
                <h2 class="page-title">
                <?php if (is_day()) {
                    echo get_the_date( 'jS F Y' ), " posts";
                } else if (is_month()) {
                    echo get_the_date( 'F Y' ), " posts";
                } else if ( is_category() ) {
                    echo "&lsquo;", single_cat_title(), "&rsquo; posts";
                } ?>
                </h2>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'archive' ); ?>
                <?php endwhile; endif; ?>
            </article>
            <?php get_sidebar(); ?>
        </div>
    </main>
<?php get_footer(); ?>