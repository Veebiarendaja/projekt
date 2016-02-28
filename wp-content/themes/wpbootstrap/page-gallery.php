<?php
/*
 * Template Name: Gallery
 */
?>

<?php get_header(); ?>
<div class="content-wrap global-container">
    <div class="gallery">
        <?php query_posts(array('category_name' => 'gallery'));
        while (have_posts()) : the_post(); ?>
            <?php // image gallery content
            if (has_shortcode($post->post_content, 'gallery')) {
                $gallery = get_post_gallery_images($post->ID);

                foreach ($gallery as $image) {// Loop through each image in each gallery
                    echo '<div class="img-container">
            <div class="img-wrap">
                <img src=" ' . str_replace('-150x150', '', $image) . ' " alt="">
            </div><div class="kirjeldus">
                <div class="kirjeldus-tekst"><h4>Pealkiri Kassid</h4>
                    <p> 100cm 500cm 1990</p>
                </div>
            </div>
        </div>';
                }
            } ?>
            <?php wp_link_pages(); ?>
            <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
