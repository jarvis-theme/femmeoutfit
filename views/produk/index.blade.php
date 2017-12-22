<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1"> Shop Grid with Sidebar Left </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="#"> Home </a> <a href="#"> Shop  </a> Shop Grid with Sidebar Left </li>                             
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
                        <!-- <select class="category-selections-select visible-xs" style="width: 100%;" onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                            @foreach (list_category() as $kat)
                            <option value="{{category_url($kat)}}">{{shortName($kat->nama,20)}}</option>
                            @endforeach
                        </select> -->
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

                    <!-- <div class="widget-wrap filter-option"> 
                        <h2 class="widget-title"> FILTER SELECTION </h2>
                        <div class="widget-content">
                            <h2 class="title-2">Price</h2>
                            <div id="slider-range" class="slider-range"></div>
                            <label  for="amount" class="amount">Range: </label> <input type="text" id="amount" readonly />   
                        </div>
                        <div class="widget-content">
                            <h2 class="title-2"> color </h2>
                            <ul class="color-optn">
                                <li> <a href="#"> <img alt="" src="assets/img/common/product/color-1.jpg"> </a> </li>
                                <li> <a href="#"> <img alt="" src="assets/img/common/product/color-2.jpg"> </a> </li>
                                <li> <a href="#"> <img alt="" src="assets/img/common/product/color-3.jpg"> </a> </li>
                                <li> <a href="#"> <img alt="" src="assets/img/common/product/color-4.jpg"> </a> </li>
                            </ul>
                        </div>                                    
                        <div class="widget-content">
                            <h2 class="title-2"> Size Option </h2>
                            <ul class="size-optn">
                                <li> <a href="#"> S </a> </li>
                                <li> <a href="#"> M </a> </li>
                                <li> <a href="#"> L </a> </li>
                                <li> <a href="#"> XL </a> </li>
                                <li> <a href="#"> XXL </a> </li>
                            </ul>
                        </div>
                        <div class="widget-content">
                            <h2 class="title-2"> MANUFACTURER </h2>
                            <ul class="category">                                            
                                <li> <a href="#"> Forever 21 <span> (15) </span> </a> </li>
                                <li> <a href="#"> Giordano  <span> (07) </span> </a> </li>
                                <li> <a href="#"> Abercrombie  <span> (05) </span> </a> </li>
                                <li> <a href="#"> Ecko United  <span> (19) </span> </a> </li>
                                <li> <a href="#"> Zara <span> (12) </span> </a> </li>
                            </ul>
                        </div>                                    
                    </div> -->
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
                        <div class="select-option">
                            <form action="#" class="form-sorter">
                                <label> Sort by </label>
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select name="SortBy" id="SortBy" class="selectpicker"  data-width="100%" data-toggle="tooltip">
                                        <option value="manual">Featured</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="select-option">
                            <form action="#" class="form-wrap">
                                <label> Show </label>
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker"  data-width="100%" data-toggle="tooltip" id="show" data-rel="{{URL::current()}}">
                                        <option value="12" {{Input::get('show')==12?'selected="selected"':''}}>12 ITEMS</option>
                                        <option value="24" {{Input::get('show')==24?'selected="selected"':''}}>24 ITEMS</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="tabs-btns"> 
                            <ul class="tabination view-tabs">
                                <li> View </li>
                                <li class="active">
                                    <a href="#grid-view" data-toggle="tab">                                                    
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#list-view" data-toggle="tab">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </li>
                            </ul>                                       
                        </div>
                    </div>     

                    <div class="tab-content">

                        <!-- Product Grid View Starts -->
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            <div class="row">
                                
                                    @foreach(list_product(12, @$category, @$collection) as $myproduk)
                                <div class="col-sm-6 col-lg-3 product-area">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="{{ product_url($myproduk) }}" class="img"> 
                                                    <img alt="{{ $myproduk->nama }}" src="{{ product_image_url($myproduk->gambar1) }}">
                                                    <span class="product-hover">
                                                        <img alt="{{ $myproduk->nama }}" src="{{ product_image_url($myproduk->gambar2) }}">
                                                    </span>
                                                </a>
                                                <!-- <div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div> -->
                                                @if(is_terlaris($myproduk))
                                                    <div class="sale-tag"> Hot </div>
                                                @endif
                                                @if(is_produkbaru($myproduk))
                                                    <div class="new-tag"> New </div>
                                                @endif
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-title"> <a href="#">{{ $myproduk->nama }}</a> </h2>
                                                <span class="price"> <b>{{ price($myproduk->hargaJual) }}</b> <del>{{ price($myproduk->hargaCoret) }}</del> </span>
                                                
                                                <div class="product-links"> 
                                                    <a href="{{ product_url($myproduk) }}" class="add-to-cart"> <span> View </span> <i class="icon_cart_alt"></i> </a>
                                                    <!-- <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a> -->
                                                </div>
                                            </div>
                                        </div>
                                    
                                    
                                </div>
                                    @endforeach

                                <div class="col-sm-12 col-lg-12">
                                    <div class="block-inline pagination-wrap text-center">
                                        {{ list_product(12,@$category,@$collection)->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Grid View Ends -->

                        <!-- Product List View Starts -->
                        <div id="list-view" class="tab-pane fade" role="tabpanel">                                     
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
<br class="divider-1" />