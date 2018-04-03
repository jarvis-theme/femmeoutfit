
<!-- Our Products -->
<section class="our-products">
    <div class="container">  
        <br class="divider-1" />
        <div class="title-wrap">
            <!-- <h2 class="title-1">check our products</h2> -->
        </div>

        <ul class="theme-tabs-1 font-2">
            <li class="active"> <a href="#prod-tab-1"  data-toggle="tab"> Best Seller  </a> </li>
            <li class=""> <a href="#prod-tab-2"  data-toggle="tab"> New Arrival  </a> </li>
            <li class=""> <a href="#prod-tab-3"  data-toggle="tab"> Sale  </a> </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="prod-tab-1">
                <div class="row">
                    @foreach(best_seller(6) as $best)
                    <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="{{product_url($best)}}" class="img"> 
                                    <img src="{{url(product_image_url($best->gambar1,'medium' ))}}" alt="" /> 
                                    @if($best->gambar2)
                                    <span class="product-hover">
                                        <img alt="" src="{{url(product_image_url($best->gambar2,'medium' ))}}">          
                                    </span>
                                    @endif
                                </a>
                                <!-- <div class="quick-view">
                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                </div> -->
                                @if(is_outstok($best))
                                <!-- <div class="new-tag"> out of stock </div> -->
                                @else
                                    @if(is_terlaris($best))
                                        <div class="sale-tag"> Best </div>
                                    @endif
                                    @if(is_produkbaru($best))
                                        <div class="new-tag"> New </div>
                                    @endif
                                @endif
                            </div>
                            <div class="product-content">
                                <p class="product-title"> <a href="{{product_url($best)}}">{{$best->nama}}</a> </p>
                                <span class="price"> <b>{{price($best)}}</b> <del>{{$best->hargaCoret==0?'':price($best->hargaCoret,null,1)}}</del> </span>
                                <!-- <div class="rating">                                                              
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>                                           
                                    <span class="star half"></span>
                                    <span class="star "></span>                                                
                                </div> -->
                                <div class="product-links"> 
                                    @if(is_outstok($best))
                                    <a href="/kontak" class="add-to-cart"> <span> Request </span> <i class="icon_cart_alt"></i> </a>
                                    @else
                                    <a href="{{product_url($best)}}" class="add-to-cart"> <span> View </span> <i class="icon_cart_alt"></i> </a>
                                    @endif
                                    <!-- <a href="#" class="icon_heart_alt"></a>
                                    <a href="#" class="icon_piechart"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="prod-tab-2">
                <div class="row">
                    @foreach(new_product(6) as $new)
                    <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="{{product_url($new)}}" class="img"> 
                                    <img src="{{url(product_image_url($new->gambar1,'medium' ))}}" alt="" /> 
                                    @if($new->gambar2)
                                    <span class="product-hover">
                                        <img alt="" src="{{url(product_image_url($new->gambar2,'medium' ))}}">          
                                    </span>
                                    @endif
                                </a>
                                <!-- <div class="quick-view">
                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                </div> -->
                                <div class="new-tag"> new </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-title"> <a href="#">{{$new->nama}}</a> </h2>
                                <span class="price"> {{price($new)}}</b> <del>{{price($new->hargaCoret,null,1)}} </span>
                                <!-- <div class="rating">                                                              
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>                                           
                                    <span class="star active"></span>
                                    <span class="star half"></span>                                                
                                </div> -->
                                <div class="product-links"> 
                                    @if(is_outstok($new))
                                    <a href="/kontak" class="add-to-cart"> <span> Request </span> <i class="icon_cart_alt"></i> </a>
                                    @else
                                    <a href="{{product_url($new)}}" class="add-to-cart"> <span> View </span> <i class="icon_cart_alt"></i> </a>
                                    @endif
                                    <!-- <a href="#" class="icon_heart_alt"></a>
                                    <a href="#" class="icon_piechart"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="prod-tab-3" data-category="{{@$kategori[3]}}">
                <div class="row">
                    @foreach(list_product(6,@$kategori[3]) as $home)
                    @if($home->hargaCoret)
                    <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="{{product_url($home)}}" class="img"> 
                                    <img src="{{url(product_image_url($home->gambar1,'medium' ))}}" alt="" /> 
                                    @if($home->gambar2)
                                    <span class="product-hover">
                                        <img alt="" src="{{url(product_image_url($home->gambar2,'medium'))}}">          
                                    </span>
                                    @endif
                                </a>
                                <!-- <div class="quick-view">
                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                </div> -->
                                <div class="sale-tag"> sale </div>
                                
                            </div>
                            <div class="product-content">
                                <h2 class="product-title"> <a href="#">{{$home->nama}}</a> </h2>
                                <span class="price"> <b>{{price($home)}}</b> <del>{{price($home->hargaCoret,null,1)}} </span>
                               <!--  <div class="rating">                                                              
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>                                           
                                    <span class="star"></span>
                                    <span class="star"></span>                                                
                                </div> -->
                                <div class="product-links"> 
                                    @if(is_outstok(@$home))
                                    <a href="/kontak" class="add-to-cart"> <span> Request </span> <i class="icon_cart_alt"></i> </a>
                                    @else
                                    <a href="{{product_url($home)}}" class="add-to-cart"> <span> View </span> <i class="icon_cart_alt"></i> </a>
                                    @endif
                                    <!-- <a href="#" class="icon_heart_alt"></a>
                                    <a href="#" class="icon_piechart"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <ul class="theme-tabs-1 font-2">
            <li class="active"> <a href="/produk" title="see more" style="font-size: 12px;"> See More >  </a> </li>
        </ul>
    </div>
    <div class="collection"></div>
