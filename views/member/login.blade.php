 <article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">login / register </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="#"> Home </a> login / register  </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space login-register">                  
        <div class="container">
            <!-- Login Starts -->
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="login-wrap">
                        <h2 class="section-title no-margin size-18"> log in your account </h2>
                        <p class="space-30 gray-color">Log in to your account to discovery all great features in this template.</p>
                        <form method="post" action="{{ url('member/login') }}" class="login-form row space-top-15" >
                            <div class="form-group col-md-12">
                                <input name="email" value="{{ Input::old('email') }}" required="" type="text" data-original-title="Name is required" class="form-control name input-your-name" placeholder="Email Address" name="cf_name" value="" data-toggle="tooltip" data-placement="bottom" title="">
                            </div>
                            <div class="form-group col-md-12">
                                <input name="password" required="" type="password" data-original-title="Email is required" class="form-control email input-email" placeholder="Password" name="cf_email" value="" data-toggle="tooltip" data-placement="bottom" title="">
                            </div>
                            <div class="form-group col-md-12"> 
                                <!-- <label class="checkbox-inline size-13"><input type="checkbox" value=""> <span> Keep me logged in </span>  </label>                                         -->
                                <label class="forgot-pw size-13"> <a href="{{URL::to('member/forget-password')}}" class="blue-color pw"> Forgot your password ? </a> </label>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="theme-btn btn submit-btn"> <b> Login </b> </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-8 col-sm-7">
                    <div class="register-wrap">
                        <h2 class="section-title no-margin size-18"> Don't have an Account? Register Now </h2>
                        <p class="space-30 gray-color">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        <form method="get" action="{{ url('register') }}" class="register-form row  space-top-15">
                            <div class="form-group col-md-12">
                                <button type="submit" class="theme-btn-1 larg-btn btn submit-btn"> <b> register now </b> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- / Login Ends -->                       
        </div>

    </section>

</article>