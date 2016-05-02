<?php get_header(); ?>
<?php
/*
* Template Name: Blogi
*/
?>
    <div class="content-wrap global-container">

        <?php
        $postperpage = 5;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('posts_per_page=' . $postperpage . '&paged' .
            $paged . '&offset=' . (($paged - 1) * $postperpage) . '&category_name=blogi');
        ?>

        <!-- the loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="posts">
                <div class="posts-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('posts-thumbnail'); ?>
                        <?php else : ?>
                        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" height="150px">
                    <?php endif; ?>
                </div><div class="posts-contentwrap">
                    <h2 class="posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p
                        class="posts-published"><?php the_time('d.m.y'); ?></p>
                    <div class="posts-text">
                        <p><?php the_excerpt(); ?></p>
                    </div><div class="read-more">
                        <a href="<?php the_permalink(); ?>">>>> Loe edasi</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?>

        <!-- pagination -->
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>

        <?php wp_reset_query(); ?>

    </div>

<?php get_footer(); ?>