	<footer>
	
		<div class="footer-widget-area">
		
			<div class="container">
				
				<div class="row">
				
					<div class="span6">
						
						<div class="row">
							
							<?php get_sidebar('left-footer'); ?>
							
						</div> <!-- end row -->
						
					</div> <!-- end span6 -->

					<?php get_sidebar('right-footer'); ?>
									
				</div> <!-- end row -->
				
			</div> <!-- end container -->
			
		</div> <!-- end footer-widget-area -->
		
		<div class="copyright-container">
		
			<div class="container clearfix">
				
				<a href="#top" class="top-link-footer"><?php _e('Go To Top', 'adaptive-framework'); ?></a>
				<p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. <?php _e('All rights reserved', 'adaptive-framework'); ?>.</p>
				<p><?php _e('Powered by', 'adaptive-framework'); ?> <a href="http://www.wordpress.org">WordPress</a>. <a href="http://www.adipurdila.com">Adaptive Theme</a> by <a href="http://www.adipurdila.com">Adi Purdila</a>.</p>
				
			</div> <!-- end container -->
			
		</div> <!-- end copyright-container -->
		
	</footer>
	
	<?php wp_footer(); ?>

</body>
</html>