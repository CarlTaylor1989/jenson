<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blogentry">
        
        <div class="clear"> </div>

        <div class="postinfo">        
        <ul>

	        <li class="post-date">
	                <div class="d"><?php the_time('d') ?></div>
	                <div class="date-r">
	                        <div class="m"><?php the_time('M') ?></div>
	                        <div class="y"><?php the_time('Y') ?></div>
	                </div> 
	        </li> <!-- .post-date-->

                <?php if (of_get_option('gg_author')) { ?> 
                        <li class="infotitle"> <?php _e('posted by:', 'gxg_textdomain') ?></li>
                        <li class="author">
                                <?php echo the_author_posts_link(); ?>
                        </li> <!-- .author -->                        
                <?php } ?>
                
                <?php if (of_get_option('gg_tags')) { ?>                 
                        <li class="infotitle"> <?php _e('tags:', 'gxg_textdomain') ?></li>
                        <li class="tags">
                                <?php echo the_tags('', '<br />', '' ); ?>
                        </li> <!-- .tags -->                    
                <?php } ?>                

	       <?php if (!of_get_option('gg_commentremove')) { ?> 
                <li class="infotitle"> <?php _e('comments:', 'gxg_textdomain') ?></li>
                <li class="commentnr"><a href="<?php comments_link(); ?>">
                        <?php
                        echo comments_number(' 0 ', ' 1 ', ' % '); ?> </a>
                </li> <!-- .commentnr -->                        
                <?php } ?> 
                
                <li class="infotitle"> <?php _e('share:', 'gxg_textdomain') ?></li>                         
                      
		<li class="tweet-button">
                                <a href="https://twitter.com/share" 
                                class="twitter-share-button" 
                                data-count="none"
                                data-lang="en"  
                                data-url="<?php the_permalink(); ?>" 
                                data-text="<?php the_title(); ?>"
                                >
                                Tweet
                                </a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                                </script>
		</li>  
                
		<li class="fb-button">		                
                        <!--[if IE]>
                        <iframe class="fb-like" src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>%2F&amp;layout=button_count&amp;show_faces=false&amp;width=300&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21&amp;locale=en_US" scrolling="no" frameborder="0" style="border-style:none; overflow:hidden; width:45px; height:21px;" allowTransparency="true">
                        </iframe>
                        <![endif]-->
                        <!--[if !IE]>-->                        
                        <?php
                        //test if mobile device
                        $detect = new Mobile_Detect();                        
                        if ($detect->isMobile()) {
                        ?>
                        <iframe class="fb-like" src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>%2F&amp;layout=button_count&amp;show_faces=false&amp;width=300&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21&amp;locale=en_US" scrolling="no" frameborder="0" style="border-style:none; overflow:hidden; width:45px; height:21px;" allowTransparency="true">
                        </iframe>                        
                        <?php
                        } else {
                        ?> 
                        <iframe class="fb-like" src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>%2F&amp;layout=button_count&amp;show_faces=false&amp;width=300&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21&amp;locale=en_US" style="border-style:none; overflow:hidden; width:45px; height:21px;">
                        </iframe>
                        <?php
                        } ?> 
                        <!--<![endif]-->   
                </li>             
                
        </ul>                
        </div> <!-- .postinfo -->
        
        <div class="post-right">
                <h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to', 'gxg_textdomain') ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>                
                
                <div class="tnail">
                        <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                        }
                        ?>
                </div> <!-- .tnail -->  
                
                <div class="entry">
                        <?php the_content('Read more'); ?>
                </div><!-- .entry -->
        </div>

</div> <!-- .blogentry -->

<div class="blog-bottomborder"></div>

<div class="clear"> </div>

<?php endwhile; else: ?>

<!-- what if there are no Posts? -->
<div id="no_posts">
<p> <br /> <br />  <?php _e('Sorry, no posts matched your criteria.', 'gxg_textdomain'); ?> </p>
</div>

<!-- REALLY stop The Loop. -->
<?php endif; ?>