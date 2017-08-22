<!-- DAFTAR PRODUK -->
<div id="shopify-section-1495614695584" class="shopify-section bingoFramework">
    <div class="productTabsHome layout-default">
        <div class="container">
            <div id="proTab1495614695584" class="bingoProducts">
                <div class="productTabsBoxTitle">
                    <h3 class="productTabsTitle" data-toggle="dropdown">Max your style!</h3>
                    <div class="listTabsContent dropdown-menu">
                        <ul class="nav proTabNav">
                            
                                <li class="active">
                                    <a href="#new" data-toggle="tab" aria-expanded="true">New Arrivals</a>
                                </li>
                            
                                <li class="">
                                    <a href="#best" data-toggle="tab" aria-expanded="false">Best Sellers</a>
                                </li>
                            
                                <li class="">
                                    <a href="#home" data-toggle="tab" aria-expanded="false">Hot Sales</a>
                                </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="bingoContent">
                    <div class="navTabContent tab-content">

                        <div class="tab-pane active" id="new">
                            <div class="proOwlCarousel proTabsOwlcarousel">
                                <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="4" data-columntwo="4" data-columnthree="3" data-columnfour="2" data-columnfive="2" data-tabid="proTab1495614695584" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 4800px; left: 0px; display: block;">
                                            @foreach(new_product() as $new)
                                            <div class="owl-item active" style="width: 300px;">
                                                <div class="item">
                                                    <div class="bingoProBlock">
                                                        <div class="proHImage">
                                                            <a class="proFeaturedImage" href="{{product_url($new)}}">
                                                                <img class="img-responsive" alt="{{$new->nama}}" src="{{url(product_image_url($new->gambar1 ))}}">
                                                                <span class="hidden-sm hidden-xs">
                                                                    <img class="img-responsive" alt="{{$new->nama}}" src="{{url(product_image_url($new->gambar2 ))}}">
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="proContent">
                                                            <h5 class="proName">
                                                                <a href="{{product_url($new)}}">{{$new->nama}}</a>
                                                            </h5>
                                                            <div class="proPrice">
                                                                <div class="priceProduct priceSale">{{price($new->hargaJual)}}</div>
                                                            </div>
                                                            <div class="proButton">
                                                                <!-- <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                                                                    <input type="hidden" name="id" value="36625387016">
                                                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </form> -->
                                                                <a class="btn btnAddToCart" href="{{product_url($new)}}">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </a>
                                                                <!-- <div class="productWishList">
                                                                    <a class="btn btnWishlistNoLog btnProduct" href="/account/login" title="Add to wishlist">
                                                                        <i class="icofont icofont-heart-alt"></i>
                                                                        <span>Add to wishlist</span>
                                                                    </a>
                                                                </div> -->
                                                            </div>
                                                            <div class="productQuickView">
                                                                <a class="btn btnProduct btnProductQuickview" href="{{product_url($new)}}" data-handle="cras-viverra-molestie" data-toggle="tooltip" title="" data-original-title="Quickview">
                                                                    <i class="fa fa-eye"></i>
                                                                    <span>Quickview</span>
                                                                </a>
                                                            </div>
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

                         <div class="tab-pane" id="best">
                            <div class="proOwlCarousel proTabsOwlcarousel">
                                <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="4" data-columntwo="4" data-columnthree="3" data-columnfour="2" data-columnfive="2" data-tabid="proTab1495614695584" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 4800px; left: 0px; display: block;">
                                            @foreach(best_seller() as $best)
                                            <div class="owl-item active" style="width: 300px;">
                                                <div class="item">
                                                    <div class="bingoProBlock">
                                                        <div class="proHImage">
                                                            <a class="proFeaturedImage" href="{{product_url($best)}}">
                                                                <img class="img-responsive" alt="{{$best->nama}}" src="{{url(product_image_url($best->gambar1 ))}}">
                                                                <span class="hidden-sm hidden-xs">
                                                                    <img class="img-responsive" alt="{{$best->nama}}" src="{{url(product_image_url($best->gambar2 ))}}">
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="proContent">
                                                            <h5 class="proName">
                                                                <a href="{{product_url($best)}}">{{$best->nama}}</a>
                                                            </h5>
                                                            <div class="proPrice">
                                                                <div class="priceProduct priceSale">{{price($best->hargaJual)}}</div>
                                                            </div>
                                                            <div class="proButton">
                                                                <!-- <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                                                                    <input type="hidden" name="id" value="36625387016">
                                                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </form> -->
                                                                <a class="btn btnAddToCart" href="{{product_url($best)}}">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </a>
                                                                <!-- <div class="productWishList">
                                                                    <a class="btn btnWishlistNoLog btnProduct" href="/account/login" title="Add to wishlist">
                                                                        <i class="icofont icofont-heart-alt"></i>
                                                                        <span>Add to wishlist</span>
                                                                    </a>
                                                                </div> -->
                                                            </div>
                                                            <div class="productQuickView">
                                                                <a class="btn btnProduct btnProductQuickview" href="{{product_url($best)}}" data-handle="cras-viverra-molestie" data-toggle="tooltip" title="" data-original-title="Quickview">
                                                                    <i class="fa fa-eye"></i>
                                                                    <span>Quickview</span>
                                                                </a>
                                                            </div>
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

                         <div class="tab-pane" id="home">
                            <div class="proOwlCarousel proTabsOwlcarousel">
                                <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="4" data-columntwo="4" data-columnthree="3" data-columnfour="2" data-columnfive="2" data-tabid="proTab1495614695584" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 4800px; left: 0px; display: block;">
                                            @foreach(home_product() as $home)
                                            <div class="owl-item active" style="width: 300px;">
                                                <div class="item">
                                                    <div class="bingoProBlock">
                                                        <div class="proHImage">
                                                            <a class="proFeaturedImage" href="{{product_url($home)}}">
                                                                <img class="img-responsive" alt="{{$home->nama}}" src="{{url(product_image_url($home->gambar1 ))}}">
                                                                <span class="hidden-sm hidden-xs">
                                                                    <img class="img-responsive" alt="{{$home->nama}}" src="{{url(product_image_url($home->gambar2 ))}}">
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="proContent">
                                                            <h5 class="proName">
                                                                <a href="{{product_url($home)}}">{{$home->nama}}</a>
                                                            </h5>
                                                            <div class="proPrice">
                                                                <div class="priceProduct priceSale">{{price($home->hargaJual)}}</div>
                                                            </div>
                                                            <div class="proButton">
                                                                <!-- <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                                                                    <input type="hidden" name="id" value="36625387016">
                                                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </form> -->
                                                                <a class="btn btnAddToCart" href="{{product_url($home)}}">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </a>
                                                                <!-- <div class="productWishList">
                                                                    <a class="btn btnWishlistNoLog btnProduct" href="/account/login" title="Add to wishlist">
                                                                        <i class="icofont icofont-heart-alt"></i>
                                                                        <span>Add to wishlist</span>
                                                                    </a>
                                                                </div> -->
                                                            </div>
                                                            <div class="productQuickView">
                                                                <a class="btn btnProduct btnProductQuickview" href="{{product_url($home)}}" data-handle="cras-viverra-molestie" data-toggle="tooltip" title="" data-original-title="Quickview">
                                                                    <i class="fa fa-eye"></i>
                                                                    <span>Quickview</span>
                                                                </a>
                                                            </div>
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

