<?php get_header(); ?>

    <div class="content-wrap global-container">
        <h1 style="text-align: center">ART PAGE</h1>

        <?php
        $postperpage = 4;
        // the query to set the posts per page to 3
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('posts_per_page=' . $postperpage . '&paged' . $paged . '&offset=' . (($paged - 1) * $postperpage));
        ?>

        <!-- the loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="posts">
                <div class="posts-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('posts-thumbnail'); ?>
                    <?php endif; ?>
                </div><div class="posts-contentwrap">
                    <h2 class="posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p
                        class="posts-published"><?php the_time('d.m.y'); ?></p>
                    <div class="posts-text">
                        <p><?php the_excerpt(); ?></p>
                    </div><div class="read-more">
                        <a href="<?php the_permalink(); ?>">>>> Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <?php else : ?>
            <!-- No posts found -->
        <?php endif; ?>

        <!-- pagination -->
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>

        <?php wp_reset_query(); ?>

    </div>

<?php get_footer(); ?>