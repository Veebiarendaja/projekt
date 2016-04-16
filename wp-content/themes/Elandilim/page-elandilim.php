<?php
/*
 * Template Name: wpbootstrap
 */
?>

<?php get_header(); ?>

    <div class="content-wrap global-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="about">
                <div class="about-content">
                    <div class="about-title">
                        <div class="about-slider">
                            <div class="slide">
                                <h1>AAAAA</h1>
                                <h1>Heehee</h1>
                            </div>
                        </div>
                    </div>
                    <div class="about-text">
                        <p><?php the_content(); ?></p>
                    </div>
                </div><div class="about-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('about-thumbnail'); ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>

        <?php else : ?>
            <!-- No posts found -->
        <?php endif; ?>

    </div>
<?php get_footer(); ?>