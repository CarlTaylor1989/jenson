<div id="slider" class="nivoSlider">
        
        <?php
                if ( of_get_option('gg_slider') && of_get_option('gg_sliderimages') ) {
    
                        global $wpdb, $post;
                        
                        $slider = of_get_option('gg_sliderimages');
                        $meta = get_post_meta( $slider, 'gxg_slider_images', false );
                        
                        if ( !is_array( $meta ) )
                                $meta = ( array ) $meta;
                                
                        if ( !empty( $meta ) ) {
                                $meta = implode( ',', $meta );
                                    
                                $images = $wpdb->get_col( "
                                        SELECT ID FROM $wpdb->posts
                                        WHERE post_type = 'attachment'
                                        AND ID IN ( $meta )
                                        ORDER BY menu_order ASC
                                    " );
                                    
                                foreach ( $images as $att ) {
                                        // Get image's source
                                        $src = wp_get_attachment_image_src( $att, 'full' );
                                        $src = $src[0];
                                        
                                        $caption = get_post_meta( $att , '_slidercaption', true);
                                        
                                        $cf = get_post_meta( $att , '_sliderurl', true);
                                                                                
                                        // Show image
                                        if ($cf) {    
                                        echo "<a href='$cf'><img src='{$src}' alt='' title='$caption' /></a>";
                                        } else {    
                                        echo "<img src='{$src}' alt='' title='$caption' />";
                                        }
                                        
                                }
                        }        
                }        
        ?>
</div><!-- .slider-->