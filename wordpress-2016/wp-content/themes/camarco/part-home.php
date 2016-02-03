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
					<img src="<?php bloginfo('template_url'); ?>/img/camarco-home.png" alt="Camarco" />
					<br />
					<?php if(get_field('introduction')): echo get_field('introduction') ; endif; ?>
				</div>

			</div>

		</div>

	</div>

	<div class="clearfix"></div>
	
</section>