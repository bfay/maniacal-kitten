<?php 
/***********************************************************************************************/
/* Widget that displays an embeddable video */
/***********************************************************************************************/

	class Adaptive_Video_Widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'adaptive_video_w',
				'Custom Widget: Video',
				array('description' => __('Displays an embeddable video', 'adaptive-framework'))
			); 
		}
		
		public function form($instance) {
			$defaults = array(
				'title' => __('Video', 'adaptive-framework'),
				'video_embed' => '<iframe width="560" height="315" src="http://www.youtube.com/embed/3Rxuu_4XpEM" frameborder="0" allowfullscreen></iframe>',
				'video_description' => 'An example video'
			);
			
			$instance = wp_parse_args((array) $instance, $defaults);
			
			?>
			<!-- The Title -->
			<p>
				<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>

			<!-- Video Embed -->
			<p>
				<label for="<?php echo $this->get_field_id('video_embed') ?>"><?php _e('Video Embed Code:', 'adaptive-framework'); ?></label>
				<textarea class="widefat" id="<?php echo $this->get_field_id('video_embed'); ?>" name="<?php echo $this->get_field_name('video_embed'); ?>"><?php echo $instance['video_embed']; ?></textarea>
			</p>

			<!-- Video Description -->
			<p>
				<label for="<?php echo $this->get_field_id('video_description') ?>"><?php _e('Video Description:', 'adaptive-framework'); ?></label>
				<textarea class="widefat" id="<?php echo $this->get_field_id('video_description'); ?>" name="<?php echo $this->get_field_name('video_description'); ?>"><?php echo $instance['video_description']; ?></textarea>
			</p>
			
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			// The Title
			$instance['title'] = strip_tags($new_instance['title']);
			
			// The Ad
			$instance['video_embed'] = $new_instance['video_embed'];
			$instance['video_description'] = $new_instance['video_description'];

			return $instance;
		}
		
		public function widget($args, $instance) {
			extract($args);
			
			// Get the title and prepare it for display
			$title = apply_filters('widget_title', $instance['title']);
			
			// Get the ad
			$video_embed = $instance['video_embed'];
			$video_description = $instance['video_description'];
			
			echo $before_widget;
			
			if ($title) {
				echo $before_title . $title . $after_title;
			}
			
			echo '<div class="video-container">';
			
			if ($video_embed) {
				echo $video_embed;
			}
			
			if ($video_description) {
				echo '<br /><p>' . $video_description . '</p>';
			}
											
			echo '</div>';
			echo $after_widget; 
		}
	}

	register_widget('Adaptive_Video_Widget');

?>