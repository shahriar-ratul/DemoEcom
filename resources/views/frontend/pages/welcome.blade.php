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


<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title">
            <h1 class="tt-title">TRENDING PRODUCTS</h1>
            <div class="tt-description">TOP PRODUCT IN CURRENT TIME</div>
        </div>
        <div class="row tt-layout-product-item">
            @foreach($latest_products as $product)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="tt-product thumbprod-center product-nohover">
                    <div class="tt-image-box">
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>

                        <a href="{{route('product.show.details',$product->id)}}">
                            <span class="tt-img"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('images') }}/{{$product->product_image}}" alt=""></span>
                            <span class="tt-img-roll-over"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('images') }}/{{$product->product_image_1}}" alt=""></span>
                            <span class="tt-label-location">
                                <span class="tt-label-new">featured</span>
                            </span>
                        </a>
                    </div>
                    <div class="tt-description">
                        <div class="tt-row">
                            <ul class="tt-add-info">
                                {{--  <li><a href="">{{$product->product_name}}</a></li>  --}}
                            </ul>
                            {{--  <div class="tt-rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
                                <i class="icon-star-empty"></i>
                            </div>  --}}
                        </div>
                        <h2 class="tt-title"><a href="{{route('product.show.details',$product->id)}}">{{$product->product_name}}</a></h2>
                        <div class="tt-price">
                           {{$product->product_price}} BDT
                        </div>
                        <div class="tt-option-block">
                            <ul class="tt-options-swatch js-change-img">

                                <li class="active"><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image}}" data-src-hover="{{ asset('images') }}/{{$product->product_image}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_1}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_1}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_2}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_2}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_3}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_3}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_4}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_4}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                            </ul>
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
    </div>
</div>

<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="tt-block-title">
            <h2 class="tt-title">NEW PRODUCT</h2>
            <div class="tt-description">NEW PRODUCT IN THIS WEEK</div>
        </div>
        <div class="row tt-layout-product-item">

            @foreach ($latest_products as $item)

            <div class="col-6 col-md-4 col-lg-3">
                <div class="tt-product thumbprod-center product-nohover">
                    <div class="tt-image-box">
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                        <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>

                        <a href="{{route('product.show.details',$product->id)}}">
                            <span class="tt-img"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('images') }}/{{$product->product_image}}" alt=""></span>
                            <span class="tt-img-roll-over"><img src="{{ asset('resource/frontend/') }}/images/loader.svg" data-src="{{ asset('images') }}/{{$product->product_image_1}}" alt=""></span>
                            <span class="tt-label-location">
                                <span class="tt-label-new">new</span>
                            </span>
                        </a>
                    </div>
                    <div class="tt-description">
                        <div class="tt-row">
                            <ul class="tt-add-info">
                                {{--  <li><a href="">{{$product->product_name}}</a></li>  --}}
                            </ul>
                            {{--  <div class="tt-rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
                                <i class="icon-star-empty"></i>
                            </div>  --}}
                        </div>
                        <h2 class="tt-title"><a href="{{route('product.show.details',$product->id)}}">{{$product->product_name}}</a></h2>
                        <div class="tt-price">
                           {{$product->product_price}} BDT
                        </div>
                        <div class="tt-option-block">
                            <ul class="tt-options-swatch js-change-img">

                                <li class="active"><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image}}" data-src-hover="{{ asset('images') }}/{{$product->product_image}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_1}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_1}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_2}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_2}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_3}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_3}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                                <li><a href="#" class="options-color-img" data-src="{{ asset('images') }}/{{$product->product_image_4}}" data-src-hover="{{ asset('images') }}/{{$product->product_image_4}}" data-tooltip="{{$product->product_name}}" data-tposition="top"></a></li>

                            </ul>
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
                        <p>Free shipping on dhaka over 1000 BDT Order</p>
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
                        <h4 class="tt-title">7 DAYS RETURN</h4>
                        <p>Simply return it within 3 days for an exchange.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- modal (quickViewModal) -->
<div class="modal  fade"  id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">


	<div class="modal-dialog modal-lg">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="tt-modal-quickview desctope">
					<div class="row">
						<div class="col-12 col-md-5 col-lg-6">
							<div class="tt-mobile-product-slider arrow-location-center">
								<div><img src="{{asset('/resource/frontend')}}/images/loader.svg" data-src="{{asset('/images')}}/{{$product->product_image}}" alt=""></div>
								<div><img src="{{asset('/resource/frontend')}}/images/loader.svg" data-src="{{asset('/images')}}/{{$product->product_image_1}}" alt=""></div>
								<div><img src="{{asset('/resource/frontend')}}/images/loader.svg" data-src="{{asset('/images')}}/{{$product->product_image_2}}" alt=""></div>
                                <div><img src="{{asset('/resource/frontend')}}/images/loader.svg" data-src="{{asset('/images')}}/{{$product->product_image_3}}" alt=""></div>
                                <div><img src="{{asset('/resource/frontend')}}/images/loader.svg" data-src="{{asset('/images')}}/{{$product->product_image_4}}" alt=""></div>
                                <div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{$product->product_video_link}}" allowfullscreen></iframe>
                                    </div>
                                </div>


							</div>
						</div>
						<div class="col-12 col-md-7 col-lg-6">
							<div class="tt-product-single-info">
								<div class="tt-add-info">
									<ul>
										<li><span>SKU:</span> {{$product->product_sku}}</li>
										<li><span>Availability:</span> {{$product->product_qty}} in Stock</li>
									</ul>
								</div>
								<h2 class="tt-title">{{$product->product_name}}</h2>
								<div class="tt-price">
									<span class="new-price">{{$product->product_price}} BDT</span>

								</div>

								<div class="tt-wrapper">

								</div>


								<div class="tt-wrapper">
									<div class="tt-row-custom-01">
                                        <div class="container">
                                        <form action="{{route('cart.item.add',$product->id)}}" method="POST">
                                            @csrf
										<div class="col-item">
											<div class="tt-input-counter style-01">
												<span class="minus-btn"></span>
												<input type="text" value="1" name="quantity" size="5">
												<span class="plus-btn"></span>
											</div>
										</div>
										<div class="col-item">
                                            <button type="submit" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</button>

                                        </div>
                                    </form>
                                </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- modalVideoProduct -->
<div class="modal fade"  id="modalVideoProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-video">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="modal-video-content">

				</div>
			</div>
		</div>
	</div>
</div>


@endsection


@push('js')
@endpush
