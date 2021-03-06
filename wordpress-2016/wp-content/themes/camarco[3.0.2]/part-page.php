<?php
/*
The template part for displaying the PAGE section.
*/
?>
				
<section class="page">

	<div class="container">
	
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<?php 
				// News Single
				if(is_single()): 
				?>
					<p><?php the_date(); ?></p>

				<?php 
				// All Other Pages
				else: 
				?>
					<h1><?php the_title(); ?></h1>

				<?php 
				endif; 
				?>

				<?php the_content(); ?>

			</div>
			
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	
</section>