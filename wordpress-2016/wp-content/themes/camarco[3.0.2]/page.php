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


			// Services
			elseif(is_page(9)): 
				get_template_part('part', 'page');
				get_template_part('part', 'quotes');


			// How We Work
			elseif(is_page(13)): 
				get_template_part('part', 'page');
				get_template_part('part', 'key-values');
				get_template_part('part', 'quotes');


			// Contact Us
			elseif(is_page(15)): 
				get_template_part('part', 'page');
				get_template_part('part', 'contact');
				get_template_part('part', 'quotes');


			// All Other Pages
			else:
				get_template_part('part', 'page');
				get_template_part('part', 'quotes');


			endif;
			?>
			
		<?php endwhile; // end of the loop. ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>