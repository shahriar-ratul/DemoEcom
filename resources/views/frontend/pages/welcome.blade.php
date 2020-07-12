@extends('frontend.layouts.app')
@section('title','Welcome')
@push('css')
@endpush
@section('content')

<div class="container-indent nomargin">

    <div class="container-fluid">
        <div class="row">
            <div class="slider-revolution revolution-default">
                <div class="tp-banner-container">
                    <div class="tp-banner revolution">
                        <ul>
                            @foreach($banners as $banner)
                            <li data-thumb="{{ asset('banner') }}/{{$banner->image}}" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                                <img src="{{ asset('banner') }}/{{$banner->image}}"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
                                <div class="tp-caption tp-caption1 lft stb"
                                    data-x="center"
                                    data-y="center"
                                    data-hoffset="0"
                                    data-voffset="0"
                                    data-speed="600"
                                    data-start="900"
                                    data-easing="Power4.easeOut"
                                    data-endeasing="Power4.easeIn">
{{--                                    <div class="tp-caption1-wd-2 ">{{$banner->title}}</div>--}}
{{--                                    <div class="tp-caption1-wd-4"><a href="#" target="_blank" class="btn btn-xl" data-text="SHOP NOW!">SHOP NOW!</a></div>--}}
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-indent0">
    <div class="container-fluid">
        <div class="row tt-layout-promo-box">

            @foreach($latest_products as $product)
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" class="tt-promo-box tt-one-child hover-type-2">
                            <img src="{{ asset('resource/frontend') }}/images/loader.svg" data-src="{{ asset('resource/frontend/') }}/images/promo/index-promo-img-01.jpg" alt="">
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-small">SALE</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="tt-promo-box tt-one-child hover-type-2">
                            <img src="{{ asset('resource/frontend') }}/images/loader.svg" data-src="{{ asset('resource/frontend/') }}/images/promo/index-promo-img-02.jpg" alt="">
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-small">NEW</div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>


<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title">
            <h1 class="tt-title">TRENDING</h1>
            <div class="tt-description">TOP VIEW IN THIS WEEK</div>
        </div>
        <div class="row tt-layout-product-item">
            @foreach($latest_products as $product)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="tt-product thumbprod-center product-nohover">
                    <div class="tt-image-box">
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                        <a href="product.html">
                            <span class="tt-img"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('resource/frontend/') }}/images/product/product-03.jpg" alt=""></span>
                            <span class="tt-img-roll-over"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('resource/frontend/') }}/images/product/product-03-02.jpg" alt=""></span>
                            <span class="tt-label-location">
                                <span class="tt-label-new">New</span>
                            </span>
                        </a>
                    </div>
                    <div class="tt-description">
                        <div class="tt-row">
                            <ul class="tt-add-info">
                                <li><a href="#">T-SHIRTS</a></li>
                            </ul>
                            <div class="tt-rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                        </div>
                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                        <div class="tt-price">
                            $12
                        </div>
                        <div class="tt-option-block">
                            <ul class="tt-options-swatch js-change-img">
                                <li class="active"><a href="#" class="options-color-img" data-src="{{ asset('resource/frontend/') }}/images/product/product-03.jpg" data-src-hover="{{ asset('resource/frontend/') }}/images/product/product-03-02.jpg" data-tooltip="Blue" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('resource/frontend/') }}/images/product/product-03-05.jpg" data-src-hover="{{ asset('resource/frontend/') }}/images/product/product-03-05-hover.jpg" data-tooltip="Light Blue" data-tposition="top"></a></li>
                                <li><a href="#" class="options-color-img" data-src="{{ asset('resource/frontend/') }}/images/product/product-03-06.jpg" data-src-hover="{{ asset('resource/frontend/') }}/images/product/product-03-06-hover.jpg" data-tooltip="Green" data-tposition="top"></a></li>
                                <li><a href="#" class="options-color-img" data-src="{{ asset('resource/frontend/') }}/images/product/product-03-07.jpg" data-src-hover="{{ asset('resource/frontend/') }}/images/product/product-03-07-hover.jpg" data-tooltip="Pink" data-tposition="top"></a></li>
                                <li><a href="#" class="options-color-img" data-src="{{ asset('resource/frontend/') }}/images/product/product-03-08.jpg" data-src-hover="{{ asset('resource/frontend/') }}/images/product/product-03-08-hover.jpg" data-tooltip="Orange" data-tposition="top"></a></li>
                            </ul>
                        </div>
                        <div class="tt-product-inside-hover">
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                            </div>
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                <a href="#" class="tt-btn-wishlist"></a>
                                <a href="#" class="tt-btn-compare"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</div>

<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title">
            <h2 class="tt-title">BEST SELLER</h2>
            <div class="tt-description">TOP SALE IN THIS WEEK</div>
        </div>
        <div class="row tt-layout-product-item">


            <div class="col-6 col-md-4 col-lg-3">
                <div class="tt-product thumbprod-center">
                    <div class="tt-image-box">
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                        <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                        <a href="product.html">
                            <span class="tt-img"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('resource/frontend/') }}/images/product/product-16.jpg" alt=""></span>
                            <span class="tt-img-roll-over"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('resource/frontend/') }}/images/product/product-16-01.jpg" alt=""></span>
                        </a>
                        <div class="tt-countdown_box">
                            <div class="tt-countdown_inner">
                                <div class="tt-countdown"
                                    data-date="2019-04-14"
                                    data-year="Yrs"
                                    data-month="Mths"
                                    data-week="Wk"
                                    data-day="Day"
                                    data-hour="Hrs"
                                    data-minute="Min"
                                    data-second="Sec"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-description">
                        <div class="tt-row">
                            <ul class="tt-add-info">
                                <li><a href="#">T-SHIRTS</a></li>
                            </ul>
                        </div>
                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                        <div class="tt-price">
                            $24
                        </div>
                        <div class="tt-product-inside-hover">
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                            </div>
                            <div class="tt-row-btn">
                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                <a href="#" class="tt-btn-wishlist"></a>
                                <a href="#" class="tt-btn-compare"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-indent">
    <div class="container">
        <div class="row tt-services-listing">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="#" class="tt-services-block">
                    <div class="tt-col-icon">
                        <i class="icon-f-48"></i>
                    </div>
                    <div class="tt-col-description">
                        <h4 class="tt-title">FREE SHIPPING</h4>
                        <p>Free shipping on all US order or order above $99</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="#" class="tt-services-block">
                    <div class="tt-col-icon">
                        <i class="icon-f-35"></i>
                    </div>
                    <div class="tt-col-description">
                        <h4 class="tt-title">SUPPORT 24/7</h4>
                        <p>Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="#" class="tt-services-block">
                    <div class="tt-col-icon">
                        <i class="icon-e-09"></i>
                    </div>
                    <div class="tt-col-description">
                        <h4 class="tt-title">30 DAYS RETURN</h4>
                        <p>Simply return it within 24 days for an exchange.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection


@push('js')
@endpush
