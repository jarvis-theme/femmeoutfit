<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,300i,400,400i,600,600i,700,900" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,600i" rel="stylesheet">

<!-- CSS styles  -->
@if($tema->isiCss=='')
	{{ generate_theme_css('celebandco/assets/css/style.css?v=001') }} 
@else
	{{ generate_theme_css('celebandco/assets/css/editstyle.css?v=001') }} 
@endif

{{ favicon() }} 