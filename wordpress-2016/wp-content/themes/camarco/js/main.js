
/* $(document).ready
---------------------------------------- */

$(document).ready(function(){
	
	"use strict";


	// ----- No JS
	// ---------------------------------------------
	$('html').removeClass('no-js');


    // ----- nivoLightbox
    // ---------------------------------------------
	$('a.js-lightbox').nivoLightbox();


	// ----- Menu Button
	// ---------------------------------------------
	$('.menu-button-open').click(function(e){
		e.preventDefault();
		$('body').addClass('js-stopScrolling');
		$('.header-navigation-container').stop().slideDown('fast');
	});
	$('.menu-button-close').click(function(e){
		e.preventDefault();
		$('body').removeClass('js-stopScrolling');
		$('.header-navigation-container').stop().slideUp('fast');
	});
	
	// Window Size Calculation
	$(window).resize(function() {
		$(window).height();
		$(window).width();
	});

	// Resize Actions
	window.onresize = function(){
		if (window.innerWidth > 767){
			// console.log('More that 991px');
			$('body').removeClass('js-stopScrolling');
			$('.header-navigation-container').show();
		}
		if (window.innerWidth <= 767){
			//console.log('Less that 991px');
			$('body').removeClass('js-stopScrolling');
			$('.header-navigation-container').hide();
		}
	}


	// ----- Sectors (Read More Button)
	// ---------------------------------------------
	$('.js-read-more').click(function(e){
		e.preventDefault();
		$(this).fadeOut('fast');
		$(this).parent().next().stop().slideDown('fast');
	});


	// ----- People Thumbnails
	// ---------------------------------------------

	
	
	// ----- Google Maps
	// ---------------------------------------------
	
	if($('body').hasClass('page-id-15')){

		function initialize() {
			
			var myLatlng = new google.maps.LatLng(51.5142235,-0.093489);
			
			var mapOptions = {
				zoom: 17,
				center: myLatlng,
				scrollwheel: false,
				draggable: false,
				zoomControl: true,
				disableDoubleClickZoom: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
					
			var map = new google.maps.Map(document.getElementById('google_map'), mapOptions);

			var stylez = [
				{
				  featureType: "all",
				  elementType: "all",
				  stylers: [
					{ saturation: -50 } // <-- THIS
				  ]
				}
			];
			
			var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });    
			map.mapTypes.set('tehgrayz', mapType);
			map.setMapTypeId('tehgrayz');
			
	        var interval = setTimeout(function () {
				var marker = new google.maps.Marker({
					draggable: false,
					animation: google.maps.Animation.DROP,
					raiseOnDrag: false,
					position: myLatlng, 
					map: map,
					title: 'Tourist',
					icon: new google.maps.MarkerImage(
						'/camarco.co.uk/wordpress-2016/wp-content/themes/camarco/img/map-marker.png', // my 16x48 sprite with 3 circular icons
						null,
						null,
						null,
						new google.maps.Size(154, 101) // scaled size of the entire sprite
					)
				});
	        }, 1500);

			var center;
			function calculateCenter() {
			  center = map.getCenter();
			}

			google.maps.event.addDomListener(map, 'idle', function() {
			  calculateCenter();
			});

			google.maps.event.addDomListener(window, 'resize', function() {
			    map.setCenter(center);
			});
		}
			
		google.maps.event.addDomListener(window, 'load', initialize);
	
	}

	

});