<div id="section-bingo-header">
    <header id="bingoHeader" class="bingoHeader headerMobileFixed">
        <section class="headerWrap">
            <div id="bingoHeaderMain">
                <div class="container">
                    <div class="headerContent">
                        <div class="headerContentWrapper">
                            <div class="row">
                                <div class="bingoHeaderLeft col-xs-12 col-sm-2 col-md-2">
                                    <h1 class="bingoLogo">
                                        <a href="/" itemprop="url" class="bingoLogoLink">
                                            {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive', 'itemprop'=>'logo', 'srcset'=>logo_image_url(), 'style'=>'max-height: 75px;margin:-20px;')) }}
                                        </a>
                                    </h1>
                                </div>
                                <div class="bingoHeaderCenter col-xs-3 col-sm-4 col-md-7">
                                    <div class="bingoHeaderMenu">
                                        <div id="bingoMegamenu" class="bingoMegamenu">
                                            <nav class="containerMenu">
                                                <div class="menuBtnMobile hidden-lg hidden-md">
                                                    <div id="btnMenuMobile" class="btnMenuMobile">
                                                        <i class="icofont icofont-navigation-menu"></i>
                                                    </div>
                                                </div>
                                                @if(count(list_category()) > 0)
                                                <ul class="nav hidden-xs hidden-sm">
                                                    <li><a href="/">Home</a></li>
                                                    @foreach(list_category () as $key=>$menu)
                                                        @if($menu->parent=='0')
                                                        <li class="hasMenuDropdown">
                                                            <a href="{{ category_url($menu) }}">{{ ucwords($menu->nama) }}</a>
                                                            @if($menu->anak->count()>0)
                                                            <ul class="menuDropdown">
                                                                @foreach($menu->anak as $key => $submenu)
                                                                <li class="{{ $submenu->anak->count()>0 ? 'hasMenuDropdown' : ''}}">
                                                                    <a href="{{ category_url($submenu) }}">{{ ucwords($submenu->nama) }}</a>
                                                                    @if($submenu->anak->count() > 0)
                                                                    <ul class="menuDropdown">
                                                                        @foreach($submenu->anak as $submenu2)
                                                                        <li>
                                                                            <a href="{{ category_url($submenu2) }}">{{ ucwords($submenu2->nama) }}</a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                    @endif
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </nav>
                                        </div>
                                        <div id="bingoMenuMobile" class="menuMobileContainer hidden-md hidden-lg">
                                            <div class="memoHeader">
                                                <span>Menu Mobile</span>
                                                <div class="close btnMenuClose"><span>×</span></div>
                                            </div>
                                            <ul class="nav memoNav">
                                                <li>
                                                    <a href="/">Home</a>
                                                </li>
                                                @foreach(list_category() as $key=>$mobile_menu)
                                                    @if($mobile_menu->parent=='0')
                                                    <li class="{{$mobile_menu->anak->count()>0 ? 'hasMemoDropdown' : ''}}">
                                                        <a href="{{ category_url($mobile_menu) }}">{{ ucwords($mobile_menu->nama) }}</a>
                                                        @if($mobile_menu->anak->count()>0)
                                                        <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown12"><i class="fa fa-angle-down"></i></span>
                                                        <ul id="memoDropdown12" class="memoDropdown collapse">
                                                            @foreach($mobile_menu->anak as $key=>$submenu_mobile)
                                                            <li class="{{ $submenu_mobile->anak->count()>0 ? 'hasMemoDropdown' : ''}}">
                                                                <a href="{{category_url($submenu_mobile)}}">{{ ucwords($submenu_mobile->nama) }}</a>
                                                                @if($submenu_mobile->anak->count() > 0)
                                                                <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown222"><i class="fa fa-angle-down"></i></span>
                                                                <ul id="memoDropdown222" class="memoDropdown collapse">
                                                                    @foreach($submenu_mobile->anak as $submenu_mobile2)
                                                                    <li>
                                                                        <a href="{{ category_url($submenu_mobile2) }}">{{ ucwords($submenu_mobile2->nama) }}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                                @endif
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                        @endif
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="menuMobileOverlay hidden-md hidden-lg"></div>
                                    </div>
                                </div>
                                <div class="bingoHeaderRight col-xs-9 col-sm-6 col-md-3">
                                    <div class="bingoSearchTop">
                                        <span class="bingoSearchIcon">
                                            <i class="icofont icofont-search"></i>
                                        </span>
                                        <span class="searchClose"></span>
                                        <div class="searchBoxTop">
                                            <div class="seachBoxContainer">
                                                <div class="container">
                                                    <span class="searchOverLayer"></span>
                                                    <form id="bingoSearchbox" class="formSearch" action="{{ url('search') }}" method="post">
                                                        <input class="bingoSearch form-control" type="search" name="search" value="" placeholder="Search our store" autocomplete="off" required>
                                                        <button id="bingoSearchButton" class="btn btnbingoSearch" type="submit">
                                                            <span><i class="fa fa-search"></i></span>
                                                            <span class="btnSearchText">Search</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bingoTopLinks">
                                        <div class="topLinksTitle" data-toggle="dropdown">
                                            <i class="icofont icofont-ui-user"></i>
                                            <span>Menu Top</span>
                                        </div>
                                        <ul class="dropdown-menu">
                                            @if(is_login())
                                            <li><a href="{{ url('member') }}">History Order</a></li>
                                            <li><a href="{{ url('member/profile/edit') }}">Edit Profile</a></li>
                                            <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                            <li>{{HTML::link('logout', 'Logout')}}</li>
                                            @else
                                            <li><a href="{{ url('member') }}" id="customer_login_link">Login</a></li>
                                            <li><a href="{{ url('member/create') }}" id="customer_register_link">Register</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="bingoCartTop" id="shoppingcartplace">
                                        {{ shopping_cart() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
</div>