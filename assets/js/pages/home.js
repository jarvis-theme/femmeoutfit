define(['jquery','owl','magnify'], function($,owlCarousel,magnificPopup)
{
	return new function(){
		var self = this;
		self.run = function(){
			window.onload = yotube();
	    }

	    var yotube = function(){
		    var vidDefer = document.getElementsByTagName('iframe');
		    for (var i=0; i<vidDefer.length; i++) {
			    if(vidDefer[i].getAttribute('data-src')) {
			    	vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
			    } 
			} 
		};

		// Single Slider One
	    $('.single-slider-1').owlCarousel({
	        rtl: false,
	        loop: true,
	        nav: true,
	        autoplay: true,
	        dots: true,
	        responsive: {
	            0: {items: 1}
	        },
	        navText: [
	            "<i class='arrow_carrot-left'></i>",
	            "<i class='arrow_carrot-right'></i>"
	        ]
	    });

		$('.brand-slider').owlCarousel({
	        rtl: false,
	        loop: true,
	        nav: false,
	        autoplay: false,
	        dots: false,
	        responsive: {
	            992: {items: 5},
	            767: {items: 4},
	            480: {items: 3},
	            380: {items: 2},
	            0: {items: 1}
	        }
	    });

	    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
	        disableOn: 700,
	        type: 'iframe',
	        mainClass: 'mfp-fade',
	        removalDelay: 160,
	        preloader: false,
	        fixedContentPos: false
	    });

	}
});