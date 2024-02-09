<?php
/**
 * The template for displaying widgets (in a page area)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * Will be invoked by a call to get_sidebar() (Cf. get_header(), get_footer())
 * More complex sidebars may need to be registered in functions.php (using register_sidebar())
 * The actual widgets can be hard coded in, or inserted by a site administrator
 *
 * @package Theme One
 * @since 1.0
 */
?>
        <aside class="sidebar" id="site-listings">
            <section class="links" id="latest">
                <h3>Latest Posts</h3>
                <ul>
                    <?php
                        $recent_posts = wp_get_recent_posts();
                        foreach( $recent_posts as $recent ) {
                            printf( '<li><a href="%1$s">%2$s</a></li>',
                                esc_url( get_permalink( $recent['ID'] ) ),
                                apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                            );
                        }
                    ?>
                </ul>
            </section>

            <section class="links" id="categories">
                <h3>Categories</h3>
                  <ul>
                    <?php wp_list_categories('title_li='); ?>
                  </ul>
            </section>

            <section class="links" id="archives">
                <h3>Archives</h3>
                  <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                  </ul>
            </section>
        </aside>
