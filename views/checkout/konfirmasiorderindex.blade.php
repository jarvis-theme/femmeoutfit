<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1"> My Order </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="/"> Home </a> Order Confirmation </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space my-account">                  
        <div class="container">
            <!-- My Account Starts -->
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="pageContact">
                        <!-- <h1 class="bingoContactTitle">Order Confirmation</h1> -->
                        <div class="pageContent">
                            <div class="formContactUs">
                                {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'contact-form'))}}
                                <!-- <form method="post" action="http://example.jstore.dev/konfirmasiorder" id="contact_form" class="contact-form" accept-charset="UTF-8"> -->
                                    <div class="formContent">
                                        <div class="form-group">
                                            <label for="ContactFormName" class="hidden-label">Order ID</label>
                                            <input type="text" id="ContactFormName" class="form-control" name="kodeorder" placeholder="Enter your Order ID" value="{{ Input::old('kodeorder') }}" required autofocus>
                                        </div>
                                        <div class="form-button">
                                            <button type="submit" class="btn small-btn theme-btn-1"> Find Order </button>  
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- / My Account Ends -->
        </div>

    </section>

</article>