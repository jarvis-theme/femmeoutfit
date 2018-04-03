<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">{{ $produk->nama }}</h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> <a href="{{url('/produk')}}"> Shop  </a> {{ $produk->nama }} </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space single-product layout-3">
        <!-- Single Product Starts -->
        <div class="container">

            <article class="col-md-9 col-sm-8">
                <div class="row">
                    <!-- Single Products Slider Starts --> 
                    <div class="col-md-5 col-sm-12 prod-slider-wrap">                                    
                        <div class="owl-carousel prod-slider sync1">
                            <div class="item popup-gallery"> 
                                <img src="{{ product_image_url($produk->gambar1) }}" alt="">
                                <a href="{{ product_image_url($produk->gambar1) }}" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                            </div>
                            @if($produk->gambar2!='')
                            <div class="item popup-gallery"> 
                                <img src="{{ product_image_url($produk->gambar2) }}" alt=""> 
                                <a href="{{ product_image_url($produk->gambar2) }}" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                            </div>
                            @endif
                            @if($produk->gambar3!='')
                            <div class="item popup-gallery"> 
                                <img src="{{ product_image_url($produk->gambar3) }}" alt=""> 
                                <a href="{{ product_image_url($produk->gambar3) }}" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                            </div>
                            @endif
                            @if($produk->gambar4!='')
                            <div class="item popup-gallery"> 
                                <img src="{{ product_image_url($produk->gambar4) }}" alt=""> 
                                <a href="{{ product_image_url($produk->gambar4) }}" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                            </div>
                            @endif
                        </div>

                        <div  class="owl-carousel sync2">
                            <div class="item"> <img src="{{ product_image_url($produk->gambar1,'thumb') }}" alt=""> </div>
                            <div class="item"> <img src="{{ product_image_url($produk->gambar2,'thumb') }}" alt=""> </div>
                            <div class="item"> <img src="{{ product_image_url($produk->gambar3,'thumb') }}" alt=""> </div>
                            <div class="item"> <img src="{{ product_image_url($produk->gambar4,'thumb') }}" alt=""> </div>  
                        </div>
                    </div>
                    <!-- Single Products Slider Ends --> 

                    <!-- Products Description Starts --> 
                    <div class="col-md-7 col-sm-12">
                        <div class="product-detail">
                            <div class="product-heading">
                                <h2 class="section-title">{{ $produk->nama }}</h2>                                              
                            </div>
                            <!-- <div class="rating">                                                              
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star active"></span>                                           
                                <span class="star half"></span>
                                <span class="star"></span>
                                <div class="product-review">
                                    <ul class="list-items black-color">
                                        <li>04 Review(s) </li>
                                        <li> <a href="#"> Add Your Review </a> </li>
                                    </ul>
                                </div>
                            </div> --> 
                            <div class="price">
                                <b id="fixprice1">{{ price($produk) }}</b> <del>{{ $produk->hargaCoret?price($produk->hargaCoret,null,1):'' }}</del>
                            </div>

                            <div class="product-availability">
                                <ul class="stock-detail list-items black-color">                                       
                                    <!--<li class=""> <i class="icon-layers icons"></i> <span> Only <b>{{$produk->stok}}</b> Left </span> <i class="arrow_carrot-down"></i> </li>-->
                                    <li> <b>Available:</b> 
                                        @if($produk->stok>0)
                                        <span class="green-color"> In Stock </span>  
                                        @else
                                        <span class="red-color"> Out of Stock </span>  
                                        @endif
                                    </li>
                                </ul>                                                                             
                            </div>

                            <hr class="divider-2">   

                            <div class="product-description">
                                <p>{{$produk->dmt}}</p>                                        
                            </div>

                            <hr class="divider-2">   

                            <form action="#" id="addorder" class="product-option-form">                          
                                <div class="product-options">
                                    @if($opsiproduk->count()>0)
                                        <div class="form-group selectpicker-wrapper">
                                            <label> <b class="option"> Variant </b> <span class="red-color"> * </span> <span class="required red-color pull-right"> Field Required *</span> </label>
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select name="opsiproduk"
                                                    class="selectpicker input-price" data-width="100%"
                                                    data-toggle="tooltip" title="Choose that you like.... ">
                                                    @foreach ($opsiproduk as $key => $opsi)
                                                    <option data-price="{{price($opsi->harga)}}" value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                                        {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif                                        
                                </div>    

                                <div class="prod-btns">
                                    <div class="quantity">
                                        <a class="btn minus" id="q_down"><i class="icon_minus-06"></i></a>
                                        <input id="quantity_wanted" type="number" title="Qty" name='qty' value="1" min="1" step="1" class="form-control qty">
                                        <a class="btn plus" id="q_up"><i class="icon_plus"></i></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <button type="submit" class="theme-btn-1 btn cart-btn add_cart"> <i class="icon ion-ios-plus-empty white-color"></i> Add to Cart </button>                                       
                                    </div>                                    
                                </div>
                            </form>                                            

                            <div class="prod-code upper-case">
                                <p> <b>SKU : </b> <b class="black-color">{{!empty($produk->barcode)?$produk->barcode:'-'}}</b> </p>
                                <div class="prod-social"> 
                                    <b>Share : </b>
                                    <ul class="list-items">
                                        {{--sosialShare(product_url($produk))--}}
                                        <li>
                                            <a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{product_url($produk)}}&display=popup&ref=plugin&src=share_button">
                                                <i class="social_facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?text={{$produk->nama}}&url={{product_url($produk)}}">
                                                <i class="social_twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="googleplus" target="_blank" href="https://plus.google.com/share?app=110&url={{product_url($produk)}}">
                                                <i class="social_googleplus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url={{product_url($produk)}}&media={{ product_image_url($produk->gambar1) }}&description={{strip_tags($produk->deskripsi)}}" class="pin-it-button" count-layout="horizontal">
                                                <i class="social_pinterest"></i>
                                            </a>
                                        </li>
                                        <!--<li><a class="facebook" href="#"><i class="social_facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="social_twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="social_googleplus"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="social_pinterest"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="social_instagram"></i></a></li>-->
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Products Description Starts --> 
                </div>

                <!-- Products Description Tabination Starts -->  
                <div class="tabs-wrap ptb-70">
                    <div class="tabs">
                        <ul id="tabs" class="nav font-2 prod-tabs">                                         
                            <li class="active"><a href="#prod-tab-1" data-toggle="tab"> Description </a></li>
                            <li class=""><a href="#prod-tab-2" data-toggle="tab"> Reviews </a></li>
                            <li class=""><a href="#prod-tab-3" data-toggle="tab"> Tags </a></li>
                            <li class=""><a href="#prod-tab-4" data-toggle="tab"> additional information </a></li>
                            <!-- <li class=""><a href="#prod-tab-5" data-toggle="tab"> custom tab info </a></li>
                            <li class=""><a href="#prod-tab-6" data-toggle="tab"> custom tab video </a></li> -->                                
                        </ul>
                    </div>
                    <div class="tab-content prod-tab-content">
                        <div id="prod-tab-1" class="tab-pane fade in active">
                            {{ $produk->deskripsi }}
                        </div>
                        <div id="prod-tab-2" class="tab-pane fade">
                            {{ pluginComment(product_url($produk), @$produk) }}
                        </div>
                        <div id="prod-tab-3" class="tab-pane fade">
                            {{-- getTagsProduk('<a rel="tag">,</a>,',$produk->tags,null,true) --}}
                        </div>
                        <div id="prod-tab-4" class="tab-pane fade">
                            <!--<p> <b>Informasi Tetap</b> </p>-->
                            <p style="text-align:center"> For ordering and further information :<br>Text us on: <br><a href="whatsapp://send?text=Halo&phone=+6285703077111&abid=+6285703077111" >WA : +62857 030 77 111</a><br>Line Official: <a target="_blank" href="http://line.me/ti/p/%40femmeoutfit">@femmeoutfit</a>.<br><br>#FemmeOutfitBasicSeries</p>
                        </div>
                    </div>
                </div>
                <!-- Products Description Tabination Ends --> 

                <!-- Related Products Starts-->  
                @if(other_product($produk)->count() > 0)
                    <div id="product" class="text-center">
                        <h2 class="section-title"> Related Products </h2> 
                        <div class="relative-div row">                           
                            <div class="related-prod-slider-2 owl-carousel owl-nav-2">
                            
                            @foreach(other_product($produk)  as $related)
                                <div class="item">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="{{ product_url($related) }}" class="img"> 
                                                <img src="{{ product_image_url($related->gambar1,'medium') }}" alt="" /> 
                                                <span class="product-hover">
                                                    <img alt="" src="{{ product_image_url($related->gambar2,'medium') }}">          
                                                </span>
                                            </a>
                                            <!-- ul class="color-swatch-item">
                                                <li> <a href="#"> <img src="assets/img/common/product/gray.png" alt="" /> </a> </li>
                                                <li> <a href="#"> <img src="assets/img/common/product/black.png" alt="" /> </a> </li>
                                            </ul> -->
                                            <!-- <div class="quick-view">
                                                <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                            </div> -->
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-title"> <a href="{{ product_url($related) }}">{{$related->nama}}</a> </h2>
                                            <span class="price"> <b>{{ price($related->hargaJual) }}</b> @if($related->hargaCoret>0)<del>{{ price($related->hargaCoret) }}</del>@endif </span>
                                            <!-- <div class="rating">                                                              
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>                                           
                                                <span class="star active"></span>
                                                <span class="star half"></span>                                                
                                            </div> -->
                                            <div class="product-links"> 
                                                <a href="{{ product_url($related) }}" class="add-to-cart"> <span> View </span> <i class="icon_cart_alt"></i> </a>
                                                <!-- <a href="#" class="icon_heart_alt"></a>
                                                <a href="#" class="icon_piechart"></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>                           
                        </div>
                    </div>
                @endif
                <!-- / Related Product Ends -->
            </article>

            <!-- Product Sidebar Starts -->                     
            <aside class="prod-layout-sidebar col-sm-4 col-md-3 right-sidebar">
                <!--<div class="widget-wrap">
                    <div class="brand-logo">
                        <a href="#"> <img src="#" alt=""> </a>
                    </div>
                </div>-->
                <div class="widget-wrap">                             
                    <ul class="widget-feature">
                        <li> <a href="#"> <i class="icon_pin_alt feature-icon"></i> <span class="feature-des"> We commit will send this product in 2 days.</span> </a> </li>                                  
                        <li> <a href="#"> <i class="icon_phone feature-icon"></i> <span class="feature-des"> Call us now for more info about our products</span> </a> </li>
                        <li> <a href="#"> <i class="arrow_back feature-icon"></i> <span class="feature-des"> Return purchased items and get all your money back.</span> </a> </li>
                        <li> <a href="#"> <i class="icon_star_alt feature-icon"></i> <span class="feature-des"> Buy this product and earn 10 special loyalty points!</span> </a> </li>
                    </ul>
                </div>
                <div class="widget-wrap"> 
                    <h2 class="widget-title"> Best products </h2>
                    <div class="widget-content recent-prod-slider owl-carousel">
                        <div class="item">
                            @foreach(best_seller(2) as $best)
                            <div class="recent-wrap">                   
                                <div class="image" style="width: 150px;">                                                                                                                 
                                    <a href="{{ product_url($best) }}"> <img class="img-responsive img-recent" src="{{ product_image_url($best->gambar1,'thumb') }}" alt=""> </a>
                                </div>                                               

                                <div class="product-content" style="margin-left: 160px;">
                                    <h2 class="product-title"> <a href="{{ product_url($best) }}">{{$best->nama}}</a> </h2>
                                    <span class="price"> <b>{{ price($best) }}</b><br> <del>{{ $best->hargaCoret?price($best->hargaCoret,null,1):'' }}</del> </span>
                                </div>
                            </div>
                            @endforeach     
                        </div>
                    </div>
                </div>

            </aside>                    
            <!-- Product Sidebar Starts -->

        </div>
        <!-- / Single Product Ends -->
    </section>

</article>
