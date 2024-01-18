<?php
/**
 * The template for displaying comments (in a page area)
 * 
 * It will only be called if comments on posts are enabled
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme One
 * @since 1.0
 */
?>
        <section class="">
            <ol>
                <?php wp_list_comments(); ?>
            </ol>
            <?php comment_form(); ?>
        </section>
