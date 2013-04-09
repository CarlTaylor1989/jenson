<?php get_header(); ?>

        <div id="content" class="grid_9">

                <h1 class="pagetitle"> <?php the_title(); ?> </h1>
                
                <div class="page-content">
                
                <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                
                <!-- Display the Post's Content in a div box. -->
                <div class="single_entry">
                        <?php the_content(); ?>
                </div>
                                
                <div class="clear"> </div>
                                
                <!-- Stop The Loop (but note the "else:" - see next line). -->
                <?php endwhile; else: ?>
                                
                <!-- what if there are no Posts? -->
                <p><?php _e('Sorry, no posts matched your criteria.', 'gxg_textdomain'); ?> </p>
                                
                <!-- REALLY stop The Loop. -->
                <?php endif; ?>
                
                </div><!-- .page-content-->
                                
        </div><!-- #content-->

        <div id="sidebar" class="grid_3">
        <?php get_sidebar(); ?>
        </div><!-- #sidebar-->

        <div class="clear">
        </div><!-- .clear-->

<?php get_footer(); ?>