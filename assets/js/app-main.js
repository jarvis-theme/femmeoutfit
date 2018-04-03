var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
	urlArgs: "v=001a",
	shim: {
		'cart' : {
			deps : ['jquery','noty']
		},
		"bootstrap"	: {
			deps: ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"owl" : {
			exports: 'owlCarousel'
		},
		"magnify" : {
			deps : ['jquery'],
			exports: 'magnificPopup'
		},
		"bootstrap_select" : {
			deps : ['jquery', 'jq_ui', 'bootstrap'],
			exports: 'icontains'
		},
		"icontains" : {
			deps : ['jquery','bootstrap','bootstrap_select'],
		},
	},
    "waitSeconds" : 200,
	paths: {
		// lib
		jquery 			: ['https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min',dirTema+'/assets/js/libs/jquery-2.1.3'],
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		bootstrap 		: ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min',dirTema+'/assets/js/libs/bootstrap.min'],
		bootstrap_select: ['https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min', dirTema+'/assets/js/libs/bootstrap-select.min'],
		magnify			: dirTema+'/assets/js/libs/jquery.magnify',
		fancybox		: dirTema+'/assets/js/libs/jquery.fancybox',
		subscribe_better: dirTema+'/assets/js/libs/jquery.subscribe-better.min',
		mcustomscrollbar: dirTema+'/assets/js/libs/jquery.mCustomScrollbar.concat.min',
		owl				: dirTema+'/assets/js/libs/owl.carousel.min',
		animated_txt	: dirTema+'/assets/js/libs/owl-animated-text',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'/assets/js/pages/home',
		member          : dirTema+'/assets/js/pages/member',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/product',
		produks         : dirTema+'/assets/js/pages/products',
	}
});
require([
	'jquery',
	'router',
	'cart',
	'main'
], function($,router,cart,main)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	// router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk', 'produks@run');
	router.define('produk/*', 'produk@run');
	
	router.run();
	cart.run();
	main.run();
});