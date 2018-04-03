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
                        <form method="post" action="{{ url('member') }}" class="register-form row  space-top-15" novalidate>
                            <div class="form-group col-md-6">
                                <input name="nama" value="{{ Input::old('nama') }}" required="" type="text" data-original-title="Login" class="form-control name input-your-name" placeholder="Name" name="cf_name" value="" data-toggle="tooltip" data-placement="bottom" title="Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                {{ Form::select('negara', array('' => '-- Select Country --') + $negara, Input::old("negara"), array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"form-control website input-website")) }}
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" value="{{ Input::old('email') }}" required="" type="email" data-original-title="Email is required" class="form-control email input-email" placeholder="Email Address" name="cf_email" value="" data-toggle="tooltip" data-placement="bottom" title="Your Email Address">
                            </div>  
                            <div class="form-group col-md-6">
                                {{ Form::select('provinsi', array('' => '-- Select Province --') + $provinsi, Input::old("provinsi"), array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"form-control website input-website")) }}
                            </div>  
                            <div class="form-group col-md-6">
                                <input name="telp" value="{{ Input::old('telp') }}" type="text" class="form-control website input-website" placeholder="Phone" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Your Phone">
                            </div>  
                            <div class="form-group col-md-6">
                                {{ Form::select('kota', array('' => '-- Select City --') + $kota, Input::old("kota"), array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"form-control website input-website")) }}
                            </div> 
                            <div class="form-group col-md-6">
                                <input name="password" required="" type="password" class="form-control website input-website" placeholder="Password" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="password_confirmation" required="" type="password" class="form-control website input-website" placeholder="Re - Password" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Password">
                            </div>  
                            <div class="form-group col-md-6">
                                <textarea title="Your Address" style="height:130px" class="form-control website input-website" rows="7" name="alamat" required placeholder="Address">{{ Input::old("alamat") }}</textarea>
                            </div> 
                            <div class="form-group col-md-6">
                                <input name="kodepos" value="{{ Input::old('kodepos') }}" required="" type="text" class="form-control website input-website" placeholder="Poscode" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Poscode">
                            </div>  
                            <div class="form-group col-md-3">
                                <div class="input-group-addon" style="padding: 0;">
                                    {{ HTML::image(Captcha::img(), 'Captcha image') }}
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" name="captcha" class="form-control website input-website" placeholder="Captcha" required>
                            </div> 
                            <div class="form-group col-md-12">
                                <label class="radio-inline title-2"> <input name="readme" value="1" type="checkbox" checked class="form-control"> <span> I have read and agree to the <a href="{{ url('service') }}" target="_blank">Privacy Policy</a><br> </span>  </label>
                            </div>
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