            <?php $id = get_the_ID(); $cats = get_the_category($id); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <p class="subhead"><?php the_time('l, jS F Y') ?><br>&lsquo;<?php echo $cats[0]->name; ?>&rsquo; /  By <?php the_author() ?></p>
                </header>

                <section class="entry-content">
                    <p class="container"><?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?></p>
                    <?php the_content(); ?>
                    <?php comments_template(); ?>
                    <?php the_post_navigation( array(
                        'prev_text'  => __( '&laquo; (Older): &lsquo;%title&rsquo;' ),
                        'next_text'  => __( '(Newer): &lsquo;%title&rsquo; &raquo;' ),
                      ) );
                    ?>
                </section>
            </article>
            