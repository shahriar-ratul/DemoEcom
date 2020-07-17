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
                            <h3 class="tt-collapse-title">PRODUCT CATEGORIES</h3>
                            <div class="tt-collapse-content">
                                <ul class="tt-list-row">
                                    @foreach ($categories as $item)
                                        <li><a href="{{route('product.show.category',$item->id)}}">{{$item->name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-12 col-lg-9 col-xl-9">
                        <div class="content-indent container-fluid-custom-mobile-padding-02">
                            <div class="tt-filters-options">
                                <h1 class="tt-title">
                                    Product Found : <span class="tt-title-total">{{$count}}</span>
                                </h1>
                                <div class="tt-btn-toggle">
                                    <a href="#">Category</a>
                                </div>
                                <div class="tt-sort">

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


                                            <a href="{{route('product.show.details',$product->id)}}">
                                                <span class="tt-img"><img src="{{asset('resource/frontend')}}/images/loader.svg" data-src="{{asset('images')}}/{{$product->product_image}}" alt=""></span>
{{--                                                <span class="tt-img-roll-over"><img src="{{asset('resource/frontend')}}/images/loader.svg" data-src="{{asset('images')}}/{{$product->product_image}}" alt=""></span>--}}
                                            </a>
                                        </div>
                                        <div class="tt-description">
                                            <div class="tt-row">


                                            </div>
                                            <h2 class="tt-title"><a href="{{route('product.show.details',$product->id)}}">{{$product->product_name}}</a></h2>
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

    @if (count($products) > 0)


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
@endif


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
