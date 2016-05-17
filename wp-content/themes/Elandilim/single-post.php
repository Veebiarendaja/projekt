<?php get_header(); ?>

    <div class="content-wrap global-container">
        <!-- the loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <div class="post-title">
                    <h1><?php the_title(); ?></h1><p class="post-published">Avaldatud <?php the_time('d.m.y'); ?></p>
                </div><div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('post-thumbnail'); ?>
                    <?php endif; ?>
                </div>
                    <div class="post-text">
                        <p><?php the_content(); ?></p>
                    </div>
            </div>
        <?php endwhile; ?>

        <?php else : ?>
            <!-- No posts found -->
        <?php endif; ?>

    </div>

<?php get_footer(); ?>