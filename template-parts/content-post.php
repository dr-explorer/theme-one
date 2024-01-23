            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </header>

                <p class="subhead"><?php the_time('l, jS F Y') ?><br>By <?php the_author() ?></p>

                <p><?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?></p>

                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php comments_template(); ?>
                </div>
            </article>
            