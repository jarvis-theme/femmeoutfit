<section id="bingoBreadcrumbs">
    <div id="bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
	       <nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>Search</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">Search</span></span>
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
                        <div class="collBoxProducts">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>