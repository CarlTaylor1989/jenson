<!DOCTYPE html>
        
        <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
        
<!-- BEGIN head -->
<head>
        
        <!-- meta -->
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        
        <!-- title -->
        <title> <?php wp_title(''); ?> <?php bloginfo('name'); ?></title>

        <!-- stylesheets -->
        <link href='http://fonts.googleapis.com/css?family=Ruda:900' rel='stylesheet' type='text/css'>        
        
        <?php if ( of_get_option('gg_font2') ) {
        ?>
        <link href='http://fonts.googleapis.com/css?family=<?php echo urlencode(of_get_option('gg_font2')); ?>' rel='stylesheet' type='text/css'>
        <?php
        } elseif ( of_get_option('gg_font') ) {
        ?>
        <link href='http://fonts.googleapis.com/css?family=<?php echo urlencode(of_get_option('gg_font')); ?>' rel='stylesheet' type='text/css'>
        <?php
        }
        ?>
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/960.css" type="text/css" media="screen" />         
        <?php
        // skin css
        $template_skin = of_get_option('gg_skin');         
        echo "<link rel='stylesheet' id='skin_stylesheet' href='".get_template_directory_uri()."/css/skins/".$template_skin.".css' type='text/css'/>";
        ?>
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css_options_panel.php" type="text/css" media="screen" />
    
        <!-- Pingbacks -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- Calls Wordpress head functions -->
        <?php wp_head(); ?>

        <?php
        if ( of_get_option('gg_favicon') ) {
                  ?>
                  <!-- Favicon -->
                  <link rel="shortcut icon" href="<?php echo of_get_option('gg_favicon'); ?>" />
                  <?php                                    
        }
        ?>
         
        <?php
        if ( of_get_option('gg_google_analytics') ) {
                ?>
                <script type="text/javascript">
                <!-- Google Analytics -->
                <?php
                echo of_get_option('gg_google_analytics');  
                ?>
                </script>
                <?php         
        }
        ?>

</head><!-- END head -->

<!-- BEGIN body -->
<body <?php body_class(); ?>>

<div id="bg-image">

        <div id="header">

                <?php if (!of_get_option('gg_loginsection')) { ?> 
                        
                                <div id="loginwrapper">                     
                                        <ul class="login">
                                                <?php if ( is_user_logged_in() ) {                                          
                                                ?>                                
                                                <li><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout"> <?php _e('LOG OUT', 'gxg_textdomain'); ?></a></li>
                                                <?php } 
                                                else { ?>
                                                <li><a href="<?php bloginfo('stylesheet_directory'); ?>/login.php?ajax=true&amp;width=600&amp;height=420" data-rel="prettyPhoto-login[ajax]"><?php _e('LOG IN', 'gxg_textdomain'); ?></a></li>
                                                 <?php } ?>
                                        </ul>                        
                                </div>  <!--#loginwrapper-->
                <?php } ?>

                <div class="arrow-down"> </div> 
                
                <div id="headertop">                        
                        <?php
                        if ( of_get_option('gg_logo_image') ) {
                        ?><div id="logo">
                                <a href="<?php echo home_url(); ?>" > <img src="<?php echo of_get_option('gg_logo_image'); ?>" /> </a>
                        </div> <!-- #logo-->
                        <div class="clear"> </div>
                        <?php } ?>                        
                                
                        <div id="topnavi">
                        <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'main-menu',
                                        'menu_class' => 'sf-menu',
                                        'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages.
                                        )
                                );
                        ?></div>                        
    
                        <?php
                        if( of_get_option('gg_slider') != "" && is_page_template('template-home.php') ) {                        
                                ?>
                                <div id="slide-bg"> 
                                        <div id="slideshow">                         
                                                                
                                                <?php get_template_part( 'slider' ); ?>
                                                        
                                        </div><!-- #slideshow-->
                                </div><!-- #slide-bg-->    
                        <?php }
                        ?>
                </div> <!-- #headertop-->
                                
        </div> <!-- #header -->
 
        <div id="bg-wrapper">
                
        <div id="wrapper">                

