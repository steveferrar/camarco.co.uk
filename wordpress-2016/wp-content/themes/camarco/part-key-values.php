<?php
/**
	The template part for displaying the QUOTES section.
*/
?>
	
<?php 
if(get_field('key_values')): 
?>	
		
	<section class="columns">
	
		<div class="container">
		
			<div class="row">
			
				<?php
				$i = 1;
				while(has_sub_field('key_values')):
				if((get_sub_field('title')) && (get_sub_field('text'))): 
				?>
			
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h2><?php echo get_sub_field('title'); ?></h2>
						<?php echo get_sub_field('text'); ?>
					
					</div>
							
				<?php
				endif;
				
				if($i == 2):
					echo '<div class="clearfix"></div>';
					$i = 1;
				else:
					$i++;	
				endif;
				
				endwhile; 
				?>
				
			</div>
			
		</div>
		
		<div class="clearfix"></div>
		
	</section>
				
<?php 
endif; 
?>