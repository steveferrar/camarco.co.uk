<?php
/**
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
			
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sector">

						<h2><?php echo get_sub_field('title'); ?></h2>

						<p class="sector__text">
						<?php 
						echo get_sub_field('text'); 
						if(get_sub_field('add_read_more') == 'Yes'):
							echo '&nbsp;<a href="" class="sector__read-more js-read-more" class="read-more-link">Read More</a>';
							echo '</p>';
							echo '<div class="sector__more-text js-more-text">' . get_sub_field('read_more_text') . '</div>';
						else:
							echo '</p>';
						endif;
						?>
					
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