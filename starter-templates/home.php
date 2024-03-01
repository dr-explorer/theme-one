<?php
/**
 * The template file for a blog-based home page
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
	    <div class="post-page content">
            <article>
            <h2 class="page-title">Posts</h2>
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
	            <?php next_posts_link( "&laquo; Previous posts"); ?>
	            <?php previous_posts_link( "More recent posts &raquo;"); ?>
    	        </p>
            </article>
            <?php get_sidebar(); ?>
        </div>
    </main>
    <?php get_footer(); ?>