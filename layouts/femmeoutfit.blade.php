<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="ID"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en">
<!--<![endif]-->
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
        
        <!-- WRAPPER -->
        <main id="home-ten" class="wrapper">
            <!-- HEADER -->
            {{ Theme::partial('header') }} 
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <!-- Main Slider -->
            {{ Theme::partial('slider') }}
            <!-- / Main Slider -->
            <article class="wrapper"> 
                {{Theme::place('content')}} 
                {{ Theme::partial('subscribe') }}   
            </article>
            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <hr class="divider-1">
            {{ Theme::partial('footer') }} 
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"> <i class="arrow_carrot-up"></i> </div>
        </main>
        <!-- /WRAPPER -->

        <!-- Product Preview Popup -->
        <section class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg product-modal">
                <div class="modal-content">
                    <a aria-hidden="true" data-dismiss="modal" class="close icon_close" href="#"></a>                 
                    <div class="clearfix layout-1">
                        <!-- Single Products Slider Starts --> 
                        <div class="col-md-5 col-sm-12 prod-slider-wrap">                                    
                            <div class="owl-carousel prod-slider sync1">
                                <div class="item popup-gallery"> 
                                    <img src="assets/img/common/prod-layout/layout-1.jpeg" alt="">
                                </div>
                                <div class="item popup-gallery"> 
                                    <img src="assets/img/common/prod-layout/layout-2.jpeg" alt=""> 
                                </div>
                                <div class="item popup-gallery"> 
                                    <img src="assets/img/common/prod-layout/layout-3.jpeg" alt=""> 
                                </div>
                                <div class="item popup-gallery"> 
                                    <img src="assets/img/common/prod-layout/layout-4.jpeg" alt=""> 
                                </div>
                                <div class="item popup-gallery"> 
                                    <img src="assets/img/common/prod-layout/layout-2.jpeg" alt=""> 
                                </div>
                                <div class="item popup-gallery"> 
                                    <img src="assets/img/common/prod-layout/layout-4.jpeg" alt=""> 
                                </div>
                            </div>

                            <div  class="owl-carousel sync2">
                                <div class="item"> <img src="assets/img/common/prod-layout/thumb-1.jpeg" alt=""> </div>
                                <div class="item"> <img src="assets/img/common/prod-layout/thumb-2.jpeg" alt=""> </div>
                                <div class="item"> <img src="assets/img/common/prod-layout/thumb-3.jpeg" alt=""> </div>
                                <div class="item"> <img src="assets/img/common/prod-layout/thumb-4.jpeg" alt=""> </div>  
                                <div class="item"> <img src="assets/img/common/prod-layout/thumb-2.jpeg" alt=""> </div>
                                <div class="item"> <img src="assets/img/common/prod-layout/thumb-4.jpeg" alt=""> </div> 
                            </div>
                        </div>
                        <!-- Single Products Slider Ends --> 

                        <!-- Products Description Starts --> 
                        <div class="col-md-7 col-sm-12">
                            <div class="product-detail">                                
                                <div class="product-heading">
                                    <h2 class="section-title">samurai t-shirt</h2>                                              
                                </div>
                                <div class="rating">                                                              
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>                                           
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <div class="product-review">
                                        <ul class="list-items black-color">
                                            <li>Be the first to review this product</li>
                                        </ul>
                                    </div>
                                </div>  
                                <div class="price">
                                    <b>$45.05</b> <del>$85.60</del>
                                </div>

                                <div class="product-availability">
                                    <ul class="stock-detail list-items black-color">                                       
                                        <li class=""> <i class="icon-layers icons"></i> <span> Only <b>15</b> Left </span> <i class="arrow_carrot-down"></i> </li>
                                        <li> <b>Available:</b> <span class="green-color"> In Stock </span>  </li>
                                    </ul>                                                                             
                                </div>

                                <hr class="divider-2">   

                                <div class="product-description">
                                    <p> A t-shirt that comes in three colors (red, white and blue) and three sizes (small, medium, large) is a configurable product. A configurable product is made up of other simple products. you can create a configurable product that ties them all together, and gives the end user the choice, usually from a drop-down menu. </p>                                        
                                </div>

                                <hr class="divider-2">   

                                <div class="product-options">
                                    <div class="color-optn font-2">
                                        <label> <span class="option"> Color </span> <span class="red-color"> * </span> <span class="required red-color pull-right"> Field Required *</span> </label>
                                        <ul class="list-unstyled">
                                            <li> <a href="#"> <img alt="" src="assets/img/common/product/color-1.jpg" /> </a> </li>
                                            <li> <a href="#"> <img alt="" src="assets/img/common/product/color-2.jpg" /> </a> </li>
                                            <li> <a href="#"> <img alt="" src="assets/img/common/product/color-3.jpg" /> </a> </li>
                                            <li> <a href="#"> <img alt="" src="assets/img/common/product/color-4.jpg" /> </a> </li>
                                        </ul>
                                    </div>
                                    <div class="size-optn font-2">
                                        <label> <span class="option"> SIZE OPTIONS </span> </label>
                                        <ul class="list-inline">
                                            <li> <a href="#"> S </a> </li>
                                            <li> <a href="#"> M </a> </li>
                                            <li> <a href="#"> L </a> </li>
                                            <li> <a href="#"> XL </a> </li>
                                            <li> <a href="#"> XXL </a> </li>
                                        </ul>
                                    </div>
                                </div>    

                                <div class="prod-btns">
                                    <div class="quantity">
                                        <button class="btn minus"><i class="icon_minus-06"></i></button>
                                        <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                                        <button class="btn plus"><i class="icon_plus"></i></button>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty white-color"></i> Add to Cart </button>                                       
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- Products Description Starts --> 
                    </div>    
                </div>
            </div>
        </section>
        <!-- / Product Preview Popup -->

        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
    </body>
</html>