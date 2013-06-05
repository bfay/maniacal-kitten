<?php

/***********************************************************************************************/
/* 	Define Constants */
/***********************************************************************************************/
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');

	
	

	
/***********************************************************************************************/
/* Load JS Files */
/***********************************************************************************************/
function load_custom_scripts() {
	wp_enqueue_script('custom_script', THEMEROOT . '/js/scripts.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts');





/***********************************************************************************************/
/* Set the max width of the uploaded images */
/***********************************************************************************************/
if (!isset($content_width)) $content_width = 784;




/***********************************************************************************************/
/* Add Theme Support for Post Formats, Post Thumbnails and Automatic Feed Links */
/***********************************************************************************************/
if (function_exists('add_theme_support')) {
	add_theme_support('post-formats', array('link', 'quote', 'gallery', 'video'));
	
	add_theme_support('post-thumbnails', array('post'));
	set_post_thumbnail_size(210, 210, true);
	add_image_size('custom-blog-image', 784, 350);

	add_theme_support('automatic-feed-links');
}




	
/***********************************************************************************************/
/* Add Menus */
/***********************************************************************************************/
function register_my_menus(){
	register_nav_menus(
		array(
			'top-menu' => __('Top Menu', 'adaptive-framework'),
			'main-menu' => __('Main Menu', 'adaptive-framework')
		)
	);
}
add_action('init', 'register_my_menus');
	
	



/***********************************************************************************************/
/* Localization Support */
/***********************************************************************************************/
function custom_theme_localization() {
	$lang_dir = THEMEROOT . '/lang';
	
	load_theme_textdomain('adaptive-framework', $lang_dir);
}

add_action('after_theme_setup', 'custom_theme_localization');
	




/***********************************************************************************************/
/* Disable the gallery default styling */
/***********************************************************************************************/
//add_filter('use_default_gallery_style', '__return_false');


	
	
	
/***********************************************************************************************/
/* Add Sidebar Support */
/***********************************************************************************************/
if (function_exists('register_sidebar')) {
	register_sidebar(
		array(
			'name' => __('Main Sidebar', 'adaptive-framework'),
			'id' => 'main-sidebar',
			'description' => __('The main sidebar area', 'adaptive-framework'),
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget' => '</div> <!-- end sidebar-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
	register_sidebar(
		array(
			'name' => __('Left Footer', 'adaptive-framework'),
			'id' => 'left-footer',
			'description' => __('The left footer area', 'adaptive-framework'),
			'before_widget' => '<div class="footer-widget span3">',
			'after_widget' => '</div> <!-- end footer-widget -->',
			'before_title' => '<h5>',
			'after_title' => '</h5>'
		)
	);
	register_sidebar(
		array(
			'name' => __('Right Footer', 'adaptive-framework'),
			'id' => 'right-footer',
			'description' => __('The right footer area', 'adaptive-framework'),
			'before_widget' => '<div class="footer-widget span6">',
			'after_widget' => '</div> <!-- end footer-widget -->',
			'before_title' => '<h5>',
			'after_title' => '</h5>'
		)
	);
}
	
	
	
	
/***********************************************************************************************/
/* Custom Function for Displaying Comments */
/***********************************************************************************************/
function adaptive_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;

	if (get_comment_type() == 'pingback' || get_comment_type() == 'trackback') : ?>
	
		<li class="pingback" id="comment-<?php comment_ID(); ?>">

			<article <?php comment_class('clearfix'); ?>>
			
				<header>
				
					<h4><?php _e('Pingback:', 'adaptive-framework'); ?></h4>
					<p><?php edit_comment_link(); ?></p>
					
				</header>
	
				<?php comment_author_link(); ?>
								
			</article>
		
	<?php endif; ?>
	
	<?php if (get_comment_type() == 'comment') : ?>
		<li id="comment-<?php comment_ID(); ?>">
	
			<article <?php comment_class('clearfix'); ?>>
			
				<header>
				
					<h4><span><?php _e('AUTHOR', 'adaptive-framework'); ?></span><?php comment_author_link(); ?></h4>
					<p><span>on <?php comment_date(); ?> at <?php comment_time(); ?> - </span><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></p>
					
				</header>
	
				<figure class="comment-avatar">
					<?php 
						$avatar_size = 80;
						if ($comment->comment_parent != 0) {
							$avatar_size = 48;
						}
						
						echo get_avatar($comment, $avatar_size);
					?>
				</figure>
				
				<?php if ($comment->comment_approved == '0') : ?>
				
					<p class="awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'adaptive-framework'); ?></p>
					
				<?php endif; ?>

				<?php comment_text(); ?>
								
			</article>
			
	<?php endif;	
}




/***********************************************************************************************/
/* Custom Comment Form */
/***********************************************************************************************/
function adaptive_custom_comment_form($defaults) {
	$comment_notes_after = '' .
		'<div class="allowed-tags">' .
		'<p><strong>' . __('Allowed Tags', 'adaptive-framework') . '</strong></p>' .
		'<code> ' . allowed_tags() . ' </code>' .
		'</div> <!-- end allowed-tags -->';
	
	$defaults['comment_notes_before'] = '';
	$defaults['comment_notes_after'] = $comment_notes_after;
	$defaults['id_form'] = 'comment-form';
	$defaults['comment_field'] = '<p><textarea name="comment" id="comment" cols="30" rows="10"></textarea></p>';

	return $defaults;
}

add_filter('comment_form_defaults', 'adaptive_custom_comment_form');

function adaptive_custom_comment_fields() {
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = ($req ? " aria-required='true'" : '');
	
	$fields = array(
		'author' => '<p>' . 
						'<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' />' .
						'<label for="author">' . __('Name', 'adaptive-framework') . '' . ($req ? __(' (required)', 'adaptive-framework') : '') . '</label>' .
		            '</p>',
		'email' => '<p>' . 
						'<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . ' />' .
						'<label for="email">' . __('Email', 'adaptive-framework') . '' . ($req ? __(' (required) (will not be published)', 'adaptive-framework') : '') . '</label>' .
		            '</p>',
		'url' => '<p>' . 
						'<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" />' .
						'<label for="url">' . __('Website', 'adaptive-framework') . '</label>' .
		            '</p>'
	);

	return $fields;
}

add_filter('comment_form_default_fields', 'adaptive_custom_comment_fields');

/***********************************************************************************************/
/* Load Theme Options Page and Custom Widgets */
/***********************************************************************************************/
require_once('functions/adaptive-theme-customizer.php');
require_once('functions/widget-ad-125.php');
require_once('functions/widget-ad-260.php');
require_once('functions/widget-adaptive-social.php');
require_once('functions/widget-video.php');

?>