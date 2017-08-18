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

<div id="section-1499077397916" class="bingoFramework">
    <div class="maxCollectionList">
        <div class="container">
            <h3 class="bingoHomeTitle">
                Shop by collection
                <a class="allCategories" href="{{ url('produk') }}">View All <i class="icofont icofont-bubble-right"></i></a>
            </h3>
            <div class="bingoContent">
                <div class="maxSlideCollections">
                    <div class="owlCarouselPlay">
                        <div class="owl-carousel owl-theme" data-nav="true" data-autoplay="false" data-autospeed="10000" data-speed="300" data-columnone="6" data-columntwo="5" data-columnthree="4" data-columnfour="3" data-columnfive="2">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper">
                                    <div class="owl-item active" style="width: 195px;">
                                        @foreach(list_koleksi() as $col)
                                        <div class="item">
                                            <div class="maxBoxCategories">
                                                <div class="max-category--image">
                                                    <a href="{{ koleksi_url($col) }}">
                                                        <img class="img-responsive img-circle" alt="{{ $col->nama }}" src="{{ koleksi_image_url($col->gambar) }}">
                                                    </a>
                                                </div>
                                                <div class="max-category--caption">
                                                    <h3 class="max-category--title">
                                                        <a href="{{ koleksi_url($col) }}">{{ $col->nama }}</a>
                                                    </h3>
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