<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg mask-overlay bg-img-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">Service & Policy</h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> Service & Policy </li>                             
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
                    <h2 class="section-title title-bg-1"> Term of Service </h2>
                    <p class="sub-title"> </p>
                </div>
                {{ $service->tos }}
                <hr class="divider-1" />
                <div class="title-wrap">
                    <h2 class="section-title title-bg-1"> Refund </h2>
                    <p class="sub-title"> </p>
                </div>
                {{ $service->refund }}
                <hr class="divider-1" />
                <div class="title-wrap">
                    <h2 class="section-title title-bg-1"> Privacy </h2>
                    <p class="sub-title"> </p>
                </div>
                {{ $service->privacy }}
            </div>

        </div>
        <!-- / About Us Ends -->
    </section>

</article>