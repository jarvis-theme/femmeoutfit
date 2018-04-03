<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay bg-img-5">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">Testimonial</h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> <a href="#"> Testimonial </a></li>                             
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
                        <h2 class="widget-title"> Write a Testimonial </h2>
                        <div class="widget-content">
                            <form class="sidebar-search" action="{{URL::to('testimoni')}}" method="post">
            					<label>Nama</label><br><input type="text" name="nama" class="form-control" required><br><br>
            					<label>Testimonial</label><br><textarea name="testimonial" class="form-control" required></textarea><br><br>
            					<input type="submit" style="float:right" class="btn small-btn theme-btn-1" value="Submit">
            					<br><br>
            				</form>
                        </div>
                    </div>


                </aside>                    
                <!-- Blog Sidebar Starts -->

                <section class="col-sm-8 col-md-8 col-md-offset-1">
                    @foreach(list_testimonial() as $testi)
                    <article class="block-inline post-wrap" style="border-bottom: none;padding-bottom: 0;">
                        <div class="customerAvatar">
                            
                        </div>
                        <blockquote>
                            <img style="width: 100px;float: left;margin-right: 20px;margin-top: 12px;" class="img-responsive" alt="breadcrumb" src="{{generate_image_url().$testi->gambar}}">
                            <p>{{ trim($testi->isi) }}</p>
                            <h2 title="Source Title" class="title-2" style="float: right;">{{ $testi->nama }}</h2>
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