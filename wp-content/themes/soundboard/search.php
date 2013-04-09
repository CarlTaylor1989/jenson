<?php get_header(); ?>

                <div id ="content" class="grid_9">
                        
                        <div id="blog_content">
                        
                        <h1 class="pagetitle"> <?php _e('Search Results for:', 'gxg_textdomain'); ?> <?php echo $_GET['s']; ?></h1>

                                <?php
                                get_template_part('loop');
                                ?>

                                <div id="pagination">
                                        <?php gg_pagination(); ?>
                                </div><!-- #pagination-->

                        </div><!-- #blog_content-->

                 </div><!-- #content-->

                 <div id="sidebar" class="grid_3">
                         <?php get_sidebar(); ?>
                 </div><!-- #sidebar-->

                 <div class="clear">
                 </div><!-- .clear-->

<?php get_footer(); ?>







                                            

                                  