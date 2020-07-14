<header>
<!-- tt-mobile menu -->
<nav class="panel-menu mobile-main-menu">
<ul>

    <li>
        <a href="{{ route('welcome') }}">HOME</a>
    </li>
{{--    all categories--}}
    @foreach($categories as $category)
    <li>
        <a href="">{{$category->name}}</a>
        <ul>
            @foreach($subcategories as $subcategory)
                @if ($category->id == $subcategory->category_id)
                <li>
                      <a href=""> {{$subcategory->name}}</a>
                </li>
                @endif
            @endforeach
        </ul>
    </li>
    @endforeach
    <li><a href="">All Products</a></li>


</ul>
<div class="mm-navbtn-names">
<div class="mm-closebtn">Close</div>
<div class="mm-backbtn">Back</div>
</div>
</nav>
<!-- tt-mobile-header -->
<div class="tt-mobile-header">
<div class="container-fluid">
<div class="tt-header-row">
    <div class="tt-mobile-parent-menu">
        <div class="tt-menu-toggle">
            <i class="icon-03"></i>
        </div>
    </div>
    <!-- search -->
    <div class="tt-mobile-parent-search tt-parent-box"></div>
    <!-- /search -->
    <!-- cart -->
    <div class="tt-mobile-parent-cart tt-parent-box"></div>
    <!-- /cart -->
    <!-- account -->
    <div class="tt-mobile-parent-account tt-parent-box"></div>
    <!-- /account -->
    <!-- currency -->
    <div class="tt-mobile-parent-multi tt-parent-box"></div>
    <!-- /currency -->
</div>
</div>
<div class="container-fluid tt-top-line">
<div class="row">
    <div class="tt-logo-container">
        <!-- mobile logo -->
        <a class="tt-logo tt-logo-alignment" href="{{route('welcome')}}"><img src="{{ asset('/resource/logo') }}/logo.png" alt=""></a>
        <!-- /mobile logo -->
    </div>
</div>
</div>
</div>


