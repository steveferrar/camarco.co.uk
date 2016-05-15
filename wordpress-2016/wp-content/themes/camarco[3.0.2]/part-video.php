<?php
/*
The template part for displaying the PAGE section.
*/
?>

<?php 
if(get_field('vimeo_id')):
// $imgid = get_field('vimeo_id');
// $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
// echo $hash[0]['thumbnail_large'];
?>

	<section class="video">

		<div class="container">
		
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<a class="js-lightbox" href="http://vimeo.com/<?php echo get_field('vimeo_id'); ?>?autoplay=1&amp;badge=badge&amp;color=FFE800" title="">
						<img src="<?php bloginfo('template_url'); ?>/img/geoffrey.jpg" alt="Play Video" class="thumbnail video__thumbnail" data-no-retina />
					</a>

				</div>
				
			</div>
			
		</div>
		
		<div class="clearfix"></div>
		
	</section>

<?php 
endif; 
?>