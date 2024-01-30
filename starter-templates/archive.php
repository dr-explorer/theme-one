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
        <div class="main-content">
            <header class="entry-header">
                <h1 class="page-title">
                <?php if (is_day()) {
                    echo "Posts posted on ", get_the_date( 'jS F Y' );
                } else if (is_month()) {
                    echo "Posts posted in ", get_the_date( 'F Y' );
                } else if ( is_category() ) {
                    $categories = get_the_category();
                    echo "Posts in the &lsquo;", $categories[0]->name, "&rsquo; category";
                } ?>
                </h1>
            </header>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'archive' ); ?>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php get_footer(); ?>