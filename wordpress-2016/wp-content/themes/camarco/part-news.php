<?php
/**
	The template part for displaying the NEWS articles.
*/
?>
				
<section class="page">

	<div class="container">
	
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1>News</h1>
			</div>

		</div>

	</div>

</section>
				
<section class="columns news">

	<div class="container">
	
		<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php if(is_single()): ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news__article news_article--single">
				<?php else :?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 news__article news__article--archive">
				<?php endif; ?>
					
					<div class="news__article-inner">

						<p class="news__article-date"><?php the_date(); ?></p>

						<?php /*
						<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
							<h2 class="news__article-title"><?php the_title(); ?></h2>
						</a>
						*/ ?>

						<h2 class="news__article-title"><?php the_title(); ?></h2>

						<?php the_content(); ?>

						<?php if(get_field('download')): echo '<p><a href="' . get_field('download') . '" title="Download Press Release" target="_blank" class="news__article-download">Download Press Release</a></p>'; endif; ?>

					</div>

				</div>
	
			<?php endwhile; ?>
				
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	
</section>
				
<section class="page">

	<div class="container">
	
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news__navigation">
				
				<?php if(is_single()): ?>
					<p><a href="<?php echo get_post_type_archive_link('news'); ?>" title="All News">All Articles</a></p>
				<?php else :?>
					<p><?php posts_nav_link('&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;','Newer Articles','Older Articles'); ?></p>
				<?php endif; ?>
				
			</div>

		</div>

	</div>

</section>