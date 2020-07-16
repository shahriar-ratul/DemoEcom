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
        <a href="{{route('product.show.category',$category->id)}}">{{$category->name}}</a>
        <ul>
            @foreach($subcategories as $subcategory)
                @if ($category->id == $subcategory->category_id)
                <li>
                      <a href="{{route('product.show.subcategory',[$category->id,$subcategory->id])}}"> {{$subcategory->name}}</a>
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
                                <a href="{{route('product.show')}}">All Categories</a>

                                <div class="dropdown-menu">
                                    <div class="row tt-col-list">
                                        @foreach($categories as $category)
                                        <div class="col">
                                            <h6 class="tt-title-submenu">
                                                <a href="{{route('product.show.category',[$category->id])}}">{{$category->name}}</a>
                                            </h6>
                                            @foreach($subcategories as $subcategory)
                                                @if ($category->id == $subcategory->category_id)

                                                <ul class="tt-megamenu-submenu">

                                                    <li>
                                                        <a href="{{route('product.show.subcategory',[$category->id,$subcategory->id])}}">{{$subcategory->name}}</a>
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
                                @if(Auth::user()->role->id==1 || Auth::user()->role->id==2 || Auth::user()->role->id==3)
                                 <li><a href="{{url('/admin')}}"><i class="icon-f-77"></i>Admin</a></li>
                                @endif
                            <li><a href="{{route('user.profile.index')}}"><i class="icon-f-94"></i>My profile</a></li>
                            <li><a href="{{route('user.order.index')}}"><i class="icon-f-94"></i>My Order list</a></li>
                            <li><a href="{{route('login')}}"><i class="icon-f-94"></i>My Wish list</a></li>
                            <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="icon-f-94"></i>Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endauth

                            @guest
                                <li><a href="{{route('login')}}"><i class="icon-f-94"></i>Login</a></li>
                                @if (Route::has('register'))
                                <li><a href="{{route('register')}}"><i class="icon-f-94"></i>Register</a></li>
                                @endif

                            @endguest


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tt-account -->

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
