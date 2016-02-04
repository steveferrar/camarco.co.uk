<?php
/**
	The template part for displaying the CONTACT section.
*/
?>
				
<section class="contact">

	<div class="container">
	
		<div class="row">
		
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">

				<?php if(get_field('address')): echo '<p class="contact__address"><strong>Camarco</strong><br />' . get_field('address') . '</p>'; endif; ?>

				<p class="contact__links">
					<?php 
					if(get_field('phone_number')): echo '<br /><span class="phone_number">' . get_field('phone_number') . '</span>'; endif; 
					if(get_field('email_address')): echo '<br /><span class="email_address"><a href="mailto:' . get_field('email_address') . '" title="' . get_field('email_address') . '">' . get_field('email_address') . '</a></span>'; endif;
					if(get_field('facebook') && get_field('facebook_text')): echo '<br /><span class="facebook"><a href="' . get_field('facebook') . '" title="Facebook" target="_blank">' . get_field('facebook_text') . '</a></span>'; endif;  
					if(get_field('twitter') && get_field('twitter_text')): echo '<br /><span class="twitter"><a href="' . get_field('twitter') . '" title="Twitter" target="_blank">' . get_field('twitter_text') . '</a></span>'; endif; 
					if(get_field('linkedin') && get_field('linkedin_text')): echo '<br /><span class="linkedin"><a href="' . get_field('linkedin') . '" title="LinkedIn" target="_blank">' . get_field('linkedin_text') . '</a></span>'; endif; 
					?>
				</p>

			</div>
		
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
				sdfsdfds
			</div>
			
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	
</section>

		
<div id="google_map"></div>