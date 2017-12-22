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
                            <form class="sidebar-search">
                                <input type="text" placeholder="Type & Hit Enter..." class="form-control">
                            </form>
                        </div>
                    </div>


                </aside>                    
                <!-- Blog Sidebar Starts -->

                <section class="col-sm-8 col-md-8 col-md-offset-1">
                    @foreach(list_testimonial() as $testi)
                    <article class="block-inline post-wrap">
                        <div class="customerAvatar">
                            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/avatar_customer.jpg') }}">
                        </div>
                        <blockquote>
                            <p>{{ trim($testi->isi) }}</p>
                            <h2 title="Source Title" class="title-2">{{ $testi->nama }}</h2>
                        </blockquote>
                    </article>
                    @endforeach
                    {{ list_testimonial()->links() }}
                </section>
            </div>


        </div>
        <!-- / Blog Post Ends -->
    </section>

</article>