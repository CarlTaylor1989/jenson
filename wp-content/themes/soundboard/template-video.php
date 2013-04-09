<?php
/*
Template Name: Video
*/
?>

<?php get_header(); ?>

        <div id ="content" class="video grid_12">
                
                <h1 class="pagetitle"> <?php the_title(); ?> </h1>
                
                <ul class="video">
                <?php  
                        global $post;
                        
                        $args = array(
                                        'order' => 'DESC',
                                        'post_type' => 'video',
                                        'posts_per_page' => -1 );
                        
                        $loop = new WP_Query( $args );
                        
                        while ( $loop->have_posts() ) : $loop->the_post();                        
                        
                        $video_title = $post->post_title;
                        $video_thumb = get_the_post_thumbnail($post->ID, 'video', array('title' => '')) ;
                        $thumb_path = wp_get_attachment_image_src(get_post_thumbnail_id(), 'video');
                        $video = get_post_meta($post->ID, 'gxg_videoembedcode', true);
                        $video2 = get_post_meta($post->ID, 'gxg_videofile', true);
                        $video_id = get_the_ID();
                        
                        //open videos on mobile device in browser and not in youtube app
                        $embed = $video;
                        $repl = "http://youtu.be/";
                        $emb = "http://www.youtube.com/embed/";                        
                        $mobile_embed = str_replace($repl, $emb, $embed);

                        $embed2 = $video;
                        $repl2 = "http://vimeo.com/";
                        $emb2 = "http://player.vimeo.com/video/";                        
                        $mobile_embed2 = str_replace($repl2, $emb2, $embed2);                                            
                    
                        //test if mobile device
                        $detect = new Mobile_Detect();
                        
                        if ($detect->isMobile() and $video and strpos($video,'youtu') !== false) {
                        ?>  
                                <li>   
                                        <a href="<?php echo $mobile_embed; ?>" title="">                                              
                                                
                                                <div class="video_item mosaic-block-v bar">                                	
                                                        <div class="video-icon">
                                                                        <div class="details mosaic-overlay vid-size">
                                                                                <?php echo $video_title; ?>
                                                                        </div>
                                                                                                        
                                                        </div>                                                
                                                        <div class="mosaic-backdrop">                                                
                                                                <?php echo $video_thumb; ?>  
                                                        </div>
                                                </div><!-- .video_item-->
                                        </a>                                      
                                </li>
                                
                        <?php
                        }        

                        elseif ($detect->isMobile() and $video and strpos($video,'vimeo') !== false) {
                        ?>  
                                <li>   
                                        <a href="<?php echo $mobile_embed2; ?>" title="">                                              
                                                
                                                <div class="video_item mosaic-block-v bar">                                	
                                                        <div class="video-icon">
                                                                        <div class="details mosaic-overlay vid-size">
                                                                                <?php echo $video_title; ?>
                                                                        </div>
                                                                                                        
                                                        </div>                                                
                                                        <div class="mosaic-backdrop">                                                
                                                                <?php echo $video_thumb; ?>  
                                                        </div>
                                                </div><!-- .video_item-->
                                        </a>                                      
                                </li>
                                
                        <?php
                        }                           
                                                     
                        elseif ($detect->isMobile() and $video2) {
                        ?>                        
                                <li>
                                        <div class="video_item"> 
                                                <div id='vb_<?php echo $video_id; ?>'> Loading Video... </div>
                                        </div>
                                        
                                        <script type='text/javascript'>                                
                                                jwplayer('vb_<?php echo $video_id; ?>').setup({
                                                        'flashplayer': '<?php bloginfo('template_directory'); ?>/jwplayer/player.swf',
                                                        'file': '<?php echo $video2; ?>',
                                                        'id': 'id_<?php echo $video_id; ?>',
                                                        'autostart': 'false',
                                                        'skin': '<?php bloginfo('template_directory'); ?>/jwplayer/soundboard.zip',
                                                        'skin': '<?php bloginfo('template_directory'); ?>/jwplayer/soundboard/soundboard.xml',
                                                        'image': '<?php print $thumb_path[0]; ?>',
                                                        'controlbar': 'none',
                                                        'width': '220',
                                                        'height': '140'
                                                });
                                        </script>             
                                        
                                </li>
                                
                        <?php
                        }
                        elseif ($video){
                        ?>                        
                                <li>
                                        <a href="<?php echo $video; ?>" data-rel="prettyPhoto" target="_blank" title="">                                              
                                                
                                                <div class="video_item mosaic-block-v bar">                                	
                                                        <div class="video-icon">
                                                                        <div class="details mosaic-overlay vid-size">
                                                                                <?php echo $video_title; ?>
                                                                        </div>
                                                                                                        
                                                        </div>                                                
                                                        <div class="mosaic-backdrop">                                                
                                                                <?php echo $video_thumb; ?>  
                                                        </div>
                                                </div><!-- .video_item-->
                                        </a>
                                </li>
                                
                        <?php
                        } else {
                        ?>                        
                                <li>
                                        <a href="#<?php echo $video_id; ?>" data-rel="prettyPhoto" target="_blank"  title="" >
                                                       
                                                <div class="video_item mosaic-block-v bar">                                             
                                                        <div class="video-icon">
                                                                <div class="details mosaic-overlay vid-size">
                                                                        <?php echo $video_title; ?>
                                                                </div>                                                                
                                                                 
                                                        </div>   
                                                        <div class="mosaic-backdrop">                                                
                                                                <?php echo $video_thumb; ?>     
                                                        </div>                                                       
                                                        
                                                        <div id="<?php echo $video_id; ?>" class="hidden">
                                                                <div id='vb_<?php echo $video_id; ?>'> Loading Video... </div>
                                                        </div>
                                                                
                                                </div><!-- .video_item-->
                                        </a>
        
                                        <script type='text/javascript'>                                
                                                jwplayer('vb_<?php echo $video_id; ?>').setup({
                                                        'flashplayer': '<?php bloginfo('template_directory'); ?>/jwplayer/player.swf',
                                                        'file': '<?php echo $video2; ?>',
                                                        'id': 'id_<?php echo $video_id; ?>',
                                                        'autostart': 'true',
                                                        'skin': '<?php bloginfo('template_directory'); ?>/jwplayer/soundboard.zip',
                                                        'skin': '<?php bloginfo('template_directory'); ?>/jwplayer/soundboard/soundboard.xml',
                                                        //'image': '<?php print $thumb_path[0]; ?>',
                                                        'controlbar': 'bottom',
                                                        'width': '540',
                                                        'height': '380'
                                                });
                                        </script>             
                                        
                                </li>                      
                        <?php
                        }
       
                        endwhile;
                        
                        // Always include a reset at the end of a loop to prevent conflicts with other possible loops                 
                        wp_reset_query();
                ?>
                </ul>
                

                
        </div><!-- #content-->
        
        <div class="clear">
        </div><!-- .clear-->

<?php get_footer(); ?>