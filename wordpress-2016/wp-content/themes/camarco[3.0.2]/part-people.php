<?php
/*
The template part for displaying the OUR PEOPLE section.
*/
?>
	
<?php 
if(get_field('profiles')): 
?>	

	<section id="our-people">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Our People</h1>
					<?php echo get_field('our_people_introduction'); ?>
				</div>
				
				<?php /*
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 our-people-profiles" style="display:none;">
				
					<div class="row">
				
						<?php
						// Profiles
						$p = 1;
						while(has_sub_field('profiles')):
						if((get_sub_field('name')) && (get_sub_field('photo'))): 
						?>
					
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
								<div class="row">
								
									<div class="col-xxs-12 col-xs-4 col-sm-3 col-md-2 col-lg-2">
									
										<?php $photo = wp_get_attachment_image_src( get_sub_field('photo') , '' ); ?>
										<img src="<?php echo $photo[0]; ?>" alt="<?php echo get_sub_field('name'); ?>" data-no-retina />
										
									</div>
								
									<div class="col-xxs-12 col-xs-8 col-sm-9col-md-10 col-lg-10">
										<h2><?php echo get_sub_field('name'); ?></h2>
										<p><em><?php echo get_sub_field('job_title'); ?></em></p>
										<?php echo get_sub_field('biography'); ?>
									</div>
									
								</div>
							
							</div>
									
						<?php
						$p++;
						endif;
						endwhile;
						?>
							
					</div>
				
				</div>
				*/ ?>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 people__thumbnails">
				
					<div class="row">
			
						<?php
						// Thumbnails
						$t = 1;
						while(has_sub_field('profiles')):
						if((get_sub_field('name')) && (get_sub_field('photo'))): 
						$photo = wp_get_attachment_image_src( get_sub_field('photo') , '' );
						?>
							
							<div class="col-xxs-6 col-xs-4 col-sm-4 col-md-3 col-lg-2 people__thumbnail">
								
								<a href="#inline-content-<?php echo $t; ?>" title="<?php echo get_sub_field('name'); ?>" class="js-lightbox" data-lightbox-type="inline" data-lightbox-gallery="people">
									
									<img src="<?php echo $photo[0]; ?>" alt="<?php echo get_sub_field('name'); ?>" alt="photo" data-no-retina />
									
									<div class="people__thumbnail-caption">
									
										<?php 
										echo '<span class="name"><strong>' . get_sub_field('name') . '</strong></span>';
										if (get_sub_field('job_title')): 
											echo '<span class="job-title hidden-xs">' . get_sub_field('job_title') . '</span>'; 
										endif; 
										?>
									
									</div>
									
								</a>


								<!-- Inline Content (Lightbox) -->
								<div id="inline-content-<?php echo $t; ?>" class="people__info">

									<div class="row">

										<div class="col-xxs-12 col-xs-4 col-sm-3 col-md-3 col-lg-2">
											<img src="<?php echo $photo[0]; ?>" alt="<?php echo get_sub_field('name'); ?>" alt="photo" data-no-retina />
										</div>

										<div class="col-xxs-12 col-xs-8 col-sm-9 col-md-9 col-lg-10">
											
											<p class="people__info-name"><strong><?php echo get_sub_field('name'); ?></strong></p>
											<p class="people__info-job"><em><?php echo get_sub_field('job_title'); ?></em></p>
											</p>
											<div class="people__info-biography">
												
												<?php echo get_sub_field('biography'); ?>
												<?php $firstname = explode(' ',trim(get_sub_field('name'))); ?>
												<?php if (get_sub_field('email') || get_sub_field('phone') || get_sub_field('linkedin')): echo '<p class="people__info-contact">'; endif; ?>
													<?php if (get_sub_field('phone')): echo '<span><i class="fa fa-phone-square"></i> ' . get_sub_field('phone') . '</span>'; endif; ?>
													<?php if (get_sub_field('email')): echo '<span><i class="fa fa-envelope"></i> <a href="mailto:' . get_sub_field('email') . '" title="' . get_sub_field('email') . '">' . get_sub_field('email') . '</a></span>'; endif; ?>
													<?php if (get_sub_field('linkedin')): echo '<span><i class="fa fa-linkedin-square"></i> <a href="' . get_sub_field('linkedin') . '"> Connect with ' . $firstname[0] . ' on LinkedIn</a></span>'; endif; ?>
												<?php if (get_sub_field('email') || get_sub_field('phone') || get_sub_field('linkedin')): echo '</p>'; endif; ?>
											
											</div>

										</div>

									</div>

								</div>
							
							</div>
									
						<?php
						$t++;
						endif;
						endwhile; 
						?>
							
					</div>
				
				</div>
				
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