define(['jquery','bootstrap_select'], function($,bs)
{
	return new function(){
		var self = this;
		self.run = function(){
			$(".nav-trigger").on('click', function (e) {
		        $("body").toggleClass('off-canvas-body');
		        $(".menu-bar").toggleClass("off-canvas");
		        e.preventDefault();
		    });


		    $('.search-form-wrap .search-icon').on('click', function () {
		        $('.search-form-wrap .search-form').fadeIn('300');
		        $('.search-form-wrap .search-form .search').focus().css("color", "#000");
		        $('html, body').animate({scrollTop: 10}, 800);
		    });
		    $('.search-form-wrap .search-close').on('click', function () {
		        $('.search-form-wrap .search-form').fadeOut('300');
		    });

		    $('#to-top').on('click', function () {
		        $('html, body').animate({scrollTop: 0}, 800);
		        return false;
		    });

		    $(window).on('load',function () {
			    setTimeout(function () {
			        $("#loading").fadeOut(300);
			    }, 3100);
			});

			$(window).on('scroll',function () {
			    /*--------- Sticky Header ---------*/
			    if ($(window).width() > 1200) {
			        if ($(this).scrollTop() > 5) {
			            $('.header-two .header-wrap').addClass('is-sticky');
			            $('.logo-wrap').addClass('is-sticky');
			            $('.menu-top').addClass('is-sticky');
			        }
			        else {
			            $('.header-two .header-wrap').removeClass('is-sticky');
			            $('.logo-wrap').removeClass('is-sticky');
			            $('.menu-top').removeClass('is-sticky');
			        }
			    }

			    /*------------------- Scroll To Top Animate -------------------*/
			    if ($(this).scrollTop() > 100) {
			        $('#to-top').css({bottom: '55px'});
			    }
			    else {
			        $('#to-top').css({bottom: '-150px'});
			    }
			});
	    }

	}
});