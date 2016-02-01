<?php
/**
	The template for displaying all GENERIC and most SPECIFIC pages.
*/
get_header(); ?>

	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php 
			// Sectors
			if(is_page(5)):
				get_template_part('part', 'page');
				get_template_part('part', 'sectors');
				get_template_part('part', 'quotes');
			?>
		
			<?php 
			// Services
			elseif(is_page(9)): 
				get_template_part('part', 'page');
				get_template_part('part', 'quotes');
			?>
		
			<?php 
			// How We Work
			elseif(is_page(13)): 
				get_template_part('part', 'page');
				get_template_part('part', 'key-values');
				get_template_part('part', 'quotes');
			?>
		
			<?php 
			// Contact Us
			elseif(is_page(15)): 
				get_template_part('part', 'page');
				get_template_part('part', 'contact');
				get_template_part('part', 'quotes');
			?>
			
			<?php 
			// All Other Pages
			else:
			?>
				
				<section class="page">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
							
						</div>
						
					</div>
					
					<div class="clearfix"></div>
					
				</section>
		
			<?php
			endif;
			?>
			
		<?php endwhile; // end of the loop. ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>