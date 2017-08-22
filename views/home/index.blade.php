
<div id="section-1495614695584" class="bingoFramework">
    <div class="productTabsHome layout-default">
        <div class="container">
            <div id="proTab1495614695584" class="bingoProducts">
                <div class="productTabsBoxTitle">
                    <h3 class="productTabsTitle" data-toggle="dropdown">Max your style!</h3>
                    <div class="listTabsContent dropdown-menu">
                        <ul class="nav proTabNav">
                            <li>
                                <a href="#proTab11495614695584" data-toggle="tab" aria-expanded="false">New Arrivals</a>
                            </li>
                            <li>
                                <a href="#proTab21495614695584" data-toggle="tab" aria-expanded="false">Best Sellers</a>
                            </li>
                            <li class="active">
                                <a href="#proTab41495614695584" data-toggle="tab" aria-expanded="true">Trending</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bingoContent">
                    <div class="navTabContent tab-content">
                        <div class="tab-pane" id="proTab11495614695584">
                            <div class="proOwlCarousel proTabsOwlcarousel">
                                <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="4" data-columntwo="4" data-columnthree="3" data-columnfour="2" data-columnfive="2" data-tabid="proTab1495614695584">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper">
                                            <div class="owl-item active">
                                                @foreach(new_product() as $new)
                                                <div class="bingoProBlock">
                                                    <div class="proHImage">
                                                        <a class="proFeaturedImage" href="/products/curabitur-semper-odio">
                                                            <img class="img-responsive" alt="{{ $new->nama }}" src="{{ product_image_url($new->gambar1, 'medium') }}">
                                                            <span class="hidden-sm hidden-xs">
                                                                @if(!empty($new->gambar2))
                                                                <img class="img-responsive" alt="{{ $new->nama }}" src="{{ product_image_url($new->gambar2,'medium') }}">
                                                                @elseif(!empty($new->gambar3))
                                                                <img class="img-responsive" alt="{{ $new->nama }}" src="{{ product_image_url($new->gambar3,'medium') }}">
                                                                @elseif(!empty($new->gambar4))
                                                                <img class="img-responsive" alt="{{ $new->nama }}" src="{{ product_image_url($new->gambar4,'medium') }}">
                                                                @endif
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="proContent">
                                                        <h5 class="proName">
                                                            <a href="{{ product_url($new) }}">{{ short_description($new->isi, 20) }}</a>
                                                        </h5>
                                                        
                                                        <div class="proPrice">
                                                            <div class="priceProduct priceSale">{{ price($new->hargaJual) }}</div>
                                                            @if($new->hargaCoret > 0)
                                                            <div class="priceProduct priceCompare">{{ price($new->hargaCoret) }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="proButton">
                                                            <a class="btn btnAddToCart" href="{{ product_url($new) }}" title="View">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>View</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="tab-pane" id="proTab21495614695584">
                            <div class="proOwlCarousel proTabsOwlcarousel">
                                <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="4" data-columntwo="4" data-columnthree="3" data-columnfour="2" data-columnfive="2" data-tabid="proTab1495614695584">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper">
                                            <div class="owl-item active">
                                                @foreach(best_seller() as $best)
                                                <div class="item">
                                                    <div class="bingoProBlock">
                                                        <div class="proHImage">
                                                            <a class="proFeaturedImage" href="{{ product_url($best) }}">
                                                                <img class="img-responsive" alt="{{ $best->nama }}" src="{{ product_image_url($best->gambar1, 'medium') }}">
                                                                <span class="hidden-sm hidden-xs">
                                                                    @if(!empty($beset->gambar2))
                                                                    <img class="img-responsive" alt="{{ $beset->nama }}" src="{{ product_image_url($beset->gambar2,'medium') }}">
                                                                    @elseif(!empty($beset->gambar3))
                                                                    <img class="img-responsive" alt="{{ $beset->nama }}" src="{{ product_image_url($beset->gambar3,'medium') }}">
                                                                    @elseif(!empty($beset->gambar4))
                                                                    <img class="img-responsive" alt="{{ $beset->nama }}" src="{{ product_image_url($beset->gambar4,'medium') }}">
                                                                    @endif
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="proContent">
                                                            <h5 class="proName">
                                                                <a href="{{ product_url($best) }}">{{ short_description($best->nama, 20) }}</a>
                                                            </h5>
                                                            
                                                            <div class="proPrice">
                                                                <div class="priceProduct priceSale">{{ price($best->hargaJual) }}</div>
                                                                @if($best->hargaCoret!=0)
                                                                <div class="priceProduct priceCompare">{{ price($best->hargaCoret) }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="proButton">
                                                                <a class="btn btnAddToCart" href="{{ product_url($best) }}" title="View">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="tab-pane active" id="proTab41495614695584">
                            <div class="proOwlCarousel proTabsOwlcarousel">
                                <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="4" data-columntwo="4" data-columnthree="3" data-columnfour="2" data-columnfive="2" data-tabid="proTab1495614695584">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper">
                                            <div class="owl-item active" style="width: 300px;">
                                                @foreach(home_product() as $home)
                                                <div class="item">
                                                    <div class="bingoProBlock">
                                                        <div class="proHImage">
                                                            <a class="proFeaturedImage" href="{{ product_url($home) }}">
                                                                <img class="img-responsive" alt="{{ $home->nama }}" src="{{ product_image_url($home->gambar1, 'medium') }}">
                                                                <span class="hidden-sm hidden-xs">
                                                                    @if(!empty($home->gambar2))
                                                                    <img class="img-responsive" alt="{{ $home->nama }}" src="{{ product_image_url($home->gambar2,'medium') }}">
                                                                    @elseif(!empty($home->gambar3))
                                                                    <img class="img-responsive" alt="{{ $home->nama }}" src="{{ product_image_url($home->gambar3,'medium') }}">
                                                                    @elseif(!empty($home->gambar4))
                                                                    <img class="img-responsive" alt="{{ $home->nama }}" src="{{ product_image_url($home->gambar4,'medium') }}">
                                                                    @endif
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="proContent">
                                                            <h5 class="proName">
                                                                <a href="{{ product_url($home) }}">{{ short_description($home->nama, 20) }}</a>
                                                            </h5>
                                                            
                                                            <div class="proPrice">
                                                                <div class="priceProduct priceSale">{{ price($home->hargaJual) }}</div>
                                                                @if($home->hargaCoret!=0)
                                                                <div class="priceProduct priceCompare">{{ price($home->hargaCoret) }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="proButton">
                                                                <a class="btn btnAddToCart" href="{{ product_url($home) }}" title="View">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="shopify-section-1495614695584" class="shopify-section bingoFramework">
    <div class="productTabsHome layout-default">
        <div class="container">
            <div id="proTab1495614695584" class="bingoProducts">
                <div class="productTabsBoxTitle">
                    <h3 class="productTabsTitle" data-toggle="dropdown">Max your style!</h3>
                    <div class="listTabsContent dropdown-menu">
                        <ul class="nav proTabNav">
                            
                                <li class="active">
                                    <a href="#proTab11495614695584" data-toggle="tab" aria-expanded="true">New Arrivals</a>
                                </li>
                            
                                <li class="">
                                    <a href="#proTab21495614695584" data-toggle="tab" aria-expanded="false">Best Sellers</a>
                                </li>
                            
                                <li class="">
                                    <a href="#proTab31495614695584" data-toggle="tab" aria-expanded="false">Hot Sales</a>
                                </li>
                            
                                <li class="">
                                    <a href="#proTab41495614695584" data-toggle="tab" aria-expanded="false">Trending</a>
                                </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="bingoContent">
                    <div class="navTabContent tab-content">
                        <div class="tab-pane active" id="proTab11495614695584">
                            <div class="proOwlCarousel proTabsOwlcarousel">
                                <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="4" data-columntwo="4" data-columnthree="3" data-columnfour="2" data-columnfive="2" data-tabid="proTab1495614695584" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 4800px; left: 0px; display: block;">
                                            
                                            <div class="owl-item active" style="width: 300px;">
                                                <div class="item">
                                                    <div class="bingoProBlock">
                                                        <div class="proHImage">
                                                            <a class="proFeaturedImage" href="/products/cras-viverra-molestie">
                                                                <img class="img-responsive" alt="Cras viverra molestie" src="//cdn.shopify.com/s/files/1/2027/9309/products/2_1_ff89fc42-4e14-40a5-b76e-da9a4557f7a6_270x.jpg?v=1498019557">
                                                                <span class="hidden-sm hidden-xs">
                                                                    <img class="img-responsive" alt="Cras viverra molestie" src="//cdn.shopify.com/s/files/1/2027/9309/products/2_2_19e6c8b5-d74b-40e5-ab5a-2735cc6d014a_270x.jpg?v=1498019559">
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="proContent">
                                                            <h5 class="proName">
                                                                <a href="/products/cras-viverra-molestie">Cras viverra molestie</a>
                                                            </h5>
                                                            <div class="proPrice">
                                                                <div class="priceProduct priceSale">$60.00</div>
                                                            </div>
                                                            <div class="proButton">
                                                                <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                                                                    <input type="hidden" name="id" value="36625387016">
                                                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </form>
                                                                <div class="productWishList">
                                                                    <a class="btn btnWishlistNoLog btnProduct" href="/account/login" title="Add to wishlist">
                                                                        <i class="icofont icofont-heart-alt"></i>
                                                                        <span>Add to wishlist</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="productQuickView">
                                                                <a class="btn btnProduct btnProductQuickview" href="#bingoQuickView" data-handle="cras-viverra-molestie" data-toggle="tooltip" title="" data-original-title="Quickview">
                                                                    <i class="fa fa-eye"></i>
                                                                    <span>Quickview</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section-1499070075923" class="bingoFramework">
    <div class="maxTestimonials">
        <div class="container">
            <div class="bingoTestimonials" style="background-image: url({{ url(dirTemaToko().'celebandco/assets/img/max_image55.jpg') }});">
                <h3 class="bingoHomeTitle">Testimonials</h3>
                <div class="bingoContent">
                    <div class="tesOwlRow owlCarouselPlay">
                        <div class="owl-carousel owl-theme" data-nav="false" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="1" data-columntwo="1" data-columnthree="1" data-columnfour="1" data-columnfive="1" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper">
                                    @foreach(list_testimonial() as $t)
                                    <div class="owl-item active" style="width: 762px;">
                                        <div class="item">
                                            <div class="testimonialItem clearfix">
                                                <div class="testimonialReview">
                                                    {{ trim($t->isi) }}
                                                </div>
                                                <h4 class="testimonialName">{{ $t->nama }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="shopify-section-1499077397916" class="shopify-section bingoFramework"><div class="maxCollectionList">
    <div class="container">
        <h3 class="bingoHomeTitle">
            Shop by categories
            <a class="allCategories" href="/collections">View All Categories <i class="icofont icofont-bubble-right"></i></a>
        </h3>
        <div class="bingoContent">
            <div class="maxSlideCollections">
                <div class="owlCarouselPlay">
                    <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="6" data-columntwo="5" data-columnthree="4" data-columnfour="3" data-columnfive="2" style="opacity: 1; display: block;">
                            
                        <div class="owl-wrapper-outer">

                            <div class="owl-wrapper" style="width: 2730px; left: 0px; display: block;">
                                @foreach(list_category() as $key=>$kategori)
                                <div class="owl-item active" style="width: 195px;">
                                    <div class="item">
                                        <div class="maxBoxCategories">
                                            <div class="max-category--image">
                                                <a href="{{category_url($kategori)}}"><img class="img-responsive img-circle" alt="Bingo Max" src="//d2kl9mvmw5l7p9.cloudfront.net/6feb-upload/kategori/{{$key+1}}.png"></a>
                                            </div>
                                            <div class="max-category--caption"><h3 class="max-category--title"><a href="{{category_url($kategori)}}">{{$kategori->nama}}</a></h3></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                <div class="owl-controls clickable">
                                    <div class="owl-pagination">
                                        <div class="owl-page active">
                                            <span class=""></span>
                                        </div>
                                        <div class="owl-page">
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    <div class="owl-buttons">
                                        <div class="owl-prev">prev</div>
                                        <div class="owl-next">next</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="shopify-section-1499141271046" class="shopify-section bingoFramework"><div class="maxThreeProducts">
    <div class="container">
        <div class="maxThreeProductsWrap">
            <div class="row">
                <div class="col-xs-12 col-md-4"><div class="maxslideProducts"><h4 class="bingoHomeTitle">Men's</h4><div class="bingoContent">
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/sed-mollis-est-ac-urna">
                        <img class="img-responsive" alt="Sed mollis est ac urna" src="//cdn.shopify.com/s/files/1/2027/9309/products/14_1_100x.jpg?v=1498034255">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/sed-mollis-est-ac-urna">Sed mollis est ac urna</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$234.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625412552">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/retro-classic-white-accent">
                        <img class="img-responsive" alt="Retro-classic white accent" src="//cdn.shopify.com/s/files/1/2027/9309/products/13_1_100x.jpg?v=1498034220">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/retro-classic-white-accent">Retro-classic white accent</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$280.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625362696">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/quisque-lacinia-tellus">
                        <img class="img-responsive" alt="Quisque lacinia tellus" src="//cdn.shopify.com/s/files/1/2027/9309/products/12_1_100x.jpg?v=1498034112">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/quisque-lacinia-tellus">Quisque lacinia tellus</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$120.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625399240">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
    </div>
</div></div>
                <div class="col-xs-12 col-md-4"><div class="maxslideProducts"><h4 class="bingoHomeTitle">Women's</h4><div class="bingoContent">
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/cras-viverra-molestie">
                        <img class="img-responsive" alt="Cras viverra molestie" src="//cdn.shopify.com/s/files/1/2027/9309/products/2_1_ff89fc42-4e14-40a5-b76e-da9a4557f7a6_100x.jpg?v=1498019557">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/cras-viverra-molestie">Cras viverra molestie</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$60.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625387016">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/metal-indoor-outdoor">
                        <img class="img-responsive" alt="Metal Indoor/ Outdoor" src="//cdn.shopify.com/s/files/1/2027/9309/products/6_1_91574449-3853-420d-ba9f-cc15309b6b87_100x.jpg?v=1498033797">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/metal-indoor-outdoor">Metal Indoor/ Outdoor</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$80.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625363720">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/retro-classic-white-accent">
                        <img class="img-responsive" alt="Retro-classic white accent" src="//cdn.shopify.com/s/files/1/2027/9309/products/13_1_100x.jpg?v=1498034220">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/retro-classic-white-accent">Retro-classic white accent</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$280.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625362696">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
    </div>
</div></div>
                <div class="col-xs-12 col-md-4"><div class="maxslideProducts"><h4 class="bingoHomeTitle">Kid's</h4><div class="bingoContent">
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/christopher-knight-home">
                        <img class="img-responsive" alt="Christopher Knight Home" src="//cdn.shopify.com/s/files/1/2027/9309/products/1_1_100x.jpg?v=1498019334">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/christopher-knight-home">Christopher Knight Home</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$220.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625336584">
                            
                                
                                    <a class="btn btnAddToCart" href="/products/christopher-knight-home" title="Select options">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="select_options">Select options</span>
                                    </a>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/moser-bay-furniture-roll">
                        <img class="img-responsive" alt="Moser bay furniture roll" src="//cdn.shopify.com/s/files/1/2027/9309/products/7_1_100x.jpg?v=1498033837">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/moser-bay-furniture-roll">Moser bay furniture roll</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$90.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625340424">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="bingoThreeProduct">
                <div class="proHImage">
                    <a class="proFeaturedImage" href="/products/javier-modern-zigzag-odio">
                        <img class="img-responsive" alt="Javier modern zigzag odio" src="//cdn.shopify.com/s/files/1/2027/9309/products/5_1_0ef8b768-b07c-4483-8fc0-cbc5dc3fa2ec_100x.jpg?v=1498033733">
                    </a>
                </div>
                <div class="proContent">
                    <h5 class="proName">
                        <a href="/products/javier-modern-zigzag-odio">Javier modern zigzag odio</a>
                    </h5>
                    <div class="proPrice">
                        <div class="priceProduct priceSale">$120.00</div>
                        
                    </div>
                    <div class="proButton"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                            <input type="hidden" name="id" value="36625350024">
                            
                                
                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        
    </div>
</div></div>
            </div>
        </div>
    </div>
</div></div>

<div id="shopify-section-1495685564392" class="shopify-section bingoFramework"><div class="blogsListCarousel">
    <div class="container">
        <div class="blogCarousel"><h3 class="bingoHomeTitle">Latest from blog</h3><div class="bingoContent">
                <div class="bingoOwlRow owlCarouselPlay">
                    <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="3" data-columntwo="3" data-columnthree="2" data-columnfour="2" data-columnfive="2" style="opacity: 1; display: block;">
                        
                            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3200px; left: 0px; display: block;"><div class="owl-item active" style="width: 400px;"><div class="blogArticle bingoArticleItem"><div class="articleImage">
                                            <a href="/blogs/news/a-downtown-chicago-bachelor-pad">
                                                <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2027/9309/articles/max_blog8_370x.jpg?v=1495698447" alt="A Downtown Chicago Bachelor Pad">
                                            </a>
                                        </div><div class="articleContent">
                                    <h3 class="articleTitle"><a href="/blogs/news/a-downtown-chicago-bachelor-pad">A Downtown Chicago Bachelor Pad</a></h3>
                                    <div class="articleMeta">
                                        <span>25 May, 17</span>
                                    </div>
                                </div>
                            </div></div><div class="owl-item active" style="width: 400px;"><div class="blogArticle bingoArticleItem"><div class="articleImage">
                                            <a href="/blogs/news/how-to-embrace-streetwear">
                                                <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2027/9309/articles/max_blog5_370x.jpg?v=1495698387" alt="How To Embrace Streetwear">
                                            </a>
                                        </div><div class="articleContent">
                                    <h3 class="articleTitle"><a href="/blogs/news/how-to-embrace-streetwear">How To Embrace Streetwear</a></h3>
                                    <div class="articleMeta">
                                        <span>25 May, 17</span>
                                    </div>
                                </div>
                            </div></div><div class="owl-item active" style="width: 400px;"><div class="blogArticle bingoArticleItem"><div class="articleImage">
                                            <a href="/blogs/news/creating-inspiring-gathering-spaces">
                                                <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2027/9309/articles/max_blog10_370x.jpg?v=1495698474" alt="Creating Inspiring Gathering Spaces">
                                            </a>
                                        </div><div class="articleContent">
                                    <h3 class="articleTitle"><a href="/blogs/news/creating-inspiring-gathering-spaces">Creating Inspiring Gathering Spaces</a></h3>
                                    <div class="articleMeta">
                                        <span>24 May, 17</span>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 400px;"><div class="blogArticle bingoArticleItem"><div class="articleImage">
                                            <a href="/blogs/news/these-graphic-t-shirts-are-man-repeller-approved">
                                                <img class="img-responsive" src="//cdn.shopify.com/s/files/1/2027/9309/articles/max_blog6_370x.jpg?v=1495698410" alt="These Graphic T-Shirts Are Man Repeller Approved">
                                            </a>
                                        </div><div class="articleContent">
                                    <h3 class="articleTitle"><a href="/blogs/news/these-graphic-t-shirts-are-man-repeller-approved">These Graphic T-Shirts Are Man Repeller Approved</a></h3>
                                    <div class="articleMeta">
                                        <span>26 April, 17</span>
                                    </div>
                                </div>
                            </div></div></div></div>
                        
                            
                        
                            
                        
                            
                        
                    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>