<?php
/*
The template part for displaying the QUOTES section.
*/
?>
	
<?php 
if(get_field('quotes')): 
?>	
		
	<section class="quotes">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-xs-12 col-sm-9 col-md-8 col-lg-7">
			
					<ul>
						<?php
						while(get_field('quotes')):
						if(get_sub_field('text')): 
						?>
							<li>
								<p><?php echo get_sub_field('text'); ?></p>
								<?php if(get_sub_field('author')): ?><p><?php echo get_sub_field('author'); ?></p><?php endif; ?>
								<?php if(get_sub_field('logo')): ?><p><?php echo get_sub_field('logo'); ?></p><?php endif; ?>
							</li>
							
						<?php
						endif; 
						endwhile; 
						?>
					</ul>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="clearfix"></div>
		
	</section>
				
<?php 
endif; 
?>