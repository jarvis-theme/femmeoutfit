define(['jquery','owl','magnify'], function($,owlCarousel,magnificPopup)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			//
		};

		/*------------------- Related Product Slider  -------------------*/
	    if ($('.related-prod-slider').length > 0) {
	        $('.related-prod-slider').owlCarousel({
	            dots: false,
	            loop: true,
	            autoplay: true,
	            autoplayHoverPause: true,
	            nav: true,
	            navText: [
	                "<i class='arrow_carrot-left'></i>",
	                "<i class='arrow_carrot-right'></i>"
	            ],
	            margin: 30,
	            responsive: {
	                1200: {items: 4},
	                990: {items: 3},
	                600: {items: 2},
	                480: {items: 1},
	                0: {items: 1}
	            }
	        });
	    }

	    if ($('.related-prod-slider-2').length > 0) {
	        $(".related-prod-slider-2").owlCarousel({
	            dots: false,
	            loop: true,
	            autoplay: true,
	            autoplayHoverPause: true,
	            smartSpeed: 100,
	            nav: true,
	            navText: [
	                "<i class='arrow_carrot-left'></i>",
	                "<i class='arrow_carrot-right'></i>"
	            ],
	            responsive: {
	                0: {items: 1},
	                1200: {items: 3},
	                990: {items: 2},
	                600: {items: 2},
	                480: {items: 1}
	            }
	        });
	    }

	    /*------------------- Recent Product Slider  -------------------*/
	    if ($('.recent-prod-slider').length > 0) {
	        $(".recent-prod-slider").owlCarousel({
	            dots: false,
	            loop: true,
	            autoplay: true,
	            autoplayHoverPause: true,
	            smartSpeed: 100,
	            nav: true,
	            responsive: {
	                0: {items: 1},
	                1200: {items: 1},
	                767: {items: 1},
	                600: {items: 2},
	                480: {items: 1}
	            },
	            navText: [
	                "<i class='arrow_carrot-left'></i>",
	                "<i class='arrow_carrot-right'></i>"
	            ]
	        });
	    }

	    $('.popup-gallery').magnificPopup({
	        delegate: 'a.popup',
	        type: 'image',
	        tLoading: 'Loading image #%curr%...',
	        mainClass: 'mfp-img-mobile',
	        gallery: {
	            enabled: true,
	            navigateByImgClick: true,
	            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
	        },
	        image: {
	            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	            titleSrc: function (item) {
	                return item.el.attr('title') + '<small>by Femmeoutfit</small>';
	            }
	        }
	    });

	    $(document).on('shown.bs.modal', function () {
	        $(this).find('.sync1, .sync2').each(function () {
	            $(this).data('owlCarousel') ? $(this).data('owlCarousel').onResize() : null;
	        });
	    });

    	var sync1 = $(".sync1");
	    var sync2 = $(".sync2");
	    var sync3 = $(".layout-5 .sync1");
	    var sync4 = $(".layout-5 .sync2");
	    var navSpeedThumbs = 500;

	    sync4.owlCarousel({
	        rtl: false,
	        items: 4,
	        nav: false,
	        navSpeed: navSpeedThumbs,
	        responsive: {
	            992: {items: 4},
	            767: {items: 5},
	            600: {items: 4}
	        },
	        responsiveRefreshRate: 200
	    });

	    sync3.owlCarousel({
	        rtl: false,
	        items: 1,
	        navSpeed: 1000,
	        nav: true,
	        onChanged: syncPosition,
	        responsiveRefreshRate: 200,
	        navText: [
	            "<span class='nav-prev'>Prev</span>",
	            "<span class='nav-next'>Next</span>"
	        ]
	    });


	    sync2.owlCarousel({
	        rtl: false,
	        items: 4,
	        nav: true,
	        margin: 20,
	        navSpeed: navSpeedThumbs,
	        responsive: {
	            992: {items: 4},
	            767: {items: 5},
	            600: {items: 4}
	        },
	        responsiveRefreshRate: 200,
	        navText: [
	            "<i class='arrow_carrot-left'></i>",
	            "<i class='arrow_carrot-right'></i>"
	        ]
	    });

	    sync1.owlCarousel({
	        rtl: false,
	        items: 1,
	        navSpeed: 1000,
	        nav: false,
	        onChanged: syncPosition,
	        responsiveRefreshRate: 200

	    });

	    $('#q_up').click(function(){
	        var q_val_up=parseInt($("input#quantity_wanted").val());
	        if(isNaN(q_val_up)) {
	            q_val_up=0;
	        }
	        $("input#quantity_wanted").val(q_val_up+1).keyup(); 
	        return false; 
	    });
	    
	    $('#q_down').click(function(){
	        var q_val_up=parseInt($("input#quantity_wanted").val());
	        if(isNaN(q_val_up)) {
	            q_val_up=0;
	        }
	        
	        if(q_val_up>1) {
	            $("input#quantity_wanted").val(q_val_up-1).keyup();
	        } 
	        return false; 
	    });


	    var syncPosition = function(el) {
	        var current = this._current;
	        $(".sync2")
	                .find(".owl-item")
	                .removeClass("synced")
	                .eq(current)
	                .addClass("synced");
	        center(current);
	    }

	    $(".sync2").on("click", ".owl-item", function (e) {
	        e.preventDefault();
	        var number = $(this).index();
	        sync1.trigger("to.owl.carousel", [number, 1000]);
	    });

	    var center = function (num) {

	        var sync2visible = sync2.find('.owl-item.active').map(function () {
	            return $(this).index();
	        });

	        if ($.inArray(num, sync2visible) === -1) {
	            if (num > sync2visible[sync2visible.length - 1]) {
	                sync2.trigger("to.owl.carousel", [num - sync2visible.length + 2, navSpeedThumbs, true]);
	            } else {
	                sync2.trigger("to.owl.carousel", Math.max(0, num - 1));
	            }
	        } else if (num === sync2visible[sync2visible.length - 1]) {
	            sync2.trigger("to.owl.carousel", [sync2visible[1], navSpeedThumbs, true]);
	        } else if (num === sync2visible[0]) {
	            sync2.trigger("to.owl.carousel", [Math.max(0, num - 1), navSpeedThumbs, true]);
	        }
	    }
	};
});