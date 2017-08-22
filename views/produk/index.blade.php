<section id="bingoBreadcrumbs">
    <div id="bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
	       <nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>Product</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">Product</span></span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
	       </nav>
        </div>
    </div>
</section>

<section id="pageContent">
    <div class="container">
        <div class="collectionContainer">
            <div class="row">
                <aside id="bingoSidebar" class="bingoSidebar col-xs-12 col-sm-4 col-md-3">
                    @if(list_category()->count() > 0)
                    <div id="sidebartop">
                        <div id="bingoCategories" class="bingoCategoriesSidebar">
                            <h3 class="titleSidebar">Categories</h3>
                            <div class="bingoContent">
                                @foreach(list_category() as $side_menu)
                                    @if($side_menu->parent == '0')
                                    <div class="itemCategory">
                                        @if($side_menu->anak->count() < 1)
                                        <h4 class="cateTitle">
                                            <a class="cateItem" href="{{ category_url($side_menu) }}">{{ $side_menu->nama }}</a>
                                        </h4>
                                        @else
                                        <h4 class="cateTitle">
                                            <a class="cateItem hasSubCategory collapsed" data-toggle="collapse" href="#subCategory{{$side_menu->id}}">{{ $side_menu->nama }}</a>
                                        </h4>
                                        <div id="subCategory{{$side_menu->id}}" class="collapse">
                                            <div class="panel-body">
                                                <ul class="listSidebar list-unstyled">
                                                    @foreach($side_menu->anak as $submenu)
                                                    @if($submenu->parent == $side_menu->id)
                                                    <li><a href="{{ category_url($submenu) }}" title="{{ $submenu->nama }}">{{ $submenu->nama }}</a></li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(best_seller()->count() > 0)
                    <div id="sidebarbanner">
                        <div class="binBlockSidebar bingoProductsSidebar">
                            <h4 class="titleSidebar">Featured Products</h4>
                            <div class="bingoContent">
                                @foreach(best_seller() as $best)
                                <div class="bingoProBlock">
                                    <div class="proHImage">
                                        <a class="proFeaturedImage" href="{{ product_url($best) }}">
                                            <img class="img-responsive" alt="{{ $best->nama }}" src="{{ product_image_url($best->gambar1,'thumb') }}">
                                        </a>
                                    </div>
                                    <div class="proContent">
                                        <h5 class="proName"><a href="{{ product_url($best) }}">{{ $best->nama }}</a></h5>
                                        <div class="proPrice">
                                            <div class="priceProduct priceSale">{{ price($best->hargaJual) }}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </aside>
                <div id="proListCollection" class="bingoCenterColumn col-xs-12 col-sm-8 col-md-9">
                    <div id="bingo-template-collections">
                        <div class="collBoxTop">
                            <h1 class="headerCollection hidden">Product</h1>
                        </div>
                        <div class="collBoxSort">
                            <div class="collView">
                                <button type="button" title="Grid view" class="changeView changeViewActive" data-view="grid">
                                    <span class="iconChangeView">
                                        <i class="icofont icofont-brand-microsoft"></i>
                                        <span class="hidden">Grid view</span>
                                    </span>
                                </button>
                                <button type="button" title="List view" class="changeView" data-view="list">
                                    <span class="iconChangeView">
                                        <i class="icofont icofont-justify-all"></i>
                                        <span class="hidden">List view</span>
                                    </span>
                                </button>
                            </div>
                            <div class="collProductCount">Showing 1-10 of 10 total</div>
                                <div class="collSortBy">
                                    <label for="SortBy">Sort by:</label>
                                    <select name="SortBy" id="SortBy" class="form-control">
                                        <option value="manual">Featured</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select>
                                </div>
                            </div>
                            <div class="collBoxProducts">
                                <div id="bingoProList" class="proList grid">
                                    <div class="bingoFlexRow flexRow">
                                        @foreach(list_product(null, @$category, @$collection) as $myproduk)
                                        <div class="filerProductPrice col-sp-12 col-xs-6 col-md-4" data-price="{{ $myproduk->hargaJual }}">
                                            <div class="bingoProBlock">
                                                <div class="proHImage">
                                                    <a class="proFeaturedImage" href="{{ product_url($myproduk) }}">
                                                        <img class="img-responsive" alt="{{ $myproduk->nama }}" src="{{ product_image_url($myproduk->gambar1,'medium') }}">
                                                        <span class="hidden-sm hidden-xs">
                                                            @if(!empty($myproduk->gambar2))
                                                            <img class="img-responsive" alt="{{ $myproduk->nama }}" src="{{ product_image_url($myproduk->gambar2,'medium') }}">
                                                            @elseif(!empty($myproduk->gambar3))
                                                            <img class="img-responsive" alt="{{ $myproduk->nama }}" src="{{ product_image_url($myproduk->gambar3,'medium') }}">
                                                            @elseif(!empty($myproduk->gambar4))
                                                            <img class="img-responsive" alt="{{ $myproduk->nama }}" src="{{ product_image_url($myproduk->gambar4,'medium') }}">
                                                            @endif
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="proContent">
                                                    <h5 class="proName">
                                                        <a href="{{ product_url($myproduk) }}">{{ short_description($myproduk->nama, 25) }}</a>
                                                    </h5>
                                                    <div class="proPrice">
                                                        <div class="priceProduct priceSale">{{ price($myproduk->hargaJual) }}</div>
                                                    </div>
                                                    <div class="proButton mb20">
                                                        <a class="btn btnAddToCart" href="{{ product_url($myproduk) }}">
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
</section>