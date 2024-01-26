<?php
/**
 * The template for displaying the footer
 *
 * Closes the #page <div> — the page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * To satisfy WordPress translation requirements, you will need to substitute your literal text domain for the PHP variable $textdomain (and you can delete the assignment).
 *
 * @package Theme One
 */
?>
        <footer class="site-footer">
            <?php
            /*get_sidebar( "footer" );*/
            $theme_data = wp_get_theme();
            $theme_name = '&ldquo;' . $theme_data->get( 'Name' ) . '&rdquo;';
            $text_domain = $theme_data->get( 'TextDomain' );
            $author = $theme_data->get( 'Author' );
            $author_url = $theme_data->get( 'AuthorURI' );
            ?>
            <div id="copyright">
                <p>
                <?php printf( esc_html__( 'Powered by %s', $text_domain ), 'WordPress  |  ' );
                printf( esc_html__( 'Theme: %1$s by %2$s', $text_domain ), $theme_name, '<a target="_blank" href="' . $author_url . '">' . $author . '</a>' ); ?>
                </p>
            </div>
        </footer>
    </div> <!-- #page -->
    <?php wp_footer(); ?>
</body>
</html>