
/* $(document).ready
---------------------------------------- */

$(document).ready(function(){
	
	"use strict";


	// ----- No JS
	// ---------------------------------------------
	$('html').removeClass('no-js');


	// ----- Menu Button
	// ---------------------------------------------
	$('.menu-button-open').click(function(e){
		e.preventDefault();
		$('.header-navigation-container').stop().slideDown('fast');
	});
	$('.menu-button-close').click(function(e){
		e.preventDefault();
		$('.header-navigation-container').stop().slideUp('fast');
	});


	// ----- Sectors (Read More Button)
	// ---------------------------------------------
	$('.js-read-more').click(function(e){
		e.preventDefault();
		$(this).fadeOut('fast');
		$(this).parent().next().stop().slideDown('fast');
	});



	


});