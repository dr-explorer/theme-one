            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </header>

                <p class="subhead"><?php the_time('l, jS F Y') ?><br>By <?php the_author() ?></p>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            