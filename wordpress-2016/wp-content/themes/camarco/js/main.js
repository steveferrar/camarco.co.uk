
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
		$(this).prev().stop().slideDown('fast');
	});


	// ----- Quotes
	// ---------------------------------------------
	var homeQuotes = $('.js-home-quote');
    var homeQuotesIndex = -1;
    
    function showNextQuote() {
        ++homeQuotesIndex;
        homeQuotes.eq(homeQuotesIndex % homeQuotes.length)
            .fadeIn(2000)
            .delay(4000)
            .fadeOut(2000, showNextQuote);
    }
    
    showNextQuote();


	// Smooth Scroll to Anchor
    // --------------------------------------------- 
	$("a.scrollAnchor").click(function(e) {
		e.preventDefault();
		if (window.innerWidth <= 767){
			$('body').removeClass('js-stopScrolling');
			$('.header-navigation-container').stop().slideUp('fast');
		};
		$('.menu-button').removeClass('active');
		$('.hamburger-menu').stop().slideUp();
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			|| location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			   if (target.length) {
				 $('html,body').stop().animate({
					 scrollTop: target.offset().top - 70
				}, 500);
				return false;
			}
		};
	});

	
	// ----- Google Maps
	// ---------------------------------------------
	
	if($('body').hasClass('page-id-15')){

		function initialize() {
			
			var myLatlng = new google.maps.LatLng(51.5142235,-0.093489);
			
			var mapOptions = {
				zoom: 16,
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