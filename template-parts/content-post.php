            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </header>

                <p class="subhead"><?php the_time('l, jS F Y') ?><br>By <?php the_author() ?></p>

                <p class="container"><?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?></p>

                <section class="entry-content">
                    <?php the_content(); ?>
                    <?php comments_template(); ?>
                    <?php the_post_navigation( array(
                        'prev_text'  => __( '&laquo; (Older): &lsquo;%title&rsquo;' ),
                        'next_text'  => __( '(Newer): &lsquo;%title&rsquo; &raquo;' ),
                      ) );
                    ?>
                </section>
            </article>
            