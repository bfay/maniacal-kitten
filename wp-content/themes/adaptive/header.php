<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Web Font -->
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet'>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	<link rel="shortcut icon" href="<?php print IMAGES; ?>/icons/favicon.ico">
	<link rel="apple-touch-icon" href="<?php print IMAGES; ?>/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php print IMAGES; ?>/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php print IMAGES; ?>/icons/apple-touch-icon-114x114.png">
	
	<!-- Script required for extra functionality on the comment form -->
	<?php if (is_singular()) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php $options = get_option('adaptive_custom_settings'); ?>

	<header class="main-header" id="top">
		
		<div class="top-menu-container">
		
			<div class="container">
			
				<nav id="top-nav">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'top-menu'
					));
				?>
				</nav>
				
				<a href="#" id="responsive-top-nav-button"><?php _e('Select a Page...', 'adaptive-framework'); ?></a>
				<div class="responsive-top-navigation"></div>
				
			</div> <!-- end container -->
			
		</div> <!-- end top-menu-container -->
		
		<div class="container">
		
			<div class="row logo-container">
			
				<div class="span3">
					<?php $options['logo'] == '' ? $logo = IMAGES . '/logo.png' : $logo = $options['logo']; ?>
					
					<h1 class="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" /></a>
					</h1>
					
				</div> <!-- end span3 -->
				
				<div class="span9 clearfix">
					
					<?php if ($options['display_top_ad'] && $options['top_ad'] != '') : ?>

						<figure class="ad-block fr">
							<a href="<?php echo $options['top_ad_link']; ?>"><img src="<?php print $options['top_ad']; ?>" alt="Ad" /></a>
						</figure>
					
					<?php endif; ?>
					
				</div> <!-- end span9 -->
				
			</div> <!-- end row -->
			
			<div class="row">
			
				<hr class="span12" />
			
				<div class="span12">
					
					<nav class="main-navigation clearfix">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'main-menu'
							));
						?>
					</nav>

					<a href="#" class="responsive-navigation-button"></a>
					
				</div> <!-- end span12 -->
				
			</div> <!-- end row -->
			
			<div class="responsive-navigation span12">
			
				<nav>
					<!-- dynamically generated nav -->
				</nav>
				
			</div> <!-- end responsive navigation -->
		
		</div> <!-- end container -->
		
	</header>