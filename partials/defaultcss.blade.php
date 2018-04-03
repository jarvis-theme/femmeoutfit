<!-- Favicon -->
<link rel="apple-touch-icon-precomposed icon" sizes="144x144" href="{{prefix_domain().'/galeri/favicon.jpg?'.Time()}}">
<link rel="icon" sizes="144x144" href="{{prefix_domain().'/galeri/favicon.jpg?'.Time()}}">
{{createFavicon($toko)}}

<!-- CSS Global -->
{{ generate_theme_css('femmeoutfit/assets/plugins/bootstrap.min.css') }} 
{{ generate_theme_css('femmeoutfit/assets/plugins/bootstrap-select.min.css') }} 
{{ generate_theme_css('femmeoutfit/assets/plugins/owl.carousel.min.css') }} 
{{ generate_theme_css('femmeoutfit/assets/plugins/animate.css') }} 
{{ generate_theme_css('femmeoutfit/assets/plugins/magnify.css') }} 
{{ generate_theme_css('femmeoutfit/assets/plugins/subscribe-better.css') }} 
{{ generate_theme_css('femmeoutfit/assets/plugins/jquery.mCustomScrollbar.min.css') }} 

<!-- Icon Font -->
{{ generate_theme_css('femmeoutfit/assets/icons-font/font-awesome/css/font-awesome.min.css') }} 
{{ generate_theme_css('femmeoutfit/assets/icons-font/font-elegant/elegant.css') }} 
{{ generate_theme_css('femmeoutfit/assets/icons-font/simple-line-icons-master/css/simple-line-icons.css') }} 


<!-- Custom CSS -->
@if($tema->isiCss=='')
	{{ generate_theme_css('femmeoutfit/assets/css/home-ten.css?v=001b') }} 
@else
	{{ generate_theme_css('femmeoutfit/assets/css/edithome-ten.css') }} 
@endif
{{ generate_theme_css('femmeoutfit/assets/css/main-style.css?v=001n') }} 


