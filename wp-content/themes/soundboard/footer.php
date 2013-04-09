</div><!-- #wrapper -->

</div><!-- #bg-wrapper -->

<div id="footer">
              
        <?php
                if ( is_active_sidebar( 'sidebarf1'  )
                or is_active_sidebar( 'sidebarf2' )
                or is_active_sidebar( 'sidebarf3'  )
                or is_active_sidebar( 'sidebarf4'  )
                )
        { ?>        
        <div id="footerwrapper">
  
                <div id="footer-widget-area">
                  
                        <?php if ( is_active_sidebar( 'sidebarf1' ) ) : ?>
                                <div id="footerw1" class="widget-area grid_3">                                        
                                        <?php dynamic_sidebar( 'sidebarf1' ); ?>
                                </div><!-- #footerw1 .widget-area -->
                        <?php endif; ?>
                  
                        <?php if ( is_active_sidebar( 'sidebarf2' ) ) : ?>
                                <div id="footerw2" class="widget-area grid_3">
                                        <?php dynamic_sidebar( 'sidebarf2' ); ?>
                                </div><!-- #footerw2 .widget-area -->
                        <?php endif; ?>
                         
                        <?php if ( is_active_sidebar( 'sidebarf3' ) ) : ?>
                                <div id="footerw3" class="widget-area grid_3">
                                        <?php dynamic_sidebar( 'sidebarf3' ); ?>
                                </div><!-- #footerw3 .widget-area -->
                        <?php endif; ?>
                          
                        <?php if ( is_active_sidebar( 'sidebarf4' ) ) : ?>
                                <div id="footerw4" class="widget-area grid_3">
                                        <?php dynamic_sidebar( 'sidebarf4' ); ?>
                                </div><!-- #footerw4 .widget-area -->
                        <?php endif; ?>
                  
                </div><!-- #footer-widget-area -->
         
        </div><!-- #footerwrapper -->
        <?php
        } ?>  
         
        <div class="clear">
        </div><!-- .clear-->

        <?php
                if ( of_get_option('gg_soundcloud')
                or of_get_option('gg_itunes')
                or of_get_option('gg_lastfm')
                or of_get_option('gg_twitter')
                or of_get_option('gg_youtube')
                or of_get_option('gg_fb')
                or of_get_option('gg_beatport')
                or of_get_option('gg_social1')                
                or of_get_option('gg_social2')                    
                or of_get_option('gg_social3')                    
                or of_get_option('gg_social4')
                or of_get_option('gg_social5')                    
                )
        { ?>
        <div id="social">
                <ul id="socialicons">
                        <?php
                        if ( of_get_option('gg_soundcloud') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_soundcloud'); ?>" target="_blank" class="soundcloud" > </a> </li>                        
                        <?php }

                        if ( of_get_option('gg_lastfm') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_lastfm'); ?>" target="_blank" class="lastfm" > </a> </li>                        
                        <?php }                   
                        
                        if ( of_get_option('gg_youtube') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_youtube'); ?>" target="_blank" class="youtube" > </a> </li>                        
                        <?php }
                        
                        if ( of_get_option('gg_itunes') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_itunes'); ?>" target="_blank" class="itunes" > </a> </li>                        
                        <?php }
                        
                        if ( of_get_option('gg_twitter') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_twitter'); ?>" target="_blank" class="twitter" > </a> </li>                        
                        <?php }                       

                        if ( of_get_option('gg_fb') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_fb'); ?>" target="_blank" class="fb" > </a> </li>                        
                        <?php }
                        
                        if ( of_get_option('gg_beatport') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_beatport'); ?>" target="_blank" class="beatport" > </a> </li>                        
                        <?php }                        

                        if ( of_get_option('gg_social1') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_socialprofile1'); ?>" target="_blank" class="social1" > </a> </li>                        
                        <?php }   

                        if ( of_get_option('gg_social2') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_socialprofile2'); ?>" target="_blank" class="social2" > </a> </li>                        
                        <?php }
                        
                        if ( of_get_option('gg_social3') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_socialprofile3'); ?>" target="_blank" class="social3" > </a> </li>                        
                        <?php }
                        
                        if ( of_get_option('gg_social4') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_socialprofile4'); ?>" target="_blank" class="social4" > </a> </li>                        
                        <?php }
                        
                        if ( of_get_option('gg_social5') ) {
                        ?> <li> <a href="<?php echo of_get_option('gg_socialprofile5'); ?>" target="_blank" class="social5" > </a> </li>                        
                        <?php }                           
                        ?>
                </ul>
        </div><!-- .social-->
        <?php
        } ?>  

        <div id="footerbottom">
                  
                <div id="copyright">
                        <div id="copyright-text" class="small">
                        <?php
                        if (get_option("bc_copyright") != '') {
                        echo stripslashes(get_option("bc_copyright"));
                        } else {
                        ?>
                        &copy;
                        <?php $the_year = date("Y"); echo $the_year; ?>
                        <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved.', 'gxg_textdomain') ?>
                        <?php }
                        ?>
                        </div>
                </div><!-- #copyright -->
                  
        </div><!-- #footerbottom-->

</div><!-- #footer -->

<?php wp_footer();  ?>

</div> <!-- #bg-image-->
</body>

</html>