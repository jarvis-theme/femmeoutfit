<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="ID"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en">
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
    </head>
    <body id="home" class="wide">        
        <!-- PRELOADER -->
        <!-- <div id="loading">
            <div class="loader"></div>
        </div> -->
        <!-- /PRELOADER -->
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
                {{ Theme::place('content') }} 
            </main>
            <hr class="divider-1">
            {{ Theme::partial('footer') }} 
        </div>
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
        {{ Theme::asset()->scripts() }}
        <div id="goToTop" style="display: none;"><span class="fa fa-long-arrow-up"></span></div>
    </body>
</html>