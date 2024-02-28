            <?php $id = get_the_ID(); $cats = get_the_category($id); ?>
            <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <p class="subhead"><?php the_time('l, jS F Y') ?><br>&lsquo;<?php echo $cats[0]->name; ?>&rsquo; /  By <?php the_author() ?></p>
                </header>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </section>
            