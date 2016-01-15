
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


});