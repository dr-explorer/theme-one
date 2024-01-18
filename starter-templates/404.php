<?php
/**
 * The template file for a failed search or a mistyped URL
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <section>
            <h2>Page not found</h2>

            <div class="entry">
                <p><a href="<?php echo esc_url( home_url( '/' )); ?>">Return to home page</a></p>
                <?php get_search_form(); ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>