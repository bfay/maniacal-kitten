<?php get_header(); ?>

	<div class="container">
	
		<div class="row">
		
			<div class="span12 article-container-fix">
				
				<div class="article-container">
				
						<article class="page-content">
							
							<h1><?php _e('404: Page not Found!', 'adaptive-framework'); ?></h1>
							<hr />

							<p><?php _e('Oops, it seems you\'re looking for something that isn\'t here. Please try again.', 'adaptive-framework'); ?></p>
							
							<div class="search-form-404">
							
								<?php get_search_form(); ?>
							
							</div> <!-- end 404-search-form -->
							
						</article>
																	
				</div> <!-- end article-container -->
				
			</div>  <!-- end span9 -->
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer(); ?>