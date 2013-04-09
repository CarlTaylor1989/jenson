<?php get_header(); ?>

        <div id="content" class="grid_8">

                <!-- Start the Loop. -->
                <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                  
                $video = get_post_meta($post->ID, 'gxg_videoembedcode', true); 
                ?>

                <div class="clear"> </div>                  

                <div class="video"> 
                  	<?php echo $video; ?> 
                </div>

                <div class="clear"> </div>

                <!-- Stop The Loop (but note the "else:" - see next line). -->
                <?php endwhile; else: ?>

                <!-- what if there are no Posts? -->
                <p><?php _e('Sorry, no posts matched your criteria.', 'gxg_textdomain') ?></p>

                <!-- REALLY stop The Loop. -->
                <?php endif; ?>

                <div id="comments" >
                        <?php comments_template(); ?>
                </div><!-- #comments-->

        </div><!-- #content-->

        <div class="clear">
        </div><!-- .clear-->

<?php get_footer(); ?>