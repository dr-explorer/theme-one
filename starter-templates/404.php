<?php
/**
 * The template file for a failed search or a mistyped URL
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 *
 * @package Theme One
 * @since 1.0
 */

get_header();
?>
	<main>
        <div class="main-content">
            <?php get_template_part( 'template-parts/content', '404' ); ?>
        </div>
    </main>
<?php get_footer(); ?>