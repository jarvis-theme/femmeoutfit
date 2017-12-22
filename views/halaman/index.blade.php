<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay bg-img-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">{{ ucwords($data->judul) }}</h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> {{ ucwords($data->judul) }} </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space about-us">
        <!-- About Us Starts -->
        <div class="container">
            <div class="block-inline about-content">
                <div class="title-wrap">
                    <h2 class="section-title title-bg-1"> {{ ucwords($data->judul) }} </h2>
                    <p class="sub-title"> </p>
                </div>
                {{ $data->isi }}
            </div>

        </div>
        <!-- / About Us Ends -->
    </section>

</article>