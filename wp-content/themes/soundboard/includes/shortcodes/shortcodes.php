<?php

/* enable shortcodes in text widgets ---------------------------------------------------*/
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode', 11);



/* clean up shortcode----------------------------------------------------------------------*/
function parse_shortcode_content( $content ) {

   /* Parse nested shortcodes and add formatting. */
    $content = trim( do_shortcode( shortcode_unautop( $content ) ) );

    /* Remove '' from the start of the string. */
    if ( substr( $content, 0, 4 ) == '' )
        $content = substr( $content, 4 );

    /* Remove '' from the end of the string. */
    if ( substr( $content, -3, 3 ) == '' )
        $content = substr( $content, 0, -3 );

    /* Remove any instances of ''. */
    $content = str_replace( array( '<p></p>' ), '', $content );
    $content = str_replace( array( '<p>  </p>' ), '', $content );

    return $content;
}

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );



/* COLUMNS -------------------------------------------------------------------*/
function one_half( $atts, $content = null ) {
        return '<div class="one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'one_half');

function one_half_last( $atts, $content = null ) {
        return '<div class="one_half last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('one_half_last', 'one_half_last');

function one_third( $atts, $content = null ) {
        return '<div class="one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'one_third');

function one_third_last( $atts, $content = null ) {
        return '<div class="one_third last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('one_third_last', 'one_third_last');

function two_third( $atts, $content = null ) {
        return '<div class="two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'two_third');

function two_third_last( $atts, $content = null ) {
        return '<div class="two_third last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('two_third_last', 'two_third_last');

function one_fourth( $atts, $content = null ) {
        return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'one_fourth');

function one_fourth_last( $atts, $content = null ) {
        return '<div class="one_fourth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('one_fourth_last', 'one_fourth_last');

function three_fourth( $atts, $content = null ) {
        return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'three_fourth');

function three_fourth_last( $atts, $content = null ) {
        return '<div class="three_fourth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('three_fourth_last', 'three_fourth_last');

function one_fifth( $atts, $content = null ) {
        return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'one_fifth');

function one_fifth_last( $atts, $content = null ) {
        return '<div class="one_fifth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('one_fifth_last', 'one_fifth_last');        

function two_fifth( $atts, $content = null ) {
        return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_fifth', 'two_fifth');

function two_fifth_last( $atts, $content = null ) {
        return '<div class="two_fifth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('two_fifth_last', 'two_fifth_last');        

function three_fifth( $atts, $content = null ) {
        return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fifth', 'three_fifth');

function three_fifth_last( $atts, $content = null ) {
        return '<div class="three_fifth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('three_fifth_last', 'three_fifth_last');        

function four_fifth( $atts, $content = null ) {
        return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('four_fifth', 'four_fifth');

function four_fifth_last( $atts, $content = null ) {
        return '<div class="four_fifth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('four_fifth_last', 'four_fifth_last');        

function one_sixth( $atts, $content = null ) {
        return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_sixth', 'one_sixth');

function one_sixth_last( $atts, $content = null ) {
        return '<div class="one_sixth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('one_sixth_last', 'one_sixth_last');        

function five_sixth( $atts, $content = null ) {
        return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('five_sixth', 'five_sixth');

function five_sixth_last( $atts, $content = null ) {
        return '<div class="five_sixth last">' . do_shortcode($content) . '</div>
        <div class="clearboth"></div>';
}
add_shortcode('five_sixth_last', 'five_sixth_last');        



/* DROPCAPS ------------------------------------------------------------------*/
function dropcap($atts, $content= null, $code="") {
        
        $return = '<span class="dropcap">'.$content.'</span>';
        return $return;
}
add_shortcode('dropcap' , 'dropcap' );



/* PULLQUOTE -----------------------------------------------------------------*/
function pullquote_left($atts, $content=null, $code="") {
        $return = '<span class="pullquote_left">'.$content.'</span>';
        return $return;
}
add_shortcode('pullquote_left' , 'pullquote_left' );

function pullquote_right($atts, $content=null, $code="") {
        $return = '<span class="pullquote_right">'.$content.'</span>';
        return $return;
}
add_shortcode('pullquote_right' , 'pullquote_right' );



/* HIGHLIGHT -----------------------------------------------------------------*/
function highlight1($atts, $content=null, $code="") {
        $return = '<span class="highlight1">' . $content . '</span>';
        return $return;
}
add_shortcode('highlight1' , 'highlight1' );

function highlight2($atts, $content=null, $code="") {
        $return = '<span class="highlight2">' . $content . '</span>';
        return $return;
}
add_shortcode('highlight2' , 'highlight2' );


/* DIVIDER -----------------------------------------------------------------*/
function divider_hr( $atts, $content = null ) {
        return '<div class="divider_hr"></div>';
}
add_shortcode('divider', 'divider_hr');



/* TABS ----------------------------------------------------------------------*/
function gg_tabgroup( $atts, $content = null ) {
	$tabs_count = 0;
        global $tabs_array, $tabs_count;	
	do_shortcode( $content );
	
	$return = '';
	
	if( is_array( $tabs_array ) ) {
		$i = 0;
		$x = 0;
		
		$return .= '<div class="tabs"><ul class="tabs clearfix">';
		
		foreach( $tabs_array as $tab ) {
			$i++;
			$return .= '<li class="' . ( ( $i == 1 ) ? 'first' : '' ) . '"><a title="' . $tab['title'] . '" href="#tab-' . $i . '">' . $tab['title'] . '</a></li>';
		}
		
		$return .= '</ul>';                
                
		foreach( $tabs_array as $tab ) {
			$x++;
			$return .= '<div class="pane" id="tab-' . $x . '">' . do_shortcode( $tab['content'] ) .'</div>';
		}
		
		$return .= '</div>';
		
		return $return;
	}
}
add_shortcode('tabs', 'gg_tabgroup');

function gg_tab( $atts, $content = null ) {
	global $tabs_array, $tabs_count;
	
	extract(shortcode_atts(array(
		'title' => 'Title goes here'
	), $atts));
	
	$tabs_array[] = array(
		'title' => $title,
		'content' => do_shortcode( $content )
	);
	
	$tabs_count++;
}
add_shortcode('tab', 'gg_tab');



/* TOGGLES--------------------------------------------------------------------*/
function gg_toggle( $atts, $content = null ){
        extract( shortcode_atts( array(
                'title' => 'Click To Open'
        ), $atts ) );
        return '<h6 class="trigger"><a href="#">'. $title .'</a></h6>
                <div class="toggle_container">' . '<div class="block">' . do_shortcode($content) . '</div>' . '</div>';
}
add_shortcode('toggle', 'gg_toggle');



/* BUTTTONS ------------------------------------------------------------------*/
function sButton($atts, $content = null) {
   extract(shortcode_atts(array(
        'link' => '#'
        ), $atts));
   
   return '<a class="buttonS" href="'.$link.'"><span>' . do_shortcode($content) . '</span></a>';
}
add_shortcode('button', 'sButton');




/* JWPLAYER AUDIO / VIDEO---------------------------------------------------------------------*/
function audio($atts, $content = null) {   extract(shortcode_atts(array(
        'width' => '100%'
        ), $atts));
        
        global $post;
        $bloginfo_link = get_bloginfo('template_directory');
        $flashplayer = $bloginfo_link . '/jwplayer/player.swf';
        $skin = $bloginfo_link . '/jwplayer/soundboard_audio.zip';
        $rand_id = mt_rand(999, 99999);

	$content =  parse_shortcode_content($content);

        $jwplayer_code = <<<HTML
  
        <div id="mediaspace$rand_id">Audio</div>
        <script type="text/javascript">
           jwplayer('mediaspace$rand_id').setup({
           'flashplayer': '$flashplayer',
           'file': '$content',
           'skin': '$skin',
           'controlbar': 'bottom',
           'width': '$width',
           'height': '28'
           });
        </script>   

HTML;

        return $jwplayer_code;
}
add_shortcode('audio', 'audio');




function video($atts, $content = null) {
   extract(shortcode_atts(array(
        'image' => '#',
        'width' => '100%'
        ), $atts));
        
        global $post;
        $bloginfo_link = get_bloginfo('template_directory');
        $flashplayer = $bloginfo_link . '/jwplayer/player.swf';
        $skin = $bloginfo_link . '/jwplayer/soundboard.zip';
        $skin2 = $bloginfo_link . '/jwplayer/soundboard/soundboard.xml';
        $rand_id = mt_rand(999, 99999);

	$content =  parse_shortcode_content($content);

        $jwplayer_code = <<<HTML
  
        <div id="mediaspace$rand_id">Video</div>
        <script type="text/javascript">
           jwplayer('mediaspace$rand_id').setup({
           'flashplayer': '$flashplayer',
           'file': '$content',
           'skin': '$skin',
           'skin': '$skin2',
           'image': '$image',
           'controlbar': 'bottom',
           'width': '$width',
           'height': '320'
           });
        </script>    

HTML;

        return $jwplayer_code;
}
add_shortcode('video', 'video');