<?php
/**
 * The template for displaying the footer
 *
 * Closes the #page <div> — the page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme One
 */
?>
        <footer>
            <p><!--some text can go here--></p>
            <div id="copyright">
                <p>
                <?php printf( esc_html__( 'Powered by %s', 'theme-one' ), 'WordPress  |  ' );
                printf( esc_html__( 'Theme: %1$s by %2$s', 'theme-one' ), '&ldquo;Theme One&rdquo;', '<a target="_blank" href="https://www.michael-scannell.com/web/designs2.html">Michael Scannell</a>' ); ?>
                </p>
            </div>
        </footer>
    </div> <!-- #page -->
    <?php wp_footer(); ?>
</body>
</html>