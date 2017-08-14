<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="ID"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="ID"> <!--<![endif]-->
<html>
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
    </head>
    <body class="template-index">
        <div id="cartDrawer" class="drawer drawerRight">
            <div class="bingoCartTitle">
                <span></span>
                <div class="close jsDrawerClose">
                    <span>&times;</span>
                </div>
            </div>
            <div id="cartContainer"></div>
        </div>
        <div id="pageContainer" class="isMoved">
            {{ Theme::partial('header') }} 
            <main class="mainContent contentMobileFixed">
                {{ Theme::partial('slider') }} 
                {{ Theme::place('content') }} 
            </main>
            {{ Theme::partial('footer') }} 
        </div>
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
        <div id="goToTop" style="display: none;"><span class="fa fa-long-arrow-up"></span></div>
    </body>
</html>