</section>  
<!-- / Our Products --> 

<!-- Section Two -->
<section class="promotion clearfix">
    <div class="">                  
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6" style="padding: 0;">
                <!-- <h2 class="section-title pt-30">Hijab Tutorial </h2> -->
                <div class="flex-item">
                    <div class="content-block">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=r-jMVIfHiSI">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/femme-outfit-upload/20180403-124822.png">
                        <!-- <iframe style="width: 100%;" class="youtube" width="675" height="370" data-src="https://www.youtube.com/embed/r-jMVIfHiSI?rel=0&controls=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6" style="padding-left: 0;">
                <!-- <h2 class="section-title pt-30">Hijab Review </h2> -->
                <div class="flex-item">
                        <div class="content-block">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=_5eMVRIcxbM">
                            <!-- <iframe style="width: 100%;" class="youtube" width="675" height="370" data-src="https://www.youtube.com/embed/_5eMVRIcxbM?rel=0&controls=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> -->
                                <img src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/femme-outfit-upload/20180403-124859.png">
                            </a>
                        </div>
                </div>
            </div>
        </div>
        <br class="divider-1" />
        <br class="divider-1">
    </div>
</section>
<!-- / Section Two -->

<!-- Promotion -->
<section class="promotion clearfix">   
    <div class="container">
        <div class="row">
        <h2 class="section-title text-center pt-10">Why Choose Femme Outfit</h2>
        @foreach(vertical_banner() as $key=>$main_banner)
            
            <div class="col-sm-6 col-md-4">                                  
                <div class="collection">
                    <div class="images">
                        <img src="{{url(banner_image_url($main_banner->gambar))}}" alt="">
                    </div>      
                    <!-- <div class="content-slider">            
                        <div class="block-title">
                            <h4 class="title-1"> best<br>for<br>girls</h4>   
                        </div>
                        <div class="link"><a href="#">Go<span class="arrow_right"></span></a></div>
                    </div> -->
                </div>
            </div>
            
        @endforeach
        </div>  
        <br class="divider-1">
    </div>
</section>
<!-- / Promotion -->

 <!-- prod-brands -->
<section class="prod-brands">
    <div class="">  
        <br class="divider-1" />
        <h2 class="section-title text-center pt-10" style="margin-bottom: -20px;">FEMME OUTFIT X PUBLIC FIGURE</h2>
        <div class="brand-slider owl-carousel">
            @foreach(list_testimonial(7) as $testimonial)
            <div class="item"> <a href="/testimoni"> <img src="{{generate_image_url().$testimonial->gambar}}" alt="{{$testimonial->nama}}" /> </a> </div>
            @endforeach
        </div>
    </div>
    <br class="divider-1" />
</section>
<!-- prod-brands -->
