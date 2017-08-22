<!-- CSS styles  -->
@if($tema->isiCss=='')
	{{ generate_theme_css('celebandco/assets/css/style.css?v=001') }} 
@else
	{{ generate_theme_css('celebandco/assets/css/editstyle.css?v=001') }} 
@endif

{{ favicon() }} 



<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,300i,400,400i,600,600i,700,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,600i" rel="stylesheet">

<!-- <link href="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/bingo-fonts.scss.css?14124462035515045251" rel="stylesheet" type="text/css" media="all"> -->
<!-- <link href="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/bingo-site.scss.css?14124462035515045252" rel="stylesheet" type="text/css" media="all"> -->
{{ generate_theme_css('celebandco/assets/css/bingo-site.scss.css?v=002') }} 
<!-- <script type="text/javascript" async="" src="//productreviews.shopifycdn.com/assets/v4/spr.js?shop=bingo-max.myshopify.com" style=""></script><script type="text/javascript" async="" src="https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.03.29.1"></script><script src="//cdn.shopify.com/s/files/1/2027/9309/t/12/assets/jquery.2.2.3.js?14124462035515045251" type="text/javascript"></script> -->
