<?php
/**
	The template for displaying the NEWS archive.
*/
get_header(); ?>

	<?php if ( have_posts() ) : ?>
							
		<?php 
		// News
		get_template_part('part', 'news');
		get_template_part('part', 'quotes'); 
		?>
		
	<?php else : ?>
		
		<section class="page 404">
		
			<div class="container">
			
				<div class="row">
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Sorry&hellip;</h1>
						<p>There are no articles to display at the moment. Please check back later.</p>
						<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here</a> to go back to the home page.</p>
					</div>
					
				</div>
				
			</div>
			
			<div class="clearfix"></div>
			
		</section>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>
	