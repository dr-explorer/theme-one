            <article <?php post_class(); id="post-<?php the_ID(); ?>" ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            