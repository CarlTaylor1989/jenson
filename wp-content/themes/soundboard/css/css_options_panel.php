<?php 
header("Content-type: text/css");

require_once( '../../../../wp-load.php' );



/* background image / background color */
$bg_color = of_get_option('gg_bg_color');
$bg = of_get_option('gg_bg_image');
$bg_custom = of_get_option('gg_bg_image_custom', 'full');


if ( of_get_option('gg_bg_color') ) {
?>
        #bg-image {
                background: <?php echo $bg_color; ?> none;
        }
<?php                                  
}
elseif ( of_get_option('gg_bg_image_custom') ) {
?>
        #bg-image {
                background: url("<?php echo $bg_custom; ?>");
        }
<?php
}
else {
?>
        #bg-image {
                background: none;
        }
<?php
}

/* background position*/
if ( of_get_option('gg_bg_position') == 'repeat' ) {
?>
        #bg-image {
                background-repeat: repeat;
                }
<?php
}
elseif ( of_get_option('gg_bg_position') == 'stretched' ) {
?>
        #bg-image {
                background-repeat: no-repeat;
                background-attachment:fixed;
                background-position: center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;          
                filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.myBackground.jpg', sizingMethod='scale');
                -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";
                width: 100%;
                height: 100 %;
                }
<?php
}
elseif ( of_get_option('gg_bg_position') == 'fixed' ) {
?>
        #bg-image {
                background-repeat: no-repeat;
                background-position: top center;                
                }
<?php
}
else {
?>
        #bg-image {
                background-repeat: repeat;
        }
<?php
}


/* box shadow */
if ( of_get_option('gg_shadow') ) {
?>
#bg-wrapper,
#topnavi,
#slide-bg {        
        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
        }
<?php
}

/* color */
$color = of_get_option('gg_link_color');
if ( of_get_option('gg_link_color') ) {
?>
a, 
a:visited,
h1 a:hover, h1 a:active,
h2 a:hover, h2 a:active,
h3 a:hover, h3 a:active,
h4 a:hover, h4 a:active,
h5 a:hover, h5 a:active,
h6 a:hover, h6 a:active,
#footer-widget-area a:hover,
#footer-widget-area a:active
         {
         color: <?php echo $color; ?>;
         }
         
.sf-menu li:hover,
.sf-menu a:focus,
.sf-menu a:hover,
.sf-menu a:active,
.sf-menu ul a:hover,
        
.sf-menu li.selected,
.sf-menu li.current-cat,
.sf-menu li.current-cat-parent,
.sf-menu li.current_page_item,
.sf-menu li.current_page_ancestor,

.button1,
.buttonS,
.highlight1,
.highlight2,
ul.tabs li a,
.pagination_main a:hover,
.pagination_main .current,
ul.login li a:hover,
span.page-numbers,
a.page-numbers:hover,
li.comment .reply,
.login-submit input
        {
        background-color: <?php echo $color; ?>;
        }
        
a:hover.nivo-nextNav,
a:hover.nivo-prevNav,
.nivo-caption p
        {
        background-color: <?php echo $color; ?>;
        }         
        
<?php
}



/* colorpicker */
$colorpicker = of_get_option('gg_link_colorpicker');
if ( of_get_option('gg_link_colorpicker') ) {
?>
a, a:link,
a:visited,
h1 a:hover, h1 a:active,
h2 a:hover, h2 a:active,
h3 a:hover, h3 a:active,
h4 a:hover, h4 a:active,
h5 a:hover, h5 a:active,
h6 a:hover, h6 a:active,
#footer-widget-area a:hover,
#footer-widget-area a:active
         {
         color: <?php echo $colorpicker; ?>;
         }

.sf-menu li:hover,
.sf-menu a:focus,
.sf-menu a:hover,
.sf-menu a:active,
.sf-menu ul a:hover,
        
.sf-menu li.selected,
.sf-menu li.current-cat,
.sf-menu li.current-cat-parent,
.sf-menu li.current_page_item,
.sf-menu li.current_page_ancestor,

.button1,
.buttonS,
.highlight1,
.highlight2,
ul.tabs li a,
.pagination_main a:hover,
.pagination_main .current,
ul.login li a:hover,
span.page-numbers,
a.page-numbers:hover,
li.comment .reply,
.login-submit input
        {
        background-color: <?php echo $colorpicker; ?>;
        }           

a:hover.nivo-nextNav,
a:hover.nivo-prevNav,
.nivo-caption p
        {
        background-color: <?php echo $colorpicker; ?> !important;
        }           
        
<?php
}




/* font */
$font = of_get_option('gg_font');
$font2 = of_get_option('gg_font2');

if ( of_get_option('gg_font2') ) {
?>
h1, h2, h3, h4, h5, h6,
.button1,
.buttonS,
.cancelled,
.soldout,
span.reply
.details,
.dropcap,
li.comment cite,
ul.login li a,
.sf-menu a,
.comment-reply-link,
.nivo-caption p
         {
         font-family: "<?php echo $font2; ?>" , "Helvetica Neue", Arial, "sans-serif";
         }
<?php
} elseif ( of_get_option('gg_font') ) {
?>
h1, h2, h3, h4, h5, h6,
.button1,
.buttonS,
.cancelled,
.soldout,
span.reply
.details,
.dropcap,
li.comment cite,
ul.login li a,
.sf-menu a,
.comment-reply-link,
.nivo-caption p
         {
         font-family: "<?php echo $font; ?>" , "Helvetica Neue", Arial, "sans-serif";
         }
<?php
}


$trans = of_get_option('gg_trans');
if ( of_get_option('gg_trans') ) {
?>
h3.widgettitle,
.button1,
.buttonS,
.cancelled,
.soldout,
span.reply,
.date-h,
h1.pagetitle,
#content h3.widgettitle,
ul.login li a,
.sf-menu a,
.comment-reply-link,
.nivo-caption p
         {
         text-transform: <?php echo $trans; ?>;
         }         
<?php
}


/* hide arrow of Login section in header */
if (of_get_option('gg_loginsection')) { ?> 
        .arrow-down { border: 0; height: 6px; }        
<?php } 


/* social icons in footer*/
$social1 = of_get_option('gg_social1');
$social2 = of_get_option('gg_social2');
$social3 = of_get_option('gg_social3');
$social4 = of_get_option('gg_social4');
$social5 = of_get_option('gg_social5');
$socialwidth1 = of_get_option('gg_socialwidth1');
$socialwidth2 = of_get_option('gg_socialwidth2');
$socialwidth3 = of_get_option('gg_socialwidth3');
$socialwidth4 = of_get_option('gg_socialwidth4');
$socialwidth5 = of_get_option('gg_socialwidth5');

?>
a.social1 {
        width: <?php echo $socialwidth1; ?>px;
        background:url("<?php echo $social1; ?>") no-repeat;
        }
        
a.social2 {
        width: <?php echo $socialwidth2; ?>px;
        background:url("<?php echo $social2; ?>") no-repeat;
        }
        
a.social3 {
        width: <?php echo $socialwidth3; ?>px;
        background:url("<?php echo $social3; ?>") no-repeat;
        }

a.social4 {
        width: <?php echo $socialwidth4; ?>px;
        background:url("<?php echo $social4; ?>") no-repeat;
        }
        
a.social5 {
        width: <?php echo $socialwidth5; ?>px;
        background:url("<?php echo $social5; ?>") no-repeat;
        }        
<?php        

/* custom css */
echo of_get_option('gg_custom_css');
?>
