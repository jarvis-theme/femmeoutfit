<section id="bingoBreadcrumbs">
    <div id="section-bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
            <nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>{{ $detailblog->judul }}</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="{{ url('blog') }}" title="Blog Listing" itemprop="item">
                            <span itemprop="name">Blog Listing</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">{{ $detailblog->judul }}</span></span>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="pageContent">
    <div class="container">
        <div class="templageArticleWrap">
            <div id="shopify-section-bingo-template-article" class="shopify-section"><div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <article class="articleItem" itemscope="" itemtype="http://schema.org/Article">
                        <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://google.com/article">
                        <meta itemprop="headline" content="Integer pharetra mattis libero et ornare">
                        <meta itemprop="author" content="Bingo Max Admin">
                        <meta itemprop="datePublished" content="23 May, 2017">
                        <meta itemprop="dateModified" content="23 May, 2017">
                        <div class="hidden" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="http://cdn.shopify.com/s/files/1/2027/9309/articles/max_bloglisting4.jpg?v=1495698785">
                            <meta itemprop="width" content="1170">
                            <meta itemprop="height" content="800">
                        </div>
                        <div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                            <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                                <meta itemprop="url" content="http://cdn.shopify.com/s/files/1/2027/9309/files/logo.png?14124462035515045251">
                            </div>
                            <meta itemprop="name" content="Bingo Max Admin">
                        </div>
                        <header class="articleHeader">
                            <h1 class="bingoArticleTitle">Integer pharetra mattis libero et ornare</h1>
                            <div class="articleMeta">Posted by <strong>Bingo Max Admin</strong> | <time datetime="{{ date('Y-m-d', strtotime($detailblog->created_at)) }}">{{ date("M d, Y", strtotime($detailblog->created_at)) }}</time></div>
                        </header>
                        @if(!empty(imgString($detailblog->isi)))
                        <div class="articleFeaturedImage">
                            <img class="img-responsive" src="{{ imgString($detailblog->isi) }}" alt="{{ $detailblog->isi }}" />
                        </div>
                        @endif
                        <div class="rte" itemprop="description">
                            {{ $detailblog->isi }}
                        </div>
                        <div class="articleTags">
                            <span>Tags:</span>
                            <ul class="blogTagsList list-inline" style="padding: 0; display: inline;">
                                {{ getTags('<li></li>,',$detailblog->tags) }} 
                            </ul>
                        </div>
                        <div class="articleButtonExtend clearfix">
                            @if(prev_blog($detailblog))
                            <div class="btnExtendLeft">
                                <a href="{{ blog_url(prev_blog()) }}">Older Post</a>
                            </div>
                            @endif
                            @if(next_blog($detailblog))
                            <div class="btnExtendRight">
                                <a href="{{ blog_url(next_blog()) }}">Newer Post</a>
                            </div>
                            @endif
                        </div>
                        <div>
                            {{ $fbscript }}
                            {{ fbcommentbox(blog_url($detailblog), '100%', '5', 'light') }}
                        </div>
                    </article>
                    </div>
                    <aside class="bingoSidebar bingoBlogSidebar col-xs-12 col-sm-4 col-md-3">
                        @if(recentBlog()->count() > 0)
                        <div class="blogSidebar">
                            <h4 class="titleSidebar">Recent Articles</h4>
                            <div class="bingoContent">
                                <ul class="listSidebarBlog list-unstyled">
                                    @foreach(recentBlog() as $artikel)
                                    <li>
                                        <div class="sidebarBoxArticle">
                                            @if(!empty(imgString($artikel->isi)))
                                            <div class="boxImage">
                                                <a href="{{ blog_url($artikel) }}" title="{{ short_description($artikel->judul, 40) }}">
                                                    <img class="img-responsive" src="{{ imgString($artikel->isi) }}" alt="{{ $artikel->isi }}" style="width: 70px;" />
                                                </a>
                                            </div>
                                            @endif
                                            <div class="boxContent">
                                                <a href="{{ blog_url($artikel) }}" title="{{ short_description($artikel->judul, 40) }}">{{ short_description($artikel->judul, 40) }}</a>
                                                <time datetime="{{ date('Y-m-d', strtotime($artikel->created_at)) }}">{{ date("M d, Y", strtotime($artikel->created_at)) }}</time>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        @if(vertical_banner()->count() > 0)
                        <div class="blogSidebar hidden-xs">
                            @foreach(vertical_banner() as $banner)
                            <div class="bingoBanner">
                                <a href="{{url($banner->url)}}">
                                    {{ HTML::image(banner_image_url($banner->gambar), 'Info Promo', array('class'=>'img-responsive')) }}
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        @if($detailblog->tags != "")
                        <div class="blogSidebar blogTags">
                            <h4 class="titleSidebar">Articles Tags</h4>
                            <div class="bingoContent">
                                <ul class="blogTagsList list-inline">
                                    {{ getTags('<li></li>',$detailblog->tags)}} 
                                </ul>
                            </div>
                        </div>
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>