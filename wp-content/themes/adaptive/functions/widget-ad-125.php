<?php 
/***********************************************************************************************/
/* Widget that displays four 125x125 ad blocks */
/***********************************************************************************************/

	class Adaptive_Ad_125_Widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'adaptive_ad_125_w',
				'Custom Widget: 125x125 Ads',
				array('description' => __('Displays a list of four 125x125 ad blocks', 'adaptive-framework'))
			); 
		}
		
		public function form($instance) {
			$defaults = array(
				'title' => __('Ads', 'adaptive-framework'),
				'ad_img_1' => IMAGES . '/demo/ad-125x125-1.gif',
				'ad_link_1' => 'http://www.adipurdila.com',
				'ad_img_2' => IMAGES . '/demo/ad-125x125-2.gif',
				'ad_link_2' => 'http://www.adipurdila.com',
				'ad_img_3' => '',
				'ad_link_3' => '',
				'ad_img_4' => '',
				'ad_link_5' => ''
			);
			
			$instance = wp_parse_args((array) $instance, $defaults);
			
			?>
			<!-- The Title -->
			<p>
				<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>

			<!-- Ad 1 Image -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_img_1') ?>"><?php _e('Ad 1 image URL:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_img_1'); ?>" name="<?php echo $this->get_field_name('ad_img_1'); ?>" value="<?php echo $instance['ad_img_1']; ?>" />
			</p>

			<!-- Ad 1 Link -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_link_1') ?>"><?php _e('Ad 1 link:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_link_1'); ?>" name="<?php echo $this->get_field_name('ad_link_1'); ?>" value="<?php echo $instance['ad_link_1']; ?>" />
			</p>

			<!-- Ad 2 Image -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_img_2') ?>"><?php _e('Ad 2 image URL:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_img_2'); ?>" name="<?php echo $this->get_field_name('ad_img_2'); ?>" value="<?php echo $instance['ad_img_2']; ?>" />
			</p>

			<!-- Ad 2 Link -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_link_2') ?>"><?php _e('Ad 2 link:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_link_2'); ?>" name="<?php echo $this->get_field_name('ad_link_2'); ?>" value="<?php echo $instance['ad_link_2']; ?>" />
			</p>

			<!-- Ad 3 Image -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_img_3') ?>"><?php _e('Ad 3 image URL:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_img_3'); ?>" name="<?php echo $this->get_field_name('ad_img_3'); ?>" value="<?php echo $instance['ad_img_3']; ?>" />
			</p>

			<!-- Ad 3 Link -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_link_3') ?>"><?php _e('Ad 3 link:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_link_3'); ?>" name="<?php echo $this->get_field_name('ad_link_3'); ?>" value="<?php echo $instance['ad_link_3']; ?>" />
			</p>

			<!-- Ad 4 Image -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_img_4') ?>"><?php _e('Ad 4 image URL:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_img_4'); ?>" name="<?php echo $this->get_field_name('ad_img_4'); ?>" value="<?php echo $instance['ad_img_4']; ?>" />
			</p>

			<!-- Ad 4 Link -->
			<p>
				<label for="<?php echo $this->get_field_id('ad_link_4') ?>"><?php _e('Ad 4 link:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('ad_link_4'); ?>" name="<?php echo $this->get_field_name('ad_link_4'); ?>" value="<?php echo $instance['ad_link_4']; ?>" />
			</p>
			
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			// The Title
			$instance['title'] = strip_tags($new_instance['title']);
			
			// The Ad Images
			$instance['ad_img_1'] = $new_instance['ad_img_1'];
			$instance['ad_img_2'] = $new_instance['ad_img_2'];
			$instance['ad_img_3'] = $new_instance['ad_img_3'];
			$instance['ad_img_4'] = $new_instance['ad_img_4'];

			// The Ad Links
			$instance['ad_link_1'] = $new_instance['ad_link_1'];
			$instance['ad_link_2'] = $new_instance['ad_link_2'];
			$instance['ad_link_3'] = $new_instance['ad_link_3'];
			$instance['ad_link_4'] = $new_instance['ad_link_4'];
			
			return $instance;
		}
		
		public function widget($args, $instance) {
			extract($args);
			
			// Get the title and prepare it for display
			$title = apply_filters('widget_title', $instance['title']);
			
			// Get the ad images
			$ad_img_1 = $instance['ad_img_1'];
			$ad_img_2 = $instance['ad_img_2'];
			$ad_img_3 = $instance['ad_img_3'];
			$ad_img_4 = $instance['ad_img_4'];

			// Get the ad links
			$ad_link_1 = $instance['ad_link_1'];
			$ad_link_2 = $instance['ad_link_2'];
			$ad_link_3 = $instance['ad_link_3'];
			$ad_link_4 = $instance['ad_link_4'];
			
			echo $before_widget;
			
			if ($title) {
				echo $before_title . $title . $after_title;
			}
			
			echo '<ul class="ad-125 clearfix">';
			
			if ($ad_img_1) : ?>
				<li>
					<figure class="ad-block">
						<a href="<?php echo $ad_link_1; ?>"><img src="<?php echo $ad_img_1; ?>" alt="Ad 125" /></a>
					</figure>
				</li>
				
			<?php endif; 

			if ($ad_img_2) : ?>
				<li class="alt">
					<figure class="ad-block">
						<a href="<?php echo $ad_link_2; ?>"><img src="<?php echo $ad_img_2; ?>" alt="Ad 125" /></a>
					</figure>
				</li>
				
			<?php endif; 

			if ($ad_img_3) : ?>
				<li>
					<figure class="ad-block">
						<a href="<?php echo $ad_link_3; ?>"><img src="<?php echo $ad_img_3; ?>" alt="Ad 125" /></a>
					</figure>
				</li>
				
			<?php endif; 

			if ($ad_img_4) : ?>
				<li class="alt">
					<figure class="ad-block">
						<a href="<?php echo $ad_link_4; ?>"><img src="<?php echo $ad_img_4; ?>" alt="Ad 125" /></a>
					</figure>
				</li>
				
			<?php endif;
			
			echo '</ul>';
			echo $after_widget; 
		}
	}

	register_widget('Adaptive_Ad_125_Widget');

?>