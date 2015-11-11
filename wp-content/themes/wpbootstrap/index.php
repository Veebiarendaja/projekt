<?php get_header(); ?>

    <div class="content-wrap">
        <h1 style="text-align: center">ART PAGE</h1>

        <?php
        // the query to set the posts per page to 3
        //print_r($wp_query->query_vars);
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
        //print_r($paged);
        //$args = array('posts_per_page' => 2, 'paged' => $paged);
        query_posts('posts_per_page=2&paged' . $paged . '&offset=' .  (($paged-1)*2)); ?>
        <!-- the loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- rest of the loop -->
            <!-- the title, the content etc.. -->
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        <?php endwhile; ?>
            <!-- pagination -->
            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>

            <?php //print_r( get_the_posts_pagination() ); ?>

        <?php else : ?>
            <!-- No posts found -->
        <?php endif; ?>

        <?php wp_reset_query(); ?>

    </div>


<?php get_footer(); ?>