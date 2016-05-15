<?php
/*
The template part for displaying the PAGE section.
*/
?>
				
<section class="home"> 

	<div class="clearfix"></div>

	<div class="home__header-content">

		<div class="container">

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="<?php bloginfo('template_url'); ?>/img/camarco-home.png" alt="Camarco" class="home__logo" />
					<br />
					<?php if(get_field('introduction')): echo get_field('introduction') ; endif; ?>
				</div>

			</div>

		</div>

	</div>

	<div class="home__header-quotes">
	<div class="home__header-quotes-bg"></div>

		<div class="container">

			<div class="row">

					<?php 
					$quotes = get_field('quotes', 2);
					if($quotes):
					?>

						<?php
						shuffle($quotes);
						foreach($quotes as $quote):
						if($quote['text']):
						$logo = wp_get_attachment_image_src( $quote['logo'] , 'full' );
						?>
							<div class="home__header-quote js-home-quote">
							<div class="home__header-quote-inner">

								<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
									<p class="quote__text">&ldquo;<?php echo $quote['text']; ?>&rdquo;</p>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
									<?php if($logo): echo '<p class="quote__image"><img src="' . $logo[0] . '" alt="' . $quote['author'] . '" data-no-retina /></p>'; endif; ?>
								</div>

							</div>
							</div>
						<?php
						endif;
						endforeach;
						?>

					<?php
					endif;
					?>

				</div>

			</div>

		</div>

	</div>

	<div class="clearfix"></div>
	

</section>