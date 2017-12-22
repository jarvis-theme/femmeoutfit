<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay bg-img-5">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">{{ $detailblog->judul }}</h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> <a href="{{ url('blog') }}"> blog </a> {{ $detailblog->judul }} </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space blog-single">
        <!-- Blog Post Starts -->
        <div class="container">
            <div class="row">
                <!-- Blog Sidebar Starts -->                     
                <aside class="blog-sidebar col-sm-4 col-md-3">
                    <div class="widget-wrap"> 
                        <h2 class="widget-title"> search </h2>
                        <div class="widget-content">
                            <form class="sidebar-search">
                                <input type="text" placeholder="Type & Hit Enter..." class="form-control">
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

                    <article class="block-inline">
                        <div class="single-post-wrap">
                            <div class="post-media">
                                <h1 class="title-1">{{ $detailblog->judul }}</h1>                                
                                <ul class="list-inline post-meta pt-20">
                                    <li> Posted at <a href="#"> {{ date("M d, Y", strtotime($blog->created_at)) }}7 </a> </li> 
                                    <li> by <a href="#"> Admin </a> </li> 
                                    <li> in <a href="#"> Print </a> </li>
                                </ul>
                            </div>                                      
                            <div class="post-body">
                                {{ $detailblog->isi }}
                            </div>
                            <hr class="divider">
                            <div class="post-footer">
                                <div class="tag-cloud">
                                    <span class="title-2">Tags:</span>
                                    {{ getTags('<a></a>',$detailblog->tags)}}                                     
                                </div>
                                <div class="social-media">
                                    <span class="title-2">Share:</span>
                                    <ul class="list-items">
                                        <li> <a class="social_facebook" href="#"></a> </li>
                                        <li> <a class="social_twitter" href="#"></a> </li>
                                        <li> <a class="social_pinterest" href="#"></a> </li>
                                        <li> <a class="social_instagram" href="#"></a> </li>
                                        <li> <a class="social_rss" href="#"></a> </li>
                                    </ul>
                                </div>                                           
                            </div>
                            <hr class="divider">
                            <div class="post-author row ptb-20">
                                <div class="col-md-3 col-sm-4 col-xs-3">
                                    <img src="assets/img/common/author-1.jpg" alt="">
                                </div>
                                <div class="col-md-9 col-sm-8 col-xs-9">
                                    <div class="author-info">
                                        <h2 class="title-2">daniel craff </h2>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, tum teveniet, 
                                            eligendi et nobis neque minus mollitia sit repudiandae adin repellendus recusandae blanditiis praesentium 
                                            vitae ab sint laboriois sam nisi reiciendis deleniti tenetur molestiae. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-2">
                        <div class="comment-form-wrap">
                            <h2 class="section-title"> leave a comment </h2>
                            {{ pluginComment(blog_url($detailblog), @$detailblog) }}
                        </div>
                    </article>


                    <div class="block-inline pt-50">
                        <div class="single-page-pagination font-2">
                            @if(prev_blog($detailblog))
                            <div class="prev"> <a href="{{ blog_url(prev_blog()) }}"> <i class="arrow_left"></i> Prev </a> </div>
                            @endif
                            @if(next_blog($detailblog))
                            <div class="next"> <a href="{{ blog_url(next_blog()) }}"> Next <i class="arrow_right"></i> </a> </div>
                            @endif
                        </div>
                    </div>
                </section>
            </div>


        </div>
        <!-- / Blog Post Ends -->
    </section>

</article>