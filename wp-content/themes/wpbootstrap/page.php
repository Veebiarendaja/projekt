<?php get_header(); ?>

    <div class="content-wrap global-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- rest of the loop -->
    <!-- the title, the content etc.. -->
    <h1><?php the_title(); ?></a></h1>
    <?php the_content(); ?>

<?php endwhile; endif; wp_reset_query();?>

    </div>
    <?php get_footer(); ?>