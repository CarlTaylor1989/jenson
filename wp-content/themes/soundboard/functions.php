<?php

/****************************************
*****************************************
** ! Be very cautious editing this file
** so that you don't break the theme.
** I recommend making a copy before you
** edit this file !  
*****************************************
****************************************/

/** SIDEBARS ******************************************************************/
if ( function_exists('register_sidebar') ) {

register_sidebar(array(
                  'name'=>'sidebar home left',
                  'id' => 'homeleft_sidebar',
                  'description' => __( 'sidebar on homepage, left', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'sidebar home right',
                  'id' => 'homeright_sidebar',
                  'description' => __( 'sidebar on homepage, right', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'main sidebar',
                  'id' => 'main_sidebar',
                  'description' => __( 'main sidebar', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'tour dates sidebar',
                  'id' => 'tour_sidebar',
                  'description' => __( 'sidebar on tour dates page', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'contact sidebar',
                  'id' => 'contact_sidebar',
                  'description' => __( 'sidebar on contact page', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'sidebar footer 1',
                  'id' => 'sidebarf1',
                  'description' => __( 'first sidebar in footer', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'sidebar footer 2',
                  'id' => 'sidebarf2',
                  'description' => __( 'second sidebar in footer', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'sidebar footer 3',
                  'id' => 'sidebarf3',
                  'description' => __( 'third sidebar in footer', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));

register_sidebar(array(
                  'name'=>'sidebar footer 4',
                  'id' => 'sidebarf4',
                  'description' => __( 'fourth sidebar in footer', 'gxg_textdomain' ),
                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
                  'after_widget' => '</div>',
                  'before_title' => '<h3 class="widgettitle">',
                  'after_title' => '</h3>', ));
}



/** MENUS *********************************************************************/
if (function_exists('wp_nav_menu')) {
         function register_my_menus() {
                  register_nav_menus(
                  array(
                           'main-menu' => __( 'SOUNDBOARD Main Menu', 'gxg_textdomain' )
                  )
         	  );
         }
         add_action( 'init', 'register_my_menus' );
}



/** EXCERPT LENGTH AND READ MORE LINK *****************************************/
function new_excerpt_length($length) {
        return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');


function new_excerpt_more($more) {
         global $post;
         return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/** CONTENT WIDTH *************************************************************/
if ( ! isset( $content_width ) )
        $content_width = 940;



/** THUMBNAILS ****************************************************************/
if (function_exists('add_theme_support')) {
         add_theme_support( 'post-thumbnails' );
         set_post_thumbnail_size(520, 220, true);

         add_image_size('medium', 520, 300, true);
         add_image_size('large', 680, 380, true);

         add_image_size('square1', 140, 140, true);
         add_image_size('square2', 220, 220, true);         
         add_image_size('square3', 100, 100, true);  
         add_image_size('video', 220, 140, true);        
}



/** GET RID OF DEFAULT GALLERY STYLE ******************************************/
add_filter( 'use_default_gallery_style', '__return_false' );



/** FEED LINKS ****************************************************************/
add_theme_support('automatic-feed-links');



/** INCLUDE THEME OPTIONS******************************************************/
$admin_path = TEMPLATEPATH . '/includes/admin/';
require_once ($admin_path . 'options-framework.php');



/** INCLUDE THEME FUNCTIONS ***************************************************/
$functions_path = TEMPLATEPATH . '/includes/functions/';
include_once ($functions_path . 'theme_functions.php');
include_once ($functions_path . 'mobile_detect.php');



/** INCLUDE WIDGETS ***********************************************************/
include('includes/widgets/widget-twitter.php');
include('includes/widgets/widget-flickr.php');
include('includes/widgets/widget-news.php');
include('includes/widgets/widget-tourdates.php');
include('includes/widgets/widget-gallery.php');
include('includes/widgets/widget-video.php');
include('includes/widgets/widget-album.php');



/** INCLUDE CUSTOM POST TYPES *************************************************/
include_once(TEMPLATEPATH . '/includes/posttypes/tourdates.php');
include_once(TEMPLATEPATH . '/includes/posttypes/gallery.php');
include_once(TEMPLATEPATH . '/includes/posttypes/audio.php');
include_once(TEMPLATEPATH . '/includes/posttypes/video.php');
include_once(TEMPLATEPATH . '/includes/posttypes/slider.php');



/** THEME TRANSLATION *********************************************************/
$lang = TEMPLATEPATH;
load_theme_textdomain('gxg_textdomain', $lang);



/** INCLUDE META BOXES*********************************************************/
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri().'/includes/metaboxes' ) );
define( 'RWMB_DIR', trailingslashit( get_stylesheet_directory().'/includes/metaboxes' ) );
require_once RWMB_DIR . 'meta-box.php';
include get_stylesheet_directory().'/includes/metaboxes/config-meta-boxes.php';



/** INCLUDE SHORTCODES ********************************************************/
include_once(TEMPLATEPATH . '/includes/shortcodes/shortcodes.php');
include_once(TEMPLATEPATH . '/includes/shortcodes/shortcode-soundcloud.php');



/** CUSTOM GRAVATAR ********************************************************/
function gg_custom_gravatar( $avatar_defaults ) {
    $gg_avatar = of_get_option('gg_gravatar');
    $avatar_defaults[$gg_avatar] = 'Custom Gravatar';
    return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'gg_custom_gravatar' );



/** JQUERY ********************************************************************/
function gg_scripts() {
         if (!is_admin()) {
                  wp_register_script('jQueryCustom', get_template_directory_uri().'/js/jquery-ui-1.8.16.custom.min.js', 'jquery');
                  wp_register_script('superfish', get_template_directory_uri().'/js/superfish.js', 'jquery');
                  wp_register_style('prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css', false, 'screen');
                  wp_register_script('prettyPhoto', get_template_directory_uri().'/js/prettyPhoto.js', 'jquery');
                  wp_register_style('nivoSlider', get_template_directory_uri().'/css/nivoSlider.css', false, 'screen');
                  wp_register_script('nivoSlider', get_template_directory_uri().'/js/nivoSlider.js', 'jquery');
                  wp_register_script('hoverIntent', get_template_directory_uri().'/js/hoverIntent.js', 'jquery');
                  wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', 'jquery');
                  wp_register_style('shortcodes', get_template_directory_uri().'/css/shortcodes.css', false, 'screen');
                  wp_register_script('mosaic', get_template_directory_uri().'/js/mosaic.1.0.1.min.js', 'jquery');

                  wp_enqueue_script('jquery');
                  wp_enqueue_script('jQueryCustom');
                  wp_enqueue_script('superfish');
                  wp_enqueue_style('prettyPhoto');
                  wp_enqueue_script('prettyPhoto');
                  wp_enqueue_script('hoverIntent');
                  wp_enqueue_script('scripts');
                  wp_enqueue_style('shortcodes');
                  wp_enqueue_script('mosaic');
         }
}
add_action('init', 'gg_scripts');


// load on homepage
function gg_home_scripts() {
	if (is_page_template('template-home.php') )
                  wp_enqueue_style('nivoSlider');
                  wp_enqueue_script('nivoSlider');
}
add_action('wp_print_scripts', 'gg_home_scripts');


// load on single pages
function gg_single_scripts() {
        if ( is_singular() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' );
        }
add_action('wp_print_scripts', 'gg_single_scripts');


// JW PLAYER
function gg_jwplayer() {
         if (of_get_option('gg_jwplayer') && !is_admin()) {
                  wp_register_script('jwplayer', get_template_directory_uri().'/jwplayer/jwplayer.js', 'jquery');
                  wp_enqueue_script('jwplayer');           
         }
}
add_action('init', 'gg_jwplayer');

?>