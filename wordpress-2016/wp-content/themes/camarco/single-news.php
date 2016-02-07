<?php
/**
	The template part for displaying the NEWS single.
*/
get_header(); ?>

	<?php if ( have_posts() ) : ?>
							
		<?php 
		// News
		get_template_part('part', 'news');
		get_template_part('part', 'quotes'); 
		?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>