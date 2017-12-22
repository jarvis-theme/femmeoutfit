<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1"> Search </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> <a href="{{url('produk')}}"> Shop  </a> Search </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space">
        <!-- Single Product Starts -->
        <div class="container">
            <div class="row">
                <!-- Products Sidebar Starts --> 
                <aside class="prod-sidebar col-sm-4 col-md-3">
                    <div class="widget-wrap"> 
                        <h2 class="widget-title"> CATEGORIES </h2>

                        <div class="widget-content">
                            <div class="panel-group widget-panel" id="accordion">
                                @foreach (list_category() as $kat)
                                    @if($kat->parent=='0')
                                        @if($kat->anak->count())
                                        <div class="panel">
                                            <div class="widget-heading">                              
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#{{strtolower($kat->nama)}}"> {{ucfirst($kat->nama)}} </a>
                                            </div>
                                            
                                            <div id="{{strtolower($kat->nama)}}" class="panel-collapse collapse">
                                                <div class="wid-panel-con">
                                                    <ul style="margin-left: 25px;">
                                                    @foreach(list_category() as $submenu)
                                                        @if ($submenu->parent==$kat->id)
                                                        <li>
                                                            <a href="{{category_url($submenu)}}">{{ucfirst($submenu->nama)}}</a>
                                                            @if($submenu->anak->count() != 0)
                                                            <ul id="{{strtolower($submenu->nama)}}" class="cateogry-filters-list" style="margin-left: 0;margin-top: 10px;">
                                                                @foreach($submenu->anak as $submenu2)
                                                                @if($submenu2->parent == $submenu->id)
                                                                <ol style="margin-bottom: 4px;">
                                                                    <a href="{{category_url($submenu2)}}" class="active" style="text-decoration: none;">{{ucfirst($submenu2->nama)}}</a>
                                                                </ol>
                                                                @endif
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <ul class="category">                                            
                                            <li> <a href="{{category_url($kat)}}"> {{ucfirst($kat->nama)}} </a> </li>
                                        </ul>
                                        @endif
                                    @endif
                                @endforeach 
                        </div>
                    </div>
                    <div class="widget-wrap filter-option"></div>
                    <div class="widget-wrap"> 
                        <h2 class="widget-title"> recent products </h2>
                        <div class="widget-content recent-prod">

                            @foreach(best_seller() as $best)
                            <div class="recent-wrap">                   
                                <div class="image">                                                                                                                 
                                    <a href="{{ product_url($best) }}"> <img class="img-responsive img-recent" src="{{ product_image_url($best->gambar1,'thumb') }}" alt=""/> </a>
                                </div>                                               

                                <div class="product-content">
                                    <h2 class="product-title"> <a href="{{ product_url($best) }}">{{$best->nama}}</a> </h2>
                                    <span class="price"> <b>{{ price($best->hargaJual) }}</b><br> <del>{{ price($best->hargaCoret) }}</del> </span>
                                </div>
                            </div>
                            @endforeach    

                        </div>
                    </div>
                </aside>    
                <!-- Products Sidebar Ends --> 

                <!-- Products Categories Starts --> 
                <div class="col-md-9 col-sm-8 categories">
                    <div class="sorter-bar block-inline">
                        <div class="show-result font-2">
                            Showing 1 to {{Input::get('show')!=""?Input::get('show'):12}} of 17 total
                        </div>
                        
                    </div>     

                    <div class="tab-content">

                        <!-- Product List View Starts -->
                        <div id="list-view" class="tab-pane fade" role="tabpanel">                                     
                            
                            @if(count($hasilpro) > 0)
                            <div id="bingoProList" class="proList grid">
                                <div class="bingoFlexRow flexRow">
                                    @foreach($hasilpro as $produks)
                                    <div class="filerProductPrice col-sp-12 col-xs-6 col-md-4" data-price="{{ $produks->hargaJual }}">
                                        <div class="bingoProBlock">
                                            <div class="proHImage">
                                                <a class="proFeaturedImage" href="{{ product_url($produks) }}">
                                                    <img class="img-responsive" alt="{{ $produks->nama }}" src="{{ product_image_url($produks->gambar1,'medium') }}">
                                                    <span class="hidden-sm hidden-xs">
                                                        @if(!empty($produks->gambar2))
                                                        <img class="img-responsive" alt="{{ $produks->nama }}" src="{{ product_image_url($produks->gambar2,'medium') }}">
                                                        @elseif(!empty($produks->gambar3))
                                                        <img class="img-responsive" alt="{{ $produks->nama }}" src="{{ product_image_url($produks->gambar3,'medium') }}">
                                                        @elseif(!empty($produks->gambar4))
                                                        <img class="img-responsive" alt="{{ $produks->nama }}" src="{{ product_image_url($produks->gambar4,'medium') }}">
                                                        @endif
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="proContent">
                                                <h5 class="proName">
                                                    <a href="{{ product_url($produks) }}">{{ short_description($produks->nama, 25) }}</a>
                                                </h5>
                                                <div class="proPrice">
                                                    <div class="priceProduct priceSale">{{ price($produks->hargaJual) }}</div>
                                                </div>
                                                <div class="proButton mb20">
                                                    <a class="btn btnAddToCart" href="{{ product_url($produks) }}">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>View</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            @if(count($hasilhal) > 0 || count($hasilblog) > 0)
                            <div class="bingoFlexRow flexRow">
                                @foreach($hasilblog as $blog)
                                <div class="col-sp-12 col-xs-6 col-md-4">
                                    <div class="blogArticle mt20">
                                        @if(!empty(imgString($blog->isi)))
                                        <div class="articleImage">
                                            <a href="{{ blog_url($blog) }}">
                                                <img class="img-responsive" src="{{ imgString($blog->isi) }}" alt="{{ $blog->judul }}">
                                            </a>
                                        </div>
                                        @endif
                                        <div class="articleMetaDate">
                                            <span class="metaDateDay">{{ date("M d, Y", strtotime($blog->created_at)) }}</span>
                                        </div>
                                        <h3 class="articleTitle"><a href="{{ blog_url($blog) }}">{{ $blog->judul }}</a></h3>
                                        <div class="articleDesc">
                                            {{ short_description($blog->isi,300) }}
                                        </div>
                                        <div class="articleButton">
                                            <a class="articleBtnMore" href="{{ blog_url($blog) }}">
                                                Read more
                                                <i class="icofont icofont-bubble-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @foreach($hasilhal as $hal)
                                <div class="col-sp-12 col-xs-6 col-md-4">
                                    <div class="blogArticle mt20">
                                        <div class="articleMetaDate">
                                            <span class="metaDateDay">{{ date("M d, Y", strtotime($hal->created_at)) }}</span>
                                        </div>
                                        <h3 class="articleTitle"><a href="{{ blog_url($hal) }}">{{ $hal->judul }}</a></h3>
                                        <div class="articleDesc">
                                            {{ short_description($hal->isi,300) }}
                                        </div>
                                        <div class="articleButton">
                                            <a class="articleBtnMore" href="{{ blog_url($hal) }}">
                                                Read more
                                                <i class="icofont icofont-bubble-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            
                            <div class="row listview-wrap">
                                <div class="col-lg-4 col-md-5 col-sm-12">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="#" class="img"> 
                                                <img src="assets/img/common/product/prod-1.jpg" alt="" /> 
                                                <span class="product-hover">
                                                    <img alt="" src="assets/img/common/product/prod-flip-1.jpg">          
                                                </span>
                                            </a>
                                            <ul class="color-swatch-item">
                                                <li> <a href="#"> <img src="assets/img/common/product/gray.png" alt="" /> </a> </li>
                                                <li> <a href="#"> <img src="assets/img/common/product/black.png" alt="" /> </a> </li>
                                            </ul>
                                            <div class="quick-view">
                                                <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-12">
                                    <div class="product-item">
                                        <div class="product-content">
                                            <h2 class="product-title"> <a href="#">samurai t-shirt</a> </h2>
                                            <span class="price"> <b>$45.05</b> <del></del> </span>
                                            <div class="rating">                                                              
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>                                           
                                                <span class="star active"></span>
                                                <span class="star"></span>                                                
                                            </div>
                                            <div class="discription">
                                                <p>Coupling a blended linen construction with tailored style, the River Island HR Jasper ro Blazer will imprint a touch of dapper charm into your after-dark wardrobe. Tuxedo ise Suspendisse feugiat condimentum ex, sed venenatis sapien. Mauris nisi ipsum, pellenti ntesque et efficitur nec, feugiat vitae erat. Pellentesque ultrices libero lacus.</p>
                                            </div>
                                            <div class="product-links"> 
                                                <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>
                                                <a href="#" class="icon_heart_alt"></a>
                                                <a href="#" class="icon_piechart"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="block-inline pagination-wrap text-center">
                                    <ul class="pagination-1 font-2">  
                                        <li> <a href="#" class="active"> 1 </a> </li>
                                        <li> <a href="#"> 2 </a> </li>
                                        <li> <a href="#"> 3 </a> </li>   
                                        <li> <a href="#"> ... </a> </li>   
                                        <li> <a href="#"> 5 </a> </li>   
                                        <li class="nxt"> <a href="#"> <i class="fa fa-angle-right"></i> </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product List View Ends -->

                    </div>

                </div>
                <!-- Products Description Starts --> 
            </div>
        </div>
        <!-- / Single Product Ends -->
    </section>

</article>