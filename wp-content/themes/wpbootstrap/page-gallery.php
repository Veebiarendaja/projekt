<?php
/*
 * Template Name: Gallery
 */
?>

<?php get_header(); ?>
    <div class="content-wrap global-container">

        <div class="gallery">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'attachment',
                'post_status' => 'inherit',
                'posts_per_page' => 4,
                'paged' => $paged,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'blog-gal',
                    )
                )
            );
            query_posts($args);

            if (have_posts()) {
                while (have_posts()) : the_post();
                    echo '<div class="img-container">
                        <div class="img-wrap">
                            <img class="image-lightbox" src=" ' . $post->guid . ' " alt="'.get_post_meta( $post->ID, '_wp_attachment_image_alt', true ).'">
                        </div><div class="kirjeldus-wrap">
                        <div class="kirjeldus">
                            <div class="kirjeldus-tekst">
                            <h4>' . $post->post_title . '</h4>
                            <h5>' . $post->post_excerpt . '</h5>
                                <p>' . $post->post_content . '</p>
                            </div></div>
                        </div>
                    </div>';
                    ?>
                <?php endwhile; ?>
                <div class="gallery-navigation">
                    <div class="alignleft"><?php next_posts_link(__('next')); ?></div>
                    <div class="alignright"><?php previous_posts_link(__('previous')); ?></div>
                </div>
            <?php } ?>
            <div id="lightbox">
                <p>Close</p>
                <div id="lightbox-content">
                    <img src="#" />
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>