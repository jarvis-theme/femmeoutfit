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
                                    <span class="price"> <b>{{ price($best) }}</b><br> <del>{{ price($best->hargaCoret,null,1) }}</del> </span>
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
                            Showing {{$hasilpro->count()}} to {{Input::get('show')!=""?Input::get('show'):$hasilpro->count()}} of {{$hasilpro->count()}} total
                        </div>
                        
                        <div class="tabs-btns"> 
                            <ul class="tabination view-tabs">
                                <li> View </li>
                                <li class="active">
                                    <a href="#list-view" data-toggle="tab">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </li>
                            </ul>                                       
                        </div>
                        
                    </div>     

                    <div class="tab-content">

                        <!-- Product List View Starts -->
                        <div id="list-view" class="tab-pane fade active in" role="tabpanel">                                     
                            
                            @if(count($hasilpro) > 0)
                                @foreach($hasilpro as $produks)
                                <div class="row listview-wrap">
                        
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="#" class="img"> 
                                                    <img alt="{{ $produks->nama }}" src="{{ product_image_url($produks->gambar1) }}">
                                                    <span class="product-hover">
                                                        <img alt="{{ $produks->nama }}" src="{{ product_image_url($produks->gambar2) }}">
                                                    </span>
                                                </a>
                                                <!--div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-content">
                                                <h2 class="product-title"> <a href="#">{{ $produks->nama }}</a> </h2>
                                                <span class="price"> <b>{{ price($produks->hargaJual) }}</b> <del>{{ $produks->hargaCoret ? price($produks->hargaCoret):'' }}</del> </span>
                                                <!--<div class="rating">                                                              
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>                                           
                                                    <span class="star active"></span>
                                                    <span class="star"></span>                                                
                                                </div>-->
                                                <div class="discription">
                                                    <p>{{ $produks->dmt }}</p>
                                                </div>
                                                <div class="product-links"> 
                                                    <a href="{{ product_url($produks) }}" class="add-to-cart"> <span> View </span> <i class="icon_cart_alt"></i> </a>
                                                    <!--<a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                @endforeach
                            @endif
                            
                            @if(count($hasilhal) > 0 || count($hasilblog) > 0)
                            <div class="bingoFlexRow flexRow">
                                @foreach($hasilblog as $blog)
                                <div class="col-sp-12 col-xs-6 col-md-4">
                                    <div class="blogArticle mt20">
                                        @if((imgString($blog->isi)))
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
                            
                            <div class="col-sm-12 col-lg-12">
                                <div class="block-inline pagination-wrap text-center">
                                    {{ $hasilpro->links() }}
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