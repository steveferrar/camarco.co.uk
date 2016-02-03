<?php
/**
	The template for displaying the FOOTER after the close of <div id="page-wrapper">
*/
?>
	
	<div class="clearfix"></div>
	<?php // header.php: <div id="page-wrapper"> ?>
	</div>
	
	<footer id="footer" class="">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-xs-12">
				<div class="footer-border">
				<div class="row">
			
					<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4 col-lg-4 footer-logo">
						<a href="<?php echo get_home_url(); ?>" title="Camarco">
							<img src="<?php bloginfo('template_url'); ?>/img/camarco.png" alt="Camarco" />
						</a>
					</div>
				
					<div class="col-xxs-12 col-xs-6 col-sm-8 col-md-8 col-lg-8 footer-links">
						<nav id="footer-navigation">
							<ul>
								<!--<li class="nav-footer-facebook"><a href="#" title="Facebook" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Facebook" /></a></li>-->
								<li class="nav-footer-twitter"><a href="https://twitter.com/CamarcoPR" title="Twitter" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="Twitter" /></a></li>
								<li class="nav-footer-linkedin"><a href="https://www.linkedin.com/company/camarco" title="LinkedIn" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="LinkedIn" /></a></li>
								<li class="nav-footer-news"><a href="<?php echo get_post_type_archive_link('news'); ?>" title="News">News</a></li>
								<li class="nav-footer-divide">|</li>
								<li class="nav-footer-contactus"><a href="<?php echo get_permalink(15); ?>" title="Contact">Contact Us</a></li>
							</ul>
						</nav>
						<p>&copy; <?php echo date('Y') ?> Camarco</p>
					</div>
				
				</div>
				</div>
				</div>
				
			</div>
			
		</div>
	
	</footer>
	
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	
	<?php wp_footer(); ?>
	
	<!-- Google Analytics
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
	-->
	
</body>
</html>