@extends('frontend.layouts.app')
@section('title','Products')
@push('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush

@section('content')
    <div class="tt-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent">

        <div class="container-indent">
            <div class="container">
                <div class="row flex-sm-row-reverse">
                    <div class="col-md-4 col-lg-3 col-xl-3 leftColumn rightColumn aside">
                        <div class="tt-btn-col-close">
                            <a href="#">Close</a>
                        </div>
                        <div class="tt-collapse open tt-filter-detach-option">
                            <div class="tt-collapse-content">
                                <div class="filters-mobile">
                                    <div class="filters-row-select">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">SORT BY</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-filter-list">
                                    <li class="active">
                                        <a href="#">Shirts &amp; Tops</a>
                                    </li>
                                    <li>
                                        <a href="#">XS</a>
                                    </li>
                                    <li>
                                        <a href="#">White</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn-link-02">Clear All</a>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">PRODUCT CATEGORIES</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-list-row">
                                    <li class="active"><a href="#">Dresses</a></li>
                                    <li><a href="#">Shirts &amp; Tops</a></li>
                                    <li><a href="#">Polo Shirts</a></li>
                                    <li><a href="#">Sweaters</a></li>
                                    <li><a href="#">Blazers &amp; Vests</a></li>
                                    <li><a href="#">Jackets &amp; Outerwear</a></li>
                                    <li><a href="#">Activewear</a></li>
                                    <li><a href="#">Pants</a></li>
                                    <li><a href="#">Jumpsuits &amp; Shorts</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Skirts</a></li>
                                    <li><a href="#">Swimwear</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">FILTER BY PRICE</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-list-row">
                                    <li class="active"><a href="#">$0 — $50</a></li>
                                    <li><a href="#">$50 — $100</a></li>
                                    <li><a href="#">$100 — $150</a></li>
                                    <li><a href="#">$150 —  $200</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">FILTER BY SIZE</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-options-swatch options-middle">
                                    <li><a href="#">4</a></li>
                                    <li class="active"><a href="#">6</a></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">12</a></li>
                                    <li><a href="#">14</a></li>
                                    <li><a href="#">16</a></li>
                                    <li><a href="#">18</a></li>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#">22</a></li>
                                    <li><a href="#">24</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">FILTER BY COLOR</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-options-swatch options-middle">
                                    <li><a class="options-color tt-border tt-color-bg-08" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-09" href="#"></a></li>
                                    <li class="active"><a class="options-color tt-color-bg-10" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-11" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-12" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-13" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-14" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-15" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-16" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-17" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-18" href="#"></a></li>
                                    <li><a class="options-color" href="#">
									<span class="swatch-img">
										<img src="images/custom/texture-img-01.jpg" alt="">
									</span>
                                            <span class="swatch-label color-black"></span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">VENDOR</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-list-row">
                                    <li><a href="#">Levi's</a></li>
                                    <li><a href="#">Gap</a></li>
                                    <li><a href="#">Polo</a></li>
                                    <li><a href="#">Lacoste</a></li>
                                    <li><a href="#">Guess</a></li>
                                </ul>
                                <a href="#" class="btn-link-02">+ More</a>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">SALE PRODUCTS</h3>
                            <div class="tt-collapse-content">
                                <div class="tt-aside">
                                    <a class="tt-item" href="product.html">
                                        <div class="tt-img">
                                            <span class="tt-img-default"><img src="images/product/product-01.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="images/product/product-01-02.jpg" alt=""></span>
                                        </div>
                                        <div class="tt-content">
                                            <h6 class="tt-title">Flared Shift Dress</h6>
                                            <div class="tt-price">
                                                <span class="sale-price">$14</span>
                                                <span class="old-price">$24</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="tt-item" href="product.html">
                                        <div class="tt-img">
                                            <span class="tt-img-default"><img src="images/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="images/product/product-02-02.jpg" alt=""></span>
                                        </div>
                                        <div class="tt-content">
                                            <h6 class="tt-title">Flared Shift Dress</h6>
                                            <div class="tt-price">
                                                <span class="sale-price">$14</span>
                                                <span class="old-price">$24</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="tt-item" href="product.html">
                                        <div class="tt-img">
                                            <span class="tt-img-default"><img src="images/product/product-03.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="images/product/product-03-02.jpg" alt=""></span>
                                        </div>
                                        <div class="tt-content">
                                            <h6 class="tt-title">Flared Shift Dress</h6>
                                            <div class="tt-price">
                                                <span class="sale-price">$14</span>
                                                <span class="old-price">$24</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tt-collapse open">
                            <h3 class="tt-collapse-title">TAGS</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-list-inline">
                                    <li><a href="#">Dresses</a></li>
                                    <li><a href="#">Shirts &amp; Tops</a></li>
                                    <li><a href="#">Polo Shirts</a></li>
                                    <li><a href="#">Sweaters</a></li>
                                    <li><a href="#">Blazers</a></li>
                                    <li><a href="#">Vests</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Outerwear</a></li>
                                    <li><a href="#">Activewear</a></li>
                                    <li><a href="#">Pants</a></li>
                                    <li><a href="#">Jumpsuits</a></li>
                                    <li><a href="#">Shorts</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Skirts</a></li>
                                    <li><a href="#">Swimwear</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-content-aside">
                            <a href="listing-left-column.html" class="tt-promo-03">
                                <img src="images/custom/listing_promo_img_07.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 col-xl-9">
                        <div class="content-indent container-fluid-custom-mobile-padding-02">
                            <div class="tt-filters-options">
                                <h1 class="tt-title">
                                    Product Found <span class="tt-title-total">()</span>
                                </h1>
                                <div class="tt-btn-toggle">
                                    <a href="#">FILTER</a>
                                </div>
                                <div class="tt-sort">
                                    <select>
                                        <option value="Default Sorting">Default Sorting</option>
                                        <option value="Default Sorting">Default Sorting 02</option>
                                        <option value="Default Sorting">Default Sorting 03</option>
                                    </select>
                                    <select>
                                        <option value="Show">Show</option>
                                        <option value="9">9</option>
                                        <option value="16">16</option>
                                        <option value="32">32</option>
                                    </select>
                                </div>
                                <div class="tt-quantity">
                                    <a href="#" class="tt-col-one" data-value="tt-col-one"></a>
                                    <a href="#" class="tt-col-two" data-value="tt-col-two"></a>
                                    <a href="#" class="tt-col-three" data-value="tt-col-three"></a>
                                    <a href="#" class="tt-col-four" data-value="tt-col-four"></a>
                                    <a href="#" class="tt-col-six" data-value="tt-col-six"></a>
                                </div>
                            </div>
                            <div class="tt-product-listing row">
                                @foreach($products as $product)
                                <div class="col-6 col-md-4 tt-col-item">
                                    <div class="tt-product thumbprod-center">
                                        <div class="tt-image-box">
                                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                            <a href="#">
                                                <span class="tt-img"><img src="{{asset('resource/frontend')}}/images/loader.svg" data-src="{{asset('images')}}/{{$product->product_image}}" alt=""></span>
{{--                                                <span class="tt-img-roll-over"><img src="{{asset('resource/frontend')}}/images/loader.svg" data-src="{{asset('images')}}/{{$product->product_image}}" alt=""></span>--}}
                                            </a>
                                        </div>
                                        <div class="tt-description">
                                            <div class="tt-row">


                                            </div>
                                            <h2 class="tt-title"><a href="">{{$product->product_name}}</a></h2>
                                            <div class="tt-price">
                                            {{$product->product_price}} BDT
                                            </div>
                                            <div class="tt-product-inside-hover">
                                                <div class="tt-row-btn">
                                                    <a href="{{route('cart.add',$product->id)}}" class="tt-btn-addtocart thumbprod-button-bg" >ADD TO CART</a>
                                                </div>
                                                <div class="tt-row-btn">
                                                    <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                    <a href="#" class="tt-btn-wishlist"></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>



                            <div class="d-flex justify-content-center m-5">
                                {{$products->render()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@push('js')
@endpush
