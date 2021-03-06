<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>

        <div id ="content" class="gallery grid_12">
                
                <h1 class="pagetitle"> <?php the_title(); ?> </h1>
                
                <ul class="gallery">
                <?php  
                        global $post;
                        
                        $args = array(
                                        'order' => 'DESC',
                                        'post_type' => 'gallery',
                                        'posts_per_page' => -1 );
                        
                        $loop = new WP_Query( $args );
                        
                        while ( $loop->have_posts() ) : $loop->the_post();
                        
                        $gallery_title = $post->post_title;
                        $gallery_thumb = get_the_post_thumbnail($post->ID, 'square1', array('title' => ''))                               
                ?>                
                
                        <li>
                                <div class="gallery_item mosaic-block bar">
                                        <a href="<?php the_permalink() ?>">                                        
                                                <div class="details mosaic-overlay gal-size">
                                                        <?php echo $gallery_title; ?>
                                                </div>
                                        
                                                <div class="album_artwork mosaic-backdrop">                                                
                                                        <?php echo $gallery_thumb; ?>     
                                                </div>
                                        </a>
                                </div><!-- .gallery_item-->
                        </li>
		<?php       
                        endwhile;
                        
                        // Always include a reset at the end of a loop to prevent conflicts with other possible loops                 
                        wp_reset_query();
                ?>
                </ul>
        </div><!-- #content-->
        
        <div class="clear">
        </div><!-- .clear-->

<?php get_footer(); ?>