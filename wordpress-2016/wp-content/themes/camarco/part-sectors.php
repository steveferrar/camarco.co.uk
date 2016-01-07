<?php
/*
The template part for displaying the SECTORS section.
*/
?>
	
<?php 
if(get_field('sectors')): 
?>	
		
	<section class="columns">
	
		<div class="container">
		
			<div class="row">
			
				<?php
				$i = 1;
				while(has_sub_field('sectors')):
				if((get_sub_field('title')) && (get_sub_field('text'))): 
				?>
			
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h2><?php echo get_sub_field('title'); ?></h2>
						<?php echo get_sub_field('text'); ?>
						<?php // echo get_sub_field('add_read_more'); ?>
						<div class="read-more-text">
							<?php echo get_sub_field('read_more_text'); ?>
						</div>
					
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

<?php
if(get_field('additional_content')):
?>
	<section class="page">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
					<?php echo get_field('additional_content'); ?>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="clearfix"></div>
		
	</section>
<?php
endif;
?>