<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _sf
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="//use.typekit.net/ebq4mrn.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37218996-1']);
  _gaq.push(['_setDomainName', 'rockinguitarlessons.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div class="splash">
	<header id="masthead" class="site-header row" role="banner">
		<div class="row" id="header image">
			<div class="large-12 columns centered">
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</div>
		</div>
		<?php 
		if ( get_theme_mod( '_sf_theme_options_menu_name' ) == '' ) { ?>
		<hgroup>
			<div class="aligncenter"> <a href="index.php" title="Rockin Guitar Lessons"><img src="http://rockinguitarlessons.dev/wp-content/uploads/2013/06/logo.png" alt="logo" /></a> </div>
		</hgroup>
		<?php } ?>
		
		<?php if ( get_theme_mod( '_sf_theme_options_menu_sticky' ) == '' ) { 
			echo '<div class="contain-to-grid ">';
			
		} 
		else {
			echo '<div class="contain-to-grid sticky-topbar">';
			
		}
		?>
				<!-- Starting the Top-Bar -->
				<nav id="site-navigation" class="navigation-main top-bar" role="navigation">
					<ul class="title-area">
						<?php 
						if (! get_theme_mod( '_sf_theme_options_menu_name' ) == '' ) { ?>
						<li class="name">
							<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</li>
						<?php } 
							else {
								echo '<div class="contain-to-grid sticky-topbar">';
						} ?>
						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul>
					<section class="top-bar-section">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'depth' => 0,
								'items_wrap' => '<ul class="left">%3$s</ul>',
								'fallback_cb' => '_sf_menu_fallback', // workaround to show a message to set up a menu
								'walker' => new _sf_walker( array(
									'in_top_bar' => true,
									'item_type' => 'li'
								) ),
							) );
						?>
					
						<?php
						//include the search form, or not depending on user settings.
						if ( ! get_theme_mod( '_sf_theme_options_menu_search' ) == '' ) {
						echo '
						<ul class="right">
							<li class="divider hide-for-small"></li>
							<li class="has-form">';
							get_search_form();
							echo '</li>';
							echo ' <li class="has-form">
        						<a class="button" href="#">Search</a>
      							</li>';
							echo '</ul> </section></nav><!-- #site-navigation -->';
							echo '</div><!--# nav wrapper -->';
						} 
						else {
							echo '</section></nav><!-- #site-navigation -->';
							echo '</div><!--# nav wrapper -->';
							}
						?>
						
						<?php
							//if name is being shown in menu put description underneath.
							if ( ! get_theme_mod( '_sf_theme_options_menu_name' ) == '' ) { ?>
							<div class="row">
								<div class="large-12 columns">
									<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	
								</div>
							</div>
							<?php }?>
						
		
	</header><!-- #masthead -->
	</div>
	

	<div id="main" class="site-main">
