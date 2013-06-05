<?php
/***********************************************************************************************/
/* Add a menu option to link to the customizer */
/***********************************************************************************************/
add_action('admin_menu', 'display_custom_options_link');
function display_custom_options_link() {
	add_theme_page('Adaptive Options', 'Adaptive Options', 'edit_theme_options', 'customize.php');
}

/***********************************************************************************************/
/* Add options in the theme customizer page */
/***********************************************************************************************/
add_action('customize_register', 'adaptive_customize_register');
function adaptive_customize_register($wp_customize) {
	// Logo 
	$wp_customize->add_section('adaptive_logo', array(
		'title' => __('Logo', 'adaptive-framework'),
		'description' => __('Allows you to upload a custom logo.', 'adaptive-framework'),
		'priority' => 35
	));
	
	$wp_customize->add_setting('adaptive_custom_settings[logo]', array(
		'default' => IMAGES . '/logo.png',
		'type' => 'option'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => __('Upload your Logo', 'adaptive-framework'),
		'section' => 'adaptive_logo',
		'settings' => 'adaptive_custom_settings[logo]'
	)));
	
	// Top Ad
	$wp_customize->add_section('adaptive_ad', array(
		'title' => __('Top Ad', 'adaptive-framework'),
		'description' => __('Allows you to upload an ad banner to display on the top of the page.', 'adaptive-framework'),
		'priority' => 36
	));
	
	$wp_customize->add_setting('adaptive_custom_settings[display_top_ad]', array(
		'default' => 0,
		'type' => 'option'
	));
	
	$wp_customize->add_control('adaptive_custom_settings[display_top_ad]', array(
		'label' => __('Display the Top Ad?', 'adaptive-framework'),
		'section' => 'adaptive_ad',
		'settings' => 'adaptive_custom_settings[display_top_ad]',
		'type' => 'checkbox'
	));

	$wp_customize->add_setting('adaptive_custom_settings[top_ad]', array(
		'default' => IMAGES . '/demo/ad-468x60.gif',
		'type' => 'option'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'top_ad', array(
		'label' => __('Upload the Top Banner Image', 'adaptive-framework'),
		'section' => 'adaptive_ad',
		'settings' => 'adaptive_custom_settings[top_ad]'
	)));

	$wp_customize->add_setting('adaptive_custom_settings[top_ad_link]', array(
		'default' => 'http://webdesign.tutsplus.com',
		'type' => 'option'
	));
	
	$wp_customize->add_control('adaptive_custom_settings[top_ad_link]', array(
		'label' => __('Link to the Target Website', 'adaptive-framework'),
		'section' => 'adaptive_ad',
		'settings' => 'adaptive_custom_settings[top_ad_link]',
		'type' => 'text'
	));
	
	// Contact Email
	$wp_customize->add_section('adaptive_contact_email', array(
		'title' => __('Contact Form Email', 'adaptive-framework'),
		'description' => __('Set the receiver email for the contact form.', 'adaptive-framework'),
		'priority' => 37
	));
	
	$wp_customize->add_setting('adaptive_custom_settings[contact_email]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('adaptive_custom_settings[contact_email]', array(
		'label' => __('Contact Form Email Address', 'adaptive-framework'),
		'section' => 'adaptive_contact_email',
		'settings' => 'adaptive_custom_settings[contact_email]',
		'type' => 'text'
	));
	
}	
?>