<?php 
/*
	Template Name: Full Width Page
*/
?>
 
<?php get_header(); ?>

	<div class="container">
	
		<div class="row">
		
			<div class="span12 article-container-fix">
				
				<div class="article-container">
				
					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

						<article class="page-content clearfix">
							
							<header>
								
								<?php if (current_user_can('edit_post', $post->ID)) {
									edit_post_link(__('Edit This', 'adaptive-framework'), '<p class="page-admin-edit-this">', '</p>');
								} ?>
								
								<h1><?php the_title(); ?></h1>
								
								<hr />
								
							</header>
							
							<?php the_content(); ?>
							
						</article>
												
					<?php endwhile; else : ?>
						<article class="no-posts">

							<h1><?php _e('No page was found.', 'adaptive-framework'); ?></h1>
							
						</article>
					<?php endif; ?>
																	
				</div> <!-- end article-container -->

				<div class="comments-area" id="comments">
					
					<?php comments_template('', true); ?>
					
				</div> <!-- end comments-area -->
				
			</div>  <!-- end span12 -->
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer(); ?>