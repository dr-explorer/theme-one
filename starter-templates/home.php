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
	    <h2>Latest posts</h2>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'posts' ); ?>
	        <?php endwhile; ?>
	    
	    <?php else: ?>
	        
	        <article class="error">
	            <h3>Sorry, no posts were found</h3>
	        </article>
	    
	    <?php endif; ?>
	    
	    <p class="post-page-navigation">
	        <?php previous_posts_link( "&laquo; More recent posts"); ?>
	        <?php next_posts_link( "Previous posts &raquo;"); ?>
	    </p>
    </main>
    <?php get_footer(); ?>