<!-- TESTIMONIAL -->
<div id="shopify-section-1499070075923" class="shopify-section bingoFramework">
    <div class="maxTestimonials">
        <div class="container">
            <div class="bingoTestimonials" style="background-image: url(//cdn.shopify.com/s/files/1/2027/9309/files/max_image55.jpg?v=1499073644);">
                
                    <h3 class="bingoHomeTitle">Testimonials</h3>
                
                <div class="bingoContent">
                    <div class="tesOwlRow owlCarouselPlay">
                        <div class="owl-carousel owl-theme" data-nav="false" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="1" data-columntwo="1" data-columnthree="1" data-columnfour="1" data-columnfive="1" style="opacity: 1; display: block;">
                            
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 1800px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: auto;">
                                        <div class="item">
                                            <div class="testimonialItem clearfix">
                                                <div class="testimonialReview">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                </div>
                                                <h4 class="testimonialName">Vin Nguyen <span>Purschaser</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page ">
                                        <span class=""></span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- KATEGORI -->
<div id="shopify-section-1499077397916" class="shopify-section bingoFramework">
    <div class="maxCollectionList">
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
</div>

<!-- PRODUCT PER KATEGOTI -->
<div id="shopify-section-1499141271046" class="shopify-section bingoFramework">
    <div class="maxThreeProducts">
        <div class="container">
            <div class="maxThreeProductsWrap">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="maxslideProducts">
                            <h4 class="bingoHomeTitle">Men's</h4>
                            <div class="bingoContent">
                                @foreach(list_product(3,$kategori[0]) as $men)
                                <div class="bingoThreeProduct">
                                    <div class="proHImage">
                                        <a class="proFeaturedImage" href="{{product_url($men)}}">
                                            <img class="img-responsive" alt="{{$men->nama}}" src="{{url(product_image_url($men->gambar1,'medium'))}}">
                                        </a>
                                    </div>
                                    <div class="proContent">
                                        <h5 class="proName">
                                            <a href="/products/sed-mollis-est-ac-urna">{{$men->nama}}</a>
                                        </h5>
                                        <div class="proPrice">
                                            <div class="priceProduct priceSale">{{price($men->hargaJual)}}</div>
                                            
                                        </div>
                                        <div class="proButton">
                                            <!-- <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                                                <input type="hidden" name="id" value="36625412552">

                                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>

                                            </form> -->
                                            <a class="btn btnAddToCart" href="{{product_url($men)}}">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="maxslideProducts">
                            <h4 class="bingoHomeTitle">Women's</h4>
                            <div class="bingoContent">
                                @foreach(list_product(3,$kategori[1]) as $woman)
                                <div class="bingoThreeProduct">
                                    <div class="proHImage">
                                        <a class="proFeaturedImage" href="{{product_url($woman)}}">
                                            <img class="img-responsive" alt="{{$woman->nama}}" src="{{url(product_image_url($woman->gambar1,'medium'))}}">
                                        </a>
                                    </div>
                                    <div class="proContent">
                                        <h5 class="proName">
                                            <a href="/products/sed-mollis-est-ac-urna">{{$woman->nama}}</a>
                                        </h5>
                                        <div class="proPrice">
                                            <div class="priceProduct priceSale">{{price($woman->hargaJual)}}</div>
                                            
                                        </div>
                                        <div class="proButton">
                                            <!-- <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                                                <input type="hidden" name="id" value="36625412552">

                                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>

                                            </form> -->
                                            <a class="btn btnAddToCart" href="{{product_url($woman)}}">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="maxslideProducts">
                            <h4 class="bingoHomeTitle">Junior's</h4>
                            <div class="bingoContent">
                                @foreach(list_product(3,$kategori[2]) as $junior)
                                <div class="bingoThreeProduct">
                                    <div class="proHImage">
                                        <a class="proFeaturedImage" href="{{product_url($junior)}}">
                                            <img class="img-responsive" alt="{{$junior->nama}}" src="{{url(product_image_url($junior->gambar1,'medium'))}}">
                                        </a>
                                    </div>
                                    <div class="proContent">
                                        <h5 class="proName">
                                            <a href="/products/sed-mollis-est-ac-urna">{{$junior->nama}}</a>
                                        </h5>
                                        <div class="proPrice">
                                            <div class="priceProduct priceSale">{{price($junior->hargaJual)}}</div>
                                            
                                        </div>
                                        <div class="proButton">
                                            <!-- <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                                                <input type="hidden" name="id" value="36625412552">

                                                    <button class="btn btnAddToCart" type="submit" value="Submit">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>

                                            </form> -->
                                            <a class="btn btnAddToCart" href="{{product_url($junior)}}">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Cart</span>
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
    </div>
