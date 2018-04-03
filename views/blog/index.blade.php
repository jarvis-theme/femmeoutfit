<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay bg-img-5">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">blog</h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> <a href="#"> blog </a></li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->
    <section class="wrapper sec-space blog-post blog-thumb">
        <!-- Blog Post Starts -->
        <div class="container">
            <div class="row">
                <!-- Blog Sidebar Starts -->                     
                <aside class="blog-sidebar col-sm-4 col-md-3">
                    <div class="widget-wrap"> 
                        <h2 class="widget-title"> search </h2>
                        <div class="widget-content">
                            <form class="sidebar-search" action="{{URL::to('search')}}" method="post">
                                <input name="search" type="text" placeholder="Type keyword..." class="form-control">
                            </form>
                        </div>
                    </div>
                    @if(list_blog_category()->count() > 0)
                    <div class="widget-wrap"> 
                        <h2 class="widget-title"> CATEGORIES </h2>
                        <div class="widget-content">
                            <ul class="category">

                                @foreach(list_blog_category() as $kat)
                                <li>
                                    <a href="{{ blog_category_url($kat) }}" title="{{ $kat->nama }}">{{ $kat->nama }}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    @endif

                    <!-- <div class="widget-wrap"> 
                        <h2 class="widget-title"> latest tweets </h2>
                        <div class="widget-content">
                            <div class="recent-tweets">
                                <p>free stock footage from <a href="#">@videvo acani</a> 
                                    <a href="#" class="red-color">http://t.co/L1mGsTovdZ</a>
                                </p> 
                                <p>  
                                    <a href="#">#filmmaking</a> <a href="#">#stock</a> <a href="#">#footage</a> <a href="#">#freebie</a> 
                                </p>
                                <small class="title-2">a day ago</small>
                            </div>
                            <div class="recent-tweets">
                                <p>                                            
                                    Installation with one clik so easy
                                    <a href="#" class="red-color"> http://t.co/nvpUXOWRCp </a> <a href="#">@YouTube</a>
                                </p> 

                                <small class="title-2"> two day ago</small>
                            </div>
                            <p> <a href="#" class="title-2 view-all">view all tweets <span class="arrow_right"></span> </a> </p>
                        </div>
                    </div> -->

                    @if(recentBlog()->count() > 0)
                        <div class="widget-wrap"> 
                            <h2 class="widget-title"> recent post </h2>
                            <div class="widget-content recent-blog">
                                @foreach(recentBlog() as $artikel)
                                    <div class="recent-wrap">
                                        <div class="recent">
                                            <div class="post-title"> <a href="{{ blog_url($artikel) }}">{{ short_description($artikel->judul, 40) }}</a> </div>
                                            <div class="post-meta"> <a href="{{ blog_url($artikel) }}"> 14th, Nov, 2017 </a> </div>                                                   
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    

                    <!-- <div class="widget-wrap"> 
                        <h2 class="widget-title"> popular tags </h2>
                        <div class="widget-content tag-cloud">
                            <a href="#" title=""> Amazing</a>
                            <a href="#" title="">Envato</a>
                            <a href="#" title="">Themes</a>
                            <a href="#" title="">Clean</a>
                            <a href="#" title=""> WordPress </a>
                        </div>
                    </div> -->

                </aside>                    
                <!-- Blog Sidebar Starts -->

                <section class="col-sm-8 col-md-8 col-md-offset-1">
                    @if(list_blog(null,@$blog_category)->count() > 0)
                        @foreach(list_blog(null,@$blog_category) as $blog)
                            <article class="block-inline post-wrap">
                                <div class="row">
                                    @if((imgString($blog->isi)))
                                        <div class="col-sm-12 col-md-6">
                                            <div class="post-media">
                                                <a href="{{ blog_url($blog) }}"> 
                                                <img src="{{ imgString($blog->isi) }}" alt="{{ $blog->judul }}"> </a>
                                            </div>
                                        </div>
                                    @endif
                                    @if((imgString($blog->isi)))
                                    <div class="col-sm-12 col-md-6">
                                    @else
                                    <div class="col-sm-12 col-md-12">
                                    @endif
                                        <div class="post-header">
                                            <h2 class="post-title">
                                                <a href="{{ blog_url($blog) }}"> {{ $blog->judul }} </a>
                                            </h2>
                                            <ul class="list-inline post-meta">
                                                <li> {{ date("M d, Y", strtotime($blog->created_at)) }} </li> 
                                                <li> by <a href="#"> Admin </a> </li> 
                                                <li> in <a href="#"> {{@$blog->kategori->nama}} </a> </li>
                                            </ul>
                                        </div>
                                        <div class="post-body">
                                            {{ short_description($blog->isi,300) }}
                                        </div>
                                        <br>
                                        <div class="post-footer">
                                            <a class="title-2 link" href="{{ blog_url($blog) }}"> read more <i class="arrow_right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div class="block-inline pagination-wrap text-center">
                            {{ list_blog(1,@$blog_category)->links() }}
                        </div>
                    @else
                        <p>Blog not found.</p>
                    @endif
                </section>
            </div>


        </div>
        <!-- / Blog Post Ends -->
    </section>
    

</article>
