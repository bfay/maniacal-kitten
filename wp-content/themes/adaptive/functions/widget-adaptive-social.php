<?php 
/***********************************************************************************************/
/* Widget that displays a list with social icons */
/***********************************************************************************************/

	class Adaptive_Social_Widget extends WP_Widget {
	
		public function __construct() {
			parent::__construct(
				'adaptive_social_w',
				'Custom Widget: Social Icons',
				array('description' => __('Displays a list of social icons', 'adaptive-framework'))
			); 
		}
		
		public function form($instance) {
			$defaults = array(
				'title' => __('Connect', 'adaptive-framework'),
				'social_facebook' => 'http://www.facebook.com/adipurdila',
				'social_twitter' => 'https://twitter.com/adipurdila',
				'social_gplus' => '',
				'social_digg' => '',
				'social_dribbble' => '',
				'social_flickr' => '',
				'social_linkedin' => '',
				'social_myspace' => '',
				'social_pinterest' => '',
				'social_skype' => '',
				'social_vimeo' => '',
				'social_youtube' => '',
				'description' => __('Connect with us on our social networks.', 'adaptive-framework')
			);
			
			$instance = wp_parse_args((array) $instance, $defaults);
			
			?>
			<!-- The Title -->
			<p>
				<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>

			<!-- The Description -->
			<p>
				<label for="<?php echo $this->get_field_id('description') ?>"><?php _e('Description:', 'adaptive-framework'); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" value="<?php echo $instance['description']; ?>" />
			</p>

			<!-- Facebook -->
			<p>
				<label for="<?php echo $this->get_field_id('social_facebook') ?>">Facebook:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_facebook'); ?>" name="<?php echo $this->get_field_name('social_facebook'); ?>" value="<?php echo $instance['social_facebook']; ?>" />
			</p>

			<!-- Twitter -->
			<p>
				<label for="<?php echo $this->get_field_id('social_twitter') ?>">Twitter:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_twitter'); ?>" name="<?php echo $this->get_field_name('social_twitter'); ?>" value="<?php echo $instance['social_twitter']; ?>" />
			</p>

			<!-- Google+ -->
			<p>
				<label for="<?php echo $this->get_field_id('social_gplus') ?>">Google+:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_gplus'); ?>" name="<?php echo $this->get_field_name('social_gplus'); ?>" value="<?php echo $instance['social_gplus']; ?>" />
			</p>

			<!-- Digg -->
			<p>
				<label for="<?php echo $this->get_field_id('social_digg') ?>">Digg:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_digg'); ?>" name="<?php echo $this->get_field_name('social_digg'); ?>" value="<?php echo $instance['social_digg']; ?>" />
			</p>

			<!-- Dribbble -->
			<p>
				<label for="<?php echo $this->get_field_id('social_dribbble') ?>">Dribbble:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_dribbble'); ?>" name="<?php echo $this->get_field_name('social_dribbble'); ?>" value="<?php echo $instance['social_dribbble']; ?>" />
			</p>

			<!-- Flickr -->
			<p>
				<label for="<?php echo $this->get_field_id('social_flickr') ?>">Flickr:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_flickr'); ?>" name="<?php echo $this->get_field_name('social_flickr'); ?>" value="<?php echo $instance['social_flickr']; ?>" />
			</p>

			<!-- LinkedIn -->
			<p>
				<label for="<?php echo $this->get_field_id('social_linkedin') ?>">LinkedIn:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_linkedin'); ?>" name="<?php echo $this->get_field_name('social_linkedin'); ?>" value="<?php echo $instance['social_linkedin']; ?>" />
			</p>

			<!-- MySpace -->
			<p>
				<label for="<?php echo $this->get_field_id('social_myspace') ?>">MySpace:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_myspace'); ?>" name="<?php echo $this->get_field_name('social_myspace'); ?>" value="<?php echo $instance['social_myspace']; ?>" />
			</p>

			<!-- Pinterest -->
			<p>
				<label for="<?php echo $this->get_field_id('social_pinterest') ?>">Pinterest:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_pinterest'); ?>" name="<?php echo $this->get_field_name('social_pinterest'); ?>" value="<?php echo $instance['social_pinterest']; ?>" />
			</p>

			<!-- Skype -->
			<p>
				<label for="<?php echo $this->get_field_id('social_skype') ?>">Skype:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_skype'); ?>" name="<?php echo $this->get_field_name('social_skype'); ?>" value="<?php echo $instance['social_skype']; ?>" />
			</p>

			<!-- Vimeo -->
			<p>
				<label for="<?php echo $this->get_field_id('social_vimeo') ?>">Vimeo:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_vimeo'); ?>" name="<?php echo $this->get_field_name('social_vimeo'); ?>" value="<?php echo $instance['social_vimeo']; ?>" />
			</p>

			<!-- YouTube -->
			<p>
				<label for="<?php echo $this->get_field_id('social_youtube') ?>">YouTube:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('social_youtube'); ?>" name="<?php echo $this->get_field_name('social_youtube'); ?>" value="<?php echo $instance['social_youtube']; ?>" />
			</p>
			
			<?php
		}
		
		public function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			// The Title
			$instance['title'] = strip_tags($new_instance['title']);
			
			// The Description
			$instance['description'] = $new_instance['description'];

			// The Social Link
			$instance['social_facebook'] = $new_instance['social_facebook'];
			$instance['social_twitter'] = $new_instance['social_twitter'];
			$instance['social_gplus'] = $new_instance['social_gplus'];
			$instance['social_digg'] = $new_instance['social_digg'];
			$instance['social_dribbble'] = $new_instance['social_dribbble'];
			$instance['social_flickr'] = $new_instance['social_flickr'];
			$instance['social_linkedin'] = $new_instance['social_linkedin'];
			$instance['social_myspace'] = $new_instance['social_myspace'];
			$instance['social_pinterest'] = $new_instance['social_pinterest'];
			$instance['social_skype'] = $new_instance['social_skype'];
			$instance['social_vimeo'] = $new_instance['social_vimeo'];
			$instance['social_youtube'] = $new_instance['social_youtube'];
			
			return $instance;
		}
		
		public function widget($args, $instance) {
			extract($args);
			
			// Get the title and prepare it for display
			$title = apply_filters('widget_title', $instance['title']);
			
			// Get the description
			$description = $instance['description'];

			// Get the social links
			$social_facebook = $instance['social_facebook'];
			$social_twitter = $instance['social_twitter'];
			$social_gplus = $instance['social_gplus'];
			$social_digg = $instance['social_digg'];
			$social_dribbble = $instance['social_dribbble'];
			$social_flickr = $instance['social_flickr'];
			$social_linkedin = $instance['social_linkedin'];
			$social_myspace = $instance['social_myspace'];
			$social_pinterest = $instance['social_pinterest'];
			$social_skype = $instance['social_skype'];
			$social_vimeo = $instance['social_vimeo'];
			$social_youtube = $instance['social_youtube'];
			
			echo $before_widget;
			
			if ($title) {
				echo $before_title . $title . $after_title;
			}
			
			if ($description) {
				echo '<p>' . $description . '</p>';
			}
			
			echo '<ul class="social-widget clearfix">';
			
			if ($social_facebook) : ?>
				<li><a href="<?php echo $social_facebook ?>" class="facebook hide-text"></a></li>
			<?php endif;

			if ($social_twitter) : ?>
				<li><a href="<?php echo $social_twitter ?>" class="twitter hide-text"></a></li>
			<?php endif;

			if ($social_gplus) : ?>
				<li><a href="<?php echo $social_gplus ?>" class="gplus hide-text"></a></li>
			<?php endif;

			if ($social_digg) : ?>
				<li><a href="<?php echo $social_digg ?>" class="digg hide-text"></a></li>
			<?php endif;

			if ($social_dribbble) : ?>
				<li><a href="<?php echo $social_dribbble ?>" class="dribbble hide-text"></a></li>
			<?php endif;

			if ($social_flickr) : ?>
				<li><a href="<?php echo $social_flickr ?>" class="flickr hide-text"></a></li>
			<?php endif;

			if ($social_linkedin) : ?>
				<li><a href="<?php echo $social_linkedin ?>" class="linkedin hide-text"></a></li>
			<?php endif;

			if ($social_myspace) : ?>
				<li><a href="<?php echo $social_myspace ?>" class="myspace hide-text"></a></li>
			<?php endif;

			if ($social_pinterest) : ?>
				<li><a href="<?php echo $social_pinterest ?>" class="pinterest hide-text"></a></li>
			<?php endif;

			if ($social_skype) : ?>
				<li><a href="<?php echo $social_skype ?>" class="skype hide-text"></a></li>
			<?php endif;

			if ($social_vimeo) : ?>
				<li><a href="<?php echo $social_vimeo ?>" class="vimeo hide-text"></a></li>
			<?php endif;

			if ($social_youtube) : ?>
				<li><a href="<?php echo $social_youtube ?>" class="youtube hide-text"></a></li>
			<?php endif;
			
			echo '</ul>';
			echo $after_widget; 
		}
	}

	register_widget('Adaptive_Social_Widget');

?>