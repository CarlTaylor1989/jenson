<?php
/*
Plugin Name: Twitter Widget
Plugin URI: http://www.red-sun-design.com
Description: Display your Twitter Feed
Version: 1.0
Author: Gerda Gimpl
Author URI: http://www.red-sun-design.com
*/

class gg_Twitter_Widget extends WP_Widget {

	/*--------------------------------------------------*/
	/* CONSTRUCT THE WIDGET
	/*--------------------------------------------------*/

	function gg_Twitter_Widget() {
  
	/* Widget name and description */
	$widget_opts = array (
		'classname' => 'gg_tweet_widget', 
		'description' => __('Display your latest Tweets', 'gxg_textdomain')
	);	
	
	$this->WP_Widget('gg_tweet_widget', __('SOUNDBOARD - Twitter', 'gxg_textdomain'), $widget_opts);
		
	/* Load Scripts */	
	function gg_twitter_js($gg_twitter_name, $gg_twitter_count) {
        return '<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
                <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline.json?callback=twitterCallback2&count='.$gg_twitter_count.'&include_rts=true&screen_name='.$gg_twitter_name.'"></script>';
        }
			
	}


	/*--------------------------------------------------*/
	/* DISPLAY THE WIDGET
	/*--------------------------------------------------*/	
	/* outputs the content of the widget
	 * @args --> The array of form elements*/	
	function widget($args, $instance) {	
		extract($args, EXTR_SKIP);
		
		$title = apply_filters('widget_title', $instance['title'] );
		
		global $gg_twitter_name, $gg_twitter_count;
		
		$gg_twitter_name = $instance['name'];
		$gg_twitter_count = $instance['count'];
		
		function echo_twitter_js() {
			global $gg_twitter_name, $gg_twitter_count;
			echo gg_twitter_js($gg_twitter_name, $gg_twitter_count);
		}
		
		add_action('wp_footer', 'echo_twitter_js');

		/* before widget */
		echo $before_widget;

		/* display title */
		if ( $title )
		echo $before_title . $title . $after_title;
   
		/* display the widget */
		?>
		<ul id="twitter_update_list" class="twitter">
                <li><p></p></li>
		</ul>
		<?php   
            		
		/* after widget */
		echo $after_widget;		
	}
	
	
	/*--------------------------------------------------*/
	/* UPDATE THE WIDGET
	/*--------------------------------------------------*/
	function update($new_instance, $old_instance) {		
	$instance = $old_instance;		 
    	
    	$instance['title'] = strip_tags( $new_instance['title'] );
    	$instance['name'] = strip_tags( $new_instance['name'] );
    	$instance['count'] = strip_tags( $new_instance['count'] );
    	
	return $instance;		
	} 
	
	
	/*--------------------------------------------------*/
	/* WIDGET ADMIN FORM
	/*--------------------------------------------------*/
	/* @instance	The array of keys and values for the widget. */
	function form($instance) {	

		$instance = wp_parse_args(
			(array)$instance,
			array(
				'title' => 'Twitter Feed',
				'name' => '',
				'count' => '3'
			)
		);
		
	
	// Display the admin form
	?>
        <p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'gxg_textdomain') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
	</p>		
		
	<p>
		<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Twitter Username', 'gxg_textdomain') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'user' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" />
	</p>
		
	<p>
		<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e('Number of tweets', 'gxg_textdomain') ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" value="<?php echo $instance['count']; ?>" />
	</p>
	<?php		
	} // end form

	
} // end class
add_action('widgets_init', create_function('', 'register_widget("gg_Twitter_Widget");'));
?>