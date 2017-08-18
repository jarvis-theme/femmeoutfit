<section id="bingoBreadcrumbs">
    <div id="section-bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
            <nav class="bingoBreadcrumbWrap">
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                            <span itemprop="name">{{ $produk->nama }}</span>
                        </span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="pageContent">
    <div class="container">
        <div id="section-bingo-template-product">
            <div class="productBox" itemscope itemtype="http://schema.org/Product">
                <meta itemprop="url" content="{{ product_url($produk) }}">
                <meta itemprop="image" content="{{ product_image_url($produk->gambar1) }}">
                <div class="proBoxPrimary">
                    <div class="row">
                        <div class="proBoxImage col-xs-12 col-sm-12 col-md-5">
                            <div class="proFeaturedImage">
                                <img id="ProductPhotoImg" data-zoom-enable="true" class="img-responsive" src="{{ product_image_url($produk->gambar1,'large') }}" alt="{{ $produk->nama }}" data-zoom-image="{{ product_image_url($produk->gambar1,'large') }}" />
                            </div>
                            
                            <div id="productThumbs" class="proThumbnails">
                                <div class="owl-thumblist">
                                    <div class="owl-carousel">
                                        @if($produk->gambar1 != '')
                                        <div class="thumbItem">
                                            <a href="javascript:void(0)" data-imageid="{{ $produk->id }}" data-image="{{ product_image_url($produk->gambar1,'thumb') }}" data-zoom-image="{{ product_image_url($produk->gambar1,'large') }}">
                                                <img class="img-responsive" src="{{ product_image_url($produk->gambar1,'large') }}" alt="{{ $produk->nama }}">
                                            </a>
                                        </div>
                                        @endif
                                        @if($produk->gambar2 != '')
                                        <div class="thumbItem">
                                            <a href="javascript:void(0)" data-imageid="{{ $produk->id }}" data-image="{{ product_image_url($produk->gambar2,'thumb') }}" data-zoom-image="{{ product_image_url($produk->gambar2,'large') }}">
                                                <img class="img-responsive" src="{{ product_image_url($produk->gambar2,'large') }}" alt="{{ $produk->nama }}">
                                            </a>
                                        </div>
                                        @endif
                                        @if($produk->gambar3 != '')
                                        <div class="thumbItem">
                                            <a href="javascript:void(0)" data-imageid="{{ $produk->id }}" data-image="{{ product_image_url($produk->gambar3,'thumb') }}" data-zoom-image="{{ product_image_url($produk->gambar3,'large') }}">
                                                <img class="img-responsive" src="{{ product_image_url($produk->gambar3,'large') }}" alt="{{ $produk->nama }}">
                                            </a>
                                        </div>
                                        @endif
                                        @if($produk->gambar4 != '')
                                        <div class="thumbItem">
                                            <a href="javascript:void(0)" data-imageid="{{ $produk->id }}" data-image="{{ product_image_url($produk->gambar4,'thumb') }}" data-zoom-image="{{ product_image_url($produk->gambar4,'large') }}">
                                                <img class="img-responsive" src="{{ product_image_url($produk->gambar4,'large') }}" alt="{{ $produk->nama }}">
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proBoxInfo col-xs-12 col-sm-12 col-md-7">
                            <h1 itemprop="name">{{ $produk->nama }}</h1>
                            
                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="IDR">
                                <link itemprop="availability" href="http://schema.org/InStock">
                                <div class="proPrice clearfix">
                                    <span id="ProductPrice" class="priceProduct" itemprop="price">{{ price($produk->hargaJual) }}</span>
                                    @if($produk->hargaCoret != 0)
                                    <span id="ComparePrice" class="priceProduct priceCompare">{{ price($produk->hargaCoret) }}</span>
                                    @endif
                                </div>

                                <p class="proAttr productAvailability instock"><label>Availability</label>: {{ $produk->stok > 0 ? 'In stock' : 'Out of Stock' }}</p>
                                <p class="proAttr productVendor"><label>Vendor</label>: {{ !empty($produk->vendor) ? $produk->vendor : '-' }}</p>
                                    
                                <div class="proShortDescription rte" itemprop="description">
                                    {{ short_description($produk->deskripsi, 300) }}
                                </div>
                                
                                <form action="#" id="addorder" class="formAddToCart">
                                    @if($opsiproduk->count() > 0)
                                    <div class="proVariants clearfix">
                                        <div class="selector-wrapper">
                                            <label for="productSelect-option-0">Option</label>
                                            <select class="single-option-selector" data-option="option1" id="productSelect-option-0" name="opsiproduk">
                                                <option value="">-- Choose Option --</option>
                                                @foreach ($opsiproduk as $key => $opsi)
                                                <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':'' }} >
                                                    {{ ucwords($opsi->opsi1).($opsi->opsi2=='' ? '':' / '.ucwords($opsi->opsi2)).($opsi->opsi3=='' ? '':' / '.ucwords($opsi->opsi3)) }} - {{ price($opsi->harga) }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="proQuantity">
                                        <label for="Quantity" class="qtySelector" style="display: inline-block;">Quantity</label>
                                        <div class="bingoJsQty">
                                            <button type="button" class="bingoQtyAdjust bingoQtyAdjustMinus" data-id="" data-qty="0">
                                                <span class="txtFallback">−</span>
                                            </button>
                                            <input type="text" class="bingoQtyNum" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="qty" id="Quantity">
                                            <button type="button" class="bingoQtyAdjust bingoQtyAdjustPlus" data-id="" data-qty="11">
                                                <span class="txtFallback">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="proButton">
                                        <button type="submit" name="add" id="AddToCart" class="btn btnAddToCart">
                                            <span id="AddToCartText">Add to Cart</span>
                                        </button>
                                    </div>
                                </form>
                                
                                <div class="bingoProductSharing" style="clear: both;">
                                    <div class="productSharingTitle">Share:</div>
                                    <ul class="socialSharing list-unstyled">
                                        <li>
                                            <a class="btnSharing btnTwitter" href="javascript:void(0);" data-social="twitter">
                                                <i class="fa fa-twitter"></i> Tweet
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btnSharing btnFacebook" href="javascript:void(0);" data-social="facebook">
                                                <i class="fa fa-facebook"></i> Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btnSharing btnGooglePlus" href="javascript:void(0);" data-social="google-plus">
                                                <i class="fa fa-google-plus"></i> Google+
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btnSharing btnLinkedin" href="javascript:void(0);" data-social="linkedin">
                                                <i class="fa fa-linkedin"></i> Linkedin
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btnSharing btnPinterest" href="javascript:void(0);" data-social="pinterest">
                                                <i class="fa fa-pinterest-p"></i> Pinterest
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('.btnSharing').on('click', function(){
                                            type = $(this).attr('data-social');
                                            if (type.length)
                                            {
                                                switch(type)
                                                {
                                                    case 'twitter':
                                                        window.open('https://twitter.com/intent/tweet?text=Sed%20mollis%20est%20ac%20urna https://bingo-max.myshopify.com/products/sed-mollis-est-ac-urna', 'sharertwt', 'toolbar=0,status=0,width=640,height=445');
                                                        break;
                                                    case 'facebook':
                                                        window.open('https://www.facebook.com/sharer/sharer.php?u=https://bingo-max.myshopify.com/products/sed-mollis-est-ac-urna&p[images][0]=products/14_1.jpg', 'sharer', 'toolbar=0,status=0,width=660,height=445');
                                                        break;
                                                    case 'google-plus':
                                                        window.open('https://plus.google.com/share?url=https://bingo-max.myshopify.com/products/sed-mollis-est-ac-urna', 'sharer', 'toolbar=0,status=0,width=660,height=445');
                                                        break;
                                                    case 'linkedin':
                                                        window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=https://bingo-max.myshopify.com/products/sed-mollis-est-ac-urna&amp;title=Sed%20mollis%20est%20ac%20urna&amp;source=https://bingo-max.myshopify.com/products/sed-mollis-est-ac-urna', 'sharerpinterest', 'toolbar=0,status=0,width=660,height=445');
                                                        break;
                                                    case 'pinterest':
                                                        window.open('http://pinterest.com/pin/create/button/?url=https://bingo-max.myshopify.com/products/sed-mollis-est-ac-urna&amp;media=//cdn.shopify.com/s/files/1/2027/9309/products/14_1_large.jpg?v=1498034255', 'sharerpinterest', 'toolbar=0,status=0,width=660,height=445');
                                                        break;
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <section class="proDetailInfo">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#proTabs1" data-toggle="tab">Details</a></li>
                            <li><a href="#proTabs2" data-toggle="tab">Additional Information</a></li>
                            <li><a href="#proTabs3" data-toggle="tab">Reviews</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="proTabs1">
                                {{ $produk->deskripsi }}
                            </div>
                            <div class="tab-pane" id="proTabs2">
                                <p class="proAttr productAvailability instock"><label>Availability</label>: {{ $produk->stok > 0 ? 'In stock' : 'Out of Stock' }}</p>
                                <p class="proAttr productVendor"><label>Vendor</label>: {{ !empty($produk->vendor) ? $produk->vendor : '-' }}</p>
                                <p class="proAttr"><label>Barcode</label>: {{ !empty($produk->barcode) ? $produk->barcode : '-' }}</p>
                                <p class="proAttr"><label>Weight</label>: {{ !empty($produk->berat) ? $produk->berat.' gram' : '-' }}</p>
                            </div>
                            <div class="tab-pane" id="proTabs3">
                                {{ pluginComment(product_url($produk), @$produk) }}
                            </div>
                        </div>
                    </section>
                
                    @if(other_product($produk)->count() > 0)
                    <section class="proRelated">
                        <div id="relatedProducts" class="bingoProducts">
                            <h3 class="bingoHomeTitle">Related Products</h3>
                            <div class="bingoContent">
                                <div class="proOwlCarousel owlCarouselPlay">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-autoplay="false" 
                                        data-autospeed="12000" 
                                        data-speed="300" 
                                        data-columnone="4" 
                                        data-columntwo="4" 
                                        data-columnthree="3" 
                                        data-columnfour="2" 
                                        data-columnfive="1">
                                        @foreach(other_product($produk,4)  as $related)
                                        <div class="item">
                                            <div class="bingoProBlock">
                                                <div class="proHImage">
                                                    <a class="proFeaturedImage" href="{{ product_url($related) }}">
                                                        <img class="img-responsive" alt="{{ $related->nama }}" src="{{ product_image_url($related->gambar1,'medium') }}" />
                                                        <span class="hidden-sm hidden-xs">
                                                            @if(!empty($related->gambar2))
                                                            <img class="img-responsive" alt="{{ $related->nama }}" src="{{ product_image_url($related->gambar2,'medium') }}">
                                                            @elseif(!empty($related->gambar3))
                                                            <img class="img-responsive" alt="{{ $related->nama }}" src="{{ product_image_url($related->gambar3,'medium') }}">
                                                            @elseif(!empty($related->gambar4))
                                                            <img class="img-responsive" alt="{{ $related->nama }}" src="{{ product_image_url($related->gambar4,'medium') }}">
                                                            @endif
                                                        </span>
                                                    </a>
                                                    @if(is_outstok($related))
                                                    <span class="labelSale">Out of Stock</span>
                                                    @elseif(is_terlaris($related))
                                                    <span class="labelSale">Best</span>
                                                    @elseif(is_produkbaru($related))
                                                    <span class="labelSale">New</span>
                                                    @endif
                                                </div>
                                                <div class="proContent">
                                                    <h5 class="proName">
                                                        <a href="{{ product_url($related) }}">{{ short_description($related->nama, 25) }}</a>
                                                    </h5>
                                                    
                                                    <div class="proPrice">
                                                        <div class="priceProduct priceSale">{{ price($related->hargaJual) }}</div>
                                                        @if($related->hargaCoret!=0)
                                                        <div class="priceProduct priceCompare">{{ price($related->hargaCoret) }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="proButton">
                                                        <a class="btn btnAddToCart" href="{{ product_url($related) }}" title="View">
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
                    </section>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>