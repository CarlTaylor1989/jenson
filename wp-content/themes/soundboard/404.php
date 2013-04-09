<?php get_header(); ?>

         <div id="content" class="grid_9">

		       <div id="error">
		       <!-- Error Message -->
		       <p>
		       <?php
		       if ( of_get_option('gg_404error') ) {
		       echo stripslashes(of_get_option('gg_404error'));
		       } else {
		       ?>
		       <h1> <?php _e('404 ERROR - Not Found', 'gxg_textdomain'); ?></h1>  	
		       <p> <?php _e('The page you requested does not exist.', 'gxg_textdomain'); ?></p> 
		       <?php       
		       }
		       ?>
		       </p>
		       </div><!-- #error-->

         </div><!-- #content-->

                <div id="sidebar" class="grid_3">
                       <?php get_sidebar(); ?>
                </div><!-- #sidebar-->

         <div class="clear">
         </div><!-- .clear-->

<?php get_footer(); ?> 