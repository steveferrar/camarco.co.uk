<?php
/**
	The template part for displaying the QUOTES section.
*/
?>


<?php 
$quotes = get_field('quotes', 2);
if($quotes):
$quote_background = get_bloginfo('template_url') . '/img/background-quote-0' . rand(1, 5) . '.jpg';
?>
		
	<section class="quotes" style="background-image:url(<?php echo $quote_background; ?>">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-xs-12 col-sm-9 col-md-8 col-lg-7 quote">

					<?php
					shuffle($quotes);
					foreach($quotes as $quote):
					if($quote['text']):
					$logo = wp_get_attachment_image_src( $quote['image'] , 'full' );
					?>
						<p class="quote__quotation"><img src="<?php bloginfo('template_url'); ?>/img/quote.png" alt="&ldquo;" /></p>
						<p class="quote__text"><?php echo $quote['text']; ?></p>
						<?php if($quote['author']): echo '<p class="quote__divide"><img src="' . get_bloginfo('template_url') . '/img/quote-divide.png" alt="&mdash;" /></p><p class="quote__author">' . $quote['author'] . '</p>'; endif; ?>
						<?php if($quote['image']): echo '<p class="quote__image"><img src="' . $logo[0] . '" alt="' . $quote['author'] . '" /></p>'; endif; ?>
						
					<?php
					endif;
					break;
					endforeach;
					?>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="clearfix"></div>
		
	</section>

<?php
endif;
?>