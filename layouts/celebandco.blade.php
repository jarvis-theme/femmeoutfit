<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="{{ shop.locale }}"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="ID"> <!--<![endif]-->
<html>
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
    </head>
    <body class="boxed">
        <div id="template-wrapper" class="boxed">
            {{ Theme::partial('header') }} 
            <div id="site-wrapper">
                {{ Theme::partial('slider') }} 
                {{ Theme::place('content') }} 
                {{ Theme::partial('subscribe') }} 
            </div>
            {{ Theme::partial('footer') }} 
        </div>
    {{ Theme::partial('defaultjs') }} 
    {{ Theme::partial('analytic') }} 
    </body>
</html>