<?php 
/*
	Template Name: Archives Page
*/
?>
 
<?php get_header(); ?>

	<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
				<div class="article-container">
				
						<article class="page-content clearfix">
							
							<header>
								
								<?php if (current_user_can('edit_post', $post->ID)) {
									edit_post_link(__('Edit This', 'adaptive-framework'), '<p class="page-admin-edit-this">', '</p>');
								} ?>
								
								<h1><?php the_title(); ?></h1>
								
								<hr />
								
							</header>

							<h4>Archives by Month</h4>
							<hr />

							<ul>
								<?php wp_get_archives('type=monthly'); ?>
							</ul>

							<h4>Archives by Subject</h4>
							<hr />

							<ul>
								<?php wp_list_categories('hiararchical=0&title_li='); ?>
							</ul>
							
						</article>
																	
				</div> <!-- end article-container -->
				
			</div>  <!-- end span9 -->
			
			<aside class="main-sidebar span3">
				
				<?php get_sidebar(); ?>
												
			</aside> <!-- end span3 -->
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer(); ?>