</div>

<!-- BLOG -->
<div id="shopify-section-1495685564392" class="shopify-section bingoFramework">
    <div class="blogsListCarousel">
        <div class="container">
            <div class="blogCarousel">
                <h3 class="bingoHomeTitle">Latest from blog</h3>
                <div class="bingoContent">
                    <div class="bingoOwlRow owlCarouselPlay">
                        <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="3" data-columntwo="3" data-columnthree="2" data-columnfour="2" data-columnfive="2" style="opacity: 1; display: block;">
                        
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 3200px; left: 0px; display: block;">
                                    @foreach(list_blog(3) as $blog)
                                    <div class="owl-item active" style="width: 400px;">
                                        <div class="blogArticle bingoArticleItem">
                                            <div class="articleImage">
                                                <a href="{{blog_url($blog)}}">
                                                    <img class="img-responsive" src="{{imgString($blog->isi)}}" style="width: 100%;" alt="{{$blog->judul}}">
                                                </a>
                                            </div>
                                            <div class="articleContent">
                                                <h3 class="articleTitle">
                                                    <a href="{{blog_url($blog)}}">{{$blog->judul}}</a>
                                                </h3>
                                                <div class="articleMeta">
                                                    <span>{{date("d F Y", strtotime($blog->updated_at))}}</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        
                    <!-- <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div> -->
                </div>
            </div>
        </div>
    </div>
</div>