<!-- tt-desktop-header -->
<div class="tt-desktop-header">
<div class="container">
<div class="tt-header-holder">
    <div class="tt-col-obj tt-obj-logo">
        <!-- logo -->
        <a class="tt-logo tt-logo-alignment" href="{{ route('welcome') }}">
            <img src="{{ asset('/resource/logo') }}/logo.png" alt="" style="max-height: 70px;width:50px"></a>
        <!-- /logo -->
    </div>
    <div class="tt-col-obj tt-obj-menu">
        <!-- tt-menu -->
        <div class="tt-desctop-parent-menu tt-parent-box">
            <div class="tt-desctop-menu">
                <nav>
                    <ul>
                        <li class="dropdown tt-megamenu-col-02 {{Request::is('/') ? 'selected':''}}">
                            <a href="{{ route('welcome') }}">HOME</a>
                        </li>

                            <li class="dropdown tt-megamenu-col-02 {{Request::is('about-us') ? 'selected': '' }}">
                                <a href="{{route('about_us')}}">All Categories</a>

                                <div class="dropdown-menu">
                                    <div class="row tt-col-list">
                                        @foreach($categories as $category)
                                        <div class="col">
                                            <h6 class="tt-title-submenu">
                                                <a href="">{{$category->name}}</a>
                                            </h6>
                                            @foreach($subcategories as $subcategory)
                                                @if ($category->id == $subcategory->category_id)

                                                <ul class="tt-megamenu-submenu">

                                                    <li>
                                                        <a href="">{{$subcategory->name}}</a>
                                                    </li>

                                                </ul>

                                                @endif
                                            @endforeach
                                        </div>
                                        @endforeach
                                </div>


                            </li>



                        <li class="dropdown">
                            <a href="{{route('product.show')}}">All Products</a>
                        </li>

                        <li class="dropdown tt-megamenu-col-02 {{Request::is('about-us') ? 'selected': '' }}">
                            <a href="{{route('about_us')}}">About Us </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /tt-menu -->
    </div>
    <div class="tt-col-obj tt-obj-options obj-move-right">
        <!-- tt-search -->
        <div class="tt-desctop-parent-search tt-parent-box">
            <div class="tt-search tt-dropdown-obj">
                <button class="tt-dropdown-toggle" data-tooltip="Search" data-tposition="bottom">
                    <i class="icon-f-85"></i>
                </button>
                <div class="tt-dropdown-menu">
                    <div class="container">
                        <form>
                            <div class="tt-col">
                                <input type="text" class="tt-search-input" placeholder="Search Products...">
                                <button class="tt-btn-search" type="submit"></button>
                            </div>
                            <div class="tt-col">
                                <button class="tt-btn-close icon-g-80"></button>
                            </div>
                            <div class="tt-info-text">
                                What are you Looking for?
                            </div>
                            <div class="search-results">
                                <ul>
                                    <li>
                                        <a href="product.html">
                                            <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-03.jpg" alt=""></div>
                                            <div class="tt-description">
                                                <div class="tt-title">Flared Shift Bag</div>
                                                <div class="tt-price">
                                                    <span class="new-price">$14</span>
                                                    <span class="old-price">$24</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <button type="button" class="tt-view-all">View all products</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tt-search -->
        <!-- tt-cart -->
        <div class="tt-desctop-parent-cart tt-parent-box">
            <div class="tt-cart tt-dropdown-obj">
                <a href="{{route('cart.index')}}" class="tt-dropdown-toggle" data-tooltip="Cart" data-tposition="bottom">
                    <i class="icon-f-39"></i>
                    <span class="tt-badge-cart">
                        @auth
                        {{Cart::session(auth()->id())->getContent()->count()}}
                        @else
                        0
                        @endauth
                    </span>
                </a>

            </div>
        </div>
        <!-- /tt-cart -->
        <!-- tt-account -->
        <div class="tt-desctop-parent-account tt-parent-box">
            <div class="tt-account tt-dropdown-obj">
                <button class="tt-dropdown-toggle"  data-tooltip="My Account" data-tposition="bottom"><i class="icon-f-94"></i></button>
                <div class="tt-dropdown-menu">
                    <div class="tt-mobile-add">
                        <button class="tt-close">Close</button>
                    </div>
                    <div class="tt-dropdown-inner">
                        <ul>
                            @auth
                                <li><a href="{{url('/admin')}}"><i class="icon-f-77"></i>Sign Out</a></li>
                            @endauth
                            <li><a href="{{route('login')}}"><i class="icon-f-94"></i>Login</a></li>
                            <li><a href=""><i class="icon-n-072"></i>Wishlist</a></li>
                            <li><a href="compare.html"><i class="icon-n-08"></i>Compare</a></li>
                            <li><a href="page404.html"><i class="icon-f-68"></i>Check Out</a></li>
                            <li><a href="login.html"><i class="icon-f-76"></i>Sign In</a></li>

                            <li><a href="create-account.html"><i class="icon-f-94"></i>Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tt-account -->
        <!-- tt-langue and tt-currency -->
        <div class="tt-desctop-parent-multi tt-parent-box">
            <div class="tt-multi-obj tt-dropdown-obj">
                <button class="tt-dropdown-toggle" data-tooltip="Settings" data-tposition="bottom"><i class="icon-f-79"></i></button>
                <div class="tt-dropdown-menu">
                    <div class="tt-mobile-add">
                        <button class="tt-close">Close</button>
                    </div>
                    <div class="tt-dropdown-inner">
                        <ul>
                            <li class="active"><a href="#">English</a></li>
                            <li><a href="#">Deutsch</a></li>
                            <li><a href="#">Español</a></li>
                            <li><a href="#">Français</a></li>
                        </ul>
                        <ul>
                            <li class="active"><a href="#"><i class="icon-h-59"></i>USD - US Dollar</a></li>
                            <li><a href="#"><i class="icon-h-60"></i>EUR - Euro</a></li>
                            <li><a href="#"><i class="icon-h-61"></i>GBP - British Pound Sterling</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tt-langue and tt-currency -->
    </div>
</div>
</div>
</div>
<!-- stuck nav -->
<div class="tt-stuck-nav">
<div class="container">
<div class="tt-header-row ">
    <div class="tt-col-obj tt-obj-logo">
        <!-- logo -->
        <a class="tt-logo tt-logo-alignment" href="{{ route('welcome') }}">
            <img src="{{ asset('/resource/logo') }}/logo.png" alt="" style="max-height: 70px;width:50px"></a>
        <!-- /logo -->
    </div>
    <div class="tt-stuck-parent-menu"></div>
    <div class="tt-stuck-parent-search tt-parent-box"></div>
    <div class="tt-stuck-parent-cart tt-parent-box"></div>
    <div class="tt-stuck-parent-account tt-parent-box"></div>
    <div class="tt-stuck-parent-multi tt-parent-box"></div>
</div>
</div>
</div>
</header>
