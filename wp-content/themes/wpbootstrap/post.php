<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bota
 * @since Bota 1.0
 */

get_header(); ?>

    <div class="content-wrap global-container">
        <?php while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <p><?php the_content(); ?></p>
            <?php //comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>
    </div>

<?php get_footer(); ?>