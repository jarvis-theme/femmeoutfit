<header class="header-two"> 
    <div class="container">
        <div class="top-bar">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="list-inline top-nav" style="text-align:left">

                        @if(is_login())
                        <li><a href="{{ url('member/profile/edit') }}">Hi, {{ucfirst(user()->nama)}}</a></li>
                        <li><a href="{{ url('member') }}">My Order</a></li>
                        <li>{{HTML::link('logout', 'Logout')}}</li>
                        @else
                        <li><a href="{{ url('member') }}" id="customer_login_link"><i class="icon_lock-open"></i> Log In </a></li>
                        <li><a href="{{ url('member/create') }}" id="customer_register_link">Sign In</a></li>
                        @endif
                        <li>
                            <form action="#" class="language">
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker" data-width="100%" data-toggle="tooltip" >                                              
                                        <option data-content="<span> Bahasa </span>"> Bahasa </option>                                           
                                        <option data-content="<span> English </span>"> English </option>                                               
                                    </select>
                                </div>                                                   
                            </form>    
                        </li>
                        <li>
                            <form action="#" class="currency">
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker" data-width="100%" data-toggle="tooltip">
                                        <option>IDR</option>
                                        <option>USD</option>
                                    </select>
                                </div>                                                   
                            </form>  
                        </li>
                        <!-- <li> 
                            <span> <i class="icon_phone"></i></span> 
                            <span> Call Us:<b> {{$kontak->hp}} </b> </span> 
                        </li>
                        <li> 
                            <span> <i class="icon_mail"></i> Email: </span> 
                            <a href="#"> {{$kontak->email}} </a> 
                        </li> -->
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="list-inline top-nav">
                        <li>
                            <div class="search-form-wrap">
                                <span class="icon-magnifier search-icon"></span>
                                <!-- <form class="search-form">
                                    <input class="search" type="text" placeholder="Type & Hit Enter" />
                                    <span class="icon_close search-close"></span>
                                </form> -->
                            </div> 
                        </li>
                        <li>
                            <div class="header-cart-wrap" id="shoppingcartplace">
                                {{ shopping_cart() }}
                            </div>   
                        </li>
                    </ul>

                    
                </div> 
            </div>
        </div>
    </div>

    <div class="header-wrap ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 logo-wrap" style="text-align:center">
                    <a href="/">
                        {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive', 'style'=>'display: inherit;', 'srcset'=>logo_image_url())) }}
                    </a>
                    <!-- <a class="logo" href="index.html"> <img src="assets/img/common/main-logo.png" alt="logo" title="Logo"> </a> -->
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 menu-top">       
                    <div class="top-elements">
                        <span class="nav-trigger open icon_menu"></span>
                        <div class="search-form-wrap">
                            <span class="icon-magnifier search-icon"></span>
                            <form action="{{URL::to('search')}}" method="post" class="search-form">
                                <input class="search" type="text" name="search" placeholder="Type & Hit Enter" />
                                <span class="icon_close search-close"></span>
                            </form>
                        </div>
                        <div class="header-cart-wrap" id="shoppingcartplace">
                            {{ shopping_cart() }}
                        </div>                     
                    </div>

                    <div class="menu-bar"> 
                        <span class="nav-trigger close-icon icon_close"></span>
                        <div id="primary-navigation">  
                                 
                            <ul class="primary-navbar font-2">
                            @foreach(main_menu()->link as $key=>$link)
                                <li class="dropdown mega-dropdown">
                                    <a {{$key==1?'aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle"':''}} href="{{menu_url($link)}}">
                                        {{$link->nama}}
                                    </a>
                                    @if($key==1)
                                    <div class="dropdown-menu mega-dropdown-menu">
                                        @foreach(list_category() as $key=>$menu)
                                            @if($menu->parent=='0')
                                            <div class="col-sm-12 col-lg-2 menu-block">
                                                <div class="sub-list"> 
                                                    <h2 class="title-2"> <a href="{{ category_url($menu) }}">{{ ucwords($menu->nama) }} </a></h2>
                                                    <ul class="menuDropdown">
                                                    @foreach($menu->anak as $key => $submenu)
                                                        <li>
                                                            <a href="{{ category_url($submenu) }}">{{ ucwords($submenu->nama) }}</a>
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    @endif
                                </li>
                            @endforeach
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>