<?php
/*
The template for displaying the HOME page.
*/
get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
		
		<?php 
			// Home Page
			get_template_part('part', 'home');
			get_template_part('part', 'quotes');
			get_template_part('part', 'page');
			get_template_part('part', 'video');
			get_template_part('part', 'people');
	 	?>
			
		<?php endwhile; // end of the loop. ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>