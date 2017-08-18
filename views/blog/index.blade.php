<section id="bingoBreadcrumbs">
    <div id="section-bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
            <nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>Blog Listing</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">Blog Listing</span></span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="pageContent">
    <div class="container">
        <div class="templageBlogWrap">
            <div id="section-bingo-template-blog">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <div class="blogContainer">
                            <h1 class="bingoBlogTitle">Blog Listing</h1>
                            <div class="blogListArticle blogListTemplate">
                                <div class="blogArticle">
                                    @if(list_blog(null,@$blog_category)->count() > 0)
                                        @foreach(list_blog(null,@$blog_category) as $blog)
                                            @if(!empty(imgString($blog->isi)))
                                            <div class="articleImage">
                                                <a href="{{ blog_url($blog) }}">
                                                    <img class="img-responsive" src="{{ imgString($blog->isi) }}" alt="{{ $blog->judul }}">
                                                </a>
                                            </div>
                                            @endif
                                            <div class="articleMetaDate">
                                                <span class="metaDate">{{ date("M d, Y", strtotime($blog->created_at)) }}</span>
                                            </div>
                                            <h3><a href="{{ blog_url($blog) }}">{{ $blog->judul }}</a></h3>
                                            <div class="articleDesc">
                                                {{ short_description($blog->isi,300) }}
                                            </div>
                                            <div><a class="articleBtnMore" href="{{ blog_url($blog) }}">Read more</a></div>
                                            <br>
                                        @endforeach
                                        {{ list_blog(null,@$blog_category)->links() }}
                                    @else
                                        <p>Blog not found.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
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
                                                    <img src="{{ imgString($artikel->isi) }}" style="width: 70px;" />
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
                                <a href="{{ url($banner->url) }}">
                                    <img class="img-responsive" src="{{ banner_image_url($banner->gambar) }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        @if(list_blog_category()->count() > 0)
                        <div class="blogSidebar blogTags">
                            <h4 class="titleSidebar">Blog Category</h4>
                            <div class="bingoContent">
                                <ul class="blogTagsList list-inline">
                                    @foreach(list_blog_category() as $kat)
                                    <li>
                                        <a href="{{ blog_category_url($kat) }}" title="{{ $kat->nama }}">{{ $kat->nama }}</a>
                                    </li>
                                    @endforeach
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