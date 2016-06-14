console.log('script.js: online.');

$(document).ready(function() {
	// bootstrap slider
	$('#myCarousel').carousel({
		interval: 20000
	})
	$('#myCarousel').on('slid.bs.carousel', function() {});
	//bootstrap tabs
	$('#someTab').tab('show')
	//message close
	$('#close-message').click(function() {
		$( '.message' ).slideUp();
	});
	//weather swap
	$('.weather').click(function(){
		$('.weather-toggle').toggle(300);
	});
	// nav
	$('#close-nav').click(function(){
		$('.nav-wrap').animate({
			left: '-352',
			}, 500, function() {
				
			});
		$('#show-nav').animate({
			left: '0',
			}, 500, function() {
				
			});
	});

	$('#show-nav').click(function (){
		$('#show-nav').css({left: '-60px',});
		$('.nav-wrap').animate({
				left: '0',
			}, 500, function() {
			
		});

	})


	


});
