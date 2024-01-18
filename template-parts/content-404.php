            <article <?php post_class(); id="post-<?php the_ID(); ?>" ?>>
                <header class="entry-header">
                    <h2 class="entry-title">Page not found</h2>
                </header>

                <div class="entry-content">
                    <p><a href="<?php echo esc_url( home_url( '/' )); ?>">Return to home page</a>, or try a new search.</p>
                    <?php get_search_form(); ?>
                </div>
            </article>
            