<?php get_header(); ?>

	<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
				<div class="article-container">
				
					<?php if (have_posts()) : ?>
					
						<div class="search-results">

							<?php
								$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
							?>
							
							<h4><?php _e('Posts written by: ', 'adaptive-framework'); ?> <?php echo $curauth->display_name; ?></h4>
							
						</div> <!-- end search-results -->
						
						<hr class="fancy-hr" />
					
					<?php while(have_posts()) : the_post(); ?>

						<?php get_template_part('content', get_post_format()); ?>
						
					<?php endwhile; else : ?>
						<article class="no-posts">

							<h1><?php _e('No posts were found.', 'adaptive-framework'); ?></h1>
							
						</article>
					<?php endif; ?>
					
					<div class="article-nav clearfix">
					
						<p class="article-nav-next"><?php previous_posts_link(__('Newer Posts &raquo;', 'adaptive-framework')); ?></p>
						<p class="article-nav-prev"><?php next_posts_link(__('&laquo; Older Posts', 'adaptive-framework')); ?></p>
					
					</div> <!-- end clearfix -->
					
				</div> <!-- end article-container -->
				
			</div>  <!-- end span9 -->
			
			<aside class="main-sidebar span3">
				
				<?php get_sidebar('main-sidebar'); ?>
												
			</aside> <!-- end span3 -->
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer(); ?>