            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                </header>

                <section class="entry-content">
                    <?php the_excerpt(); ?>
                    <p><?php the_tags(); ?></p>
                </section>
            </article>
            