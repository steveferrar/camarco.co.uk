<?php
/**
	The template part for displaying the CONTACT section.
*/
?>
				
<section class="contact">

	<div class="container">
	
		<div class="row">
		
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 contact__form">
				<?php echo do_shortcode('[contact-form-7 id="22" title="Contact"]')?>
			</div>
		
			<div class="col-xs-12 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-5 col-lg-offset-2">

				<?php if(get_field('address')): echo '<p class="contact__address"><strong>Camarco</strong><br />' . get_field('address') . '</p>'; endif; ?>

				<p class="contact__links">
					<?php 
					if(get_field('phone_number')): echo '<br /><span class="phone">' . get_field('phone_number') . '</span>'; endif; 
					if(get_field('email_address')): echo '<br /><span class="email"><a href="mailto:' . get_field('email_address') . '" title="' . get_field('email_address') . '">' . get_field('email_address') . '</a></span>'; endif;
					if(get_field('facebook') && get_field('facebook_text')): echo '<br /><span class="facebook"><a href="' . get_field('facebook') . '" title="Facebook" target="_blank">' . get_field('facebook_text') . '</a></span>'; endif;  
					if(get_field('twitter') && get_field('twitter_text')): echo '<br /><span class="twitter"><a href="' . get_field('twitter') . '" title="Twitter" target="_blank">' . get_field('twitter_text') . '</a></span>'; endif; 
					if(get_field('linkedin') && get_field('linkedin_text')): echo '<br /><span class="linkedin"><a href="' . get_field('linkedin') . '" title="LinkedIn" target="_blank">' . get_field('linkedin_text') . '</a></span>'; endif; 
					?>
				</p>

			</div>
			
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	
</section>

		
<div id="google_map"></div>