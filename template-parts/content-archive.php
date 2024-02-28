            <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                </header>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <p><?php the_tags(); ?></p>
                </div>
            </section>
            