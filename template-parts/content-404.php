            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h2 class="entry-title">Page not found</h2>
                </header>

                <section class="entry-content">
                    <p><a href="<?php echo esc_url( home_url( '/' )); ?>">Return to home page</a>, or try a search.</p>
                    <?php get_search_form(); ?>
                </section>
            </article>
            