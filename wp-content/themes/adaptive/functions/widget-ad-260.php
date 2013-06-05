<?php 
/***********************************************************************************************/
/* Widget that displays a single 260x120 ad block */
/***********************************************************************************************/

	class Adaptive_Ad_260_Widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'adaptive_ad_260_w',
				'Custom Widget: 260x120 Ad',
				array('description' => __('Displays a single 260x120 ad block', 'adaptive-framework'))
			); 
		}
		
		public function form($instance) {
			$defaults = array(
				'title' => __('Ad', 'adaptive-framework'),
				'ad_img' => IMAGES . '/demo/ad-260x120.gif',
				'ad_link' => 'http://www.adipurdila.com'
			);
			
			$instance = wp_parse_args((array) $instance, $defaults);
			
			?>
			<!-- The Title -->
			<p>
				<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>

			<!-- Ad Image -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_img') ?>"><?php _e('Ad image URL:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_img'); ?>" name="<?php echo $this->get_field_name('ad_img'); ?>" value="<?php echo $instance['ad_img']; ?>" />
			</p>

			<!-- Ad Link -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_link') ?>"><?php _e('Ad link:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_link'); ?>" name="<?php echo $this->get_field_name('ad_link'); ?>" value="<?php echo $instance['ad_link']; ?>" />
			</p>
			
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			// The Title
			$instance['title'] = strip_tags($new_instance['title']);
			
			// The Ad
			$instance['ad_img'] = $new_instance['ad_img'];
			$instance['ad_link'] = $new_instance['ad_link'];

			return $instance;
		}
		
		public function widget($args, $instance) {
			extract($args);
			
			// Get the title and prepare it for display
			$title = apply_filters('widget_title', $instance['title']);
			
			// Get the ad
			$ad_img = $instance['ad_img'];
			$ad_link = $instance['ad_link'];
			
			echo $before_widget;
			
			if ($title) {
				echo $before_title . $title . $after_title;
			}
			
			echo '<ul class="ad-260">';
			
			if ($ad_img) : ?>
				<li>
					<figure class="ad-block">
						<a href="<?php echo $ad_link; ?>"><img src="<?php echo $ad_img; ?>" alt="Ad 260" /></a>
					</figure>
				</li>
				
			<?php endif; 
			
			echo '</ul>';
			echo $after_widget; 
		}
	}

	register_widget('Adaptive_Ad_260_Widget');

?>