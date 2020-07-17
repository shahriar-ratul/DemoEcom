@extends('frontend.layouts.app')

@section('title','Product')

@push('css')


@endpush

@section('content')
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{route('welcome')}}">Home</a></li>
			<li><a href="">Products</a></li>
			<li>{{$product->product_name}}</li>
		</ul>
	</div>
</div>


<div id="tt-pageContent">
	<div class="container-indent">
		<!-- mobile product slider  -->
		<div class="tt-mobile-product-layout visible-xs">
			<div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
				<div><img src="{{asset('/images')}}/{{$product->product_image}}" alt=""></div>
				<div><img src="{{asset('/images')}}/{{$product->product_image_1}}" alt=""></div>
				<div><img src="{{asset('/images')}}/{{$product->product_image_2}}" alt=""></div>
				<div><img src="{{asset('/images')}}/{{$product->product_image_3}}" alt=""></div>
				<div><img src="{{asset('/images')}}/{{$product->product_image_4}}" alt=""></div>
				<div>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="{{$product->product_video_link}}" allowfullscreen></iframe>
					</div>
				</div>

			</div>
		</div>
		<!-- /mobile product slider  -->
		<div class="container  container-fluid-mobile">
			<div class="row">
				<div class="col-6 hidden-xs">
					<div class="tt-product-single-img">
						<div>
							<button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
							<img class="zoom-product" src='{{asset('/images')}}/{{$product->product_image}}' data-zoom-image="{{asset('/images')}}/{{$product->product_image}}" alt="">
						</div>
					</div>
					<div class="product-images-carousel">
						<ul id="smallGallery" class="arrow-location-02  slick-animated-show-js">


                            <li><a class="zoomGalleryActive" href="#" data-image="{{asset('/images')}}/{{$product->product_image}}" data-zoom-image="{{asset('/images')}}/{{$product->product_image}}"><img src="{{asset('/images')}}/{{$product->product_image}}" alt="" /></a></li>

                            <li><a href="#" data-image="{{asset('/images')}}/{{$product->product_image_1}}" data-zoom-image="{{asset('/images')}}/{{$product->product_image_1}}"><img src="{{asset('/images')}}/{{$product->product_image_1}}" alt="" /></a></li>


                            <li><a href="#" data-image="{{asset('/images')}}/{{$product->product_image_2}}" data-zoom-image="{{asset('/images')}}/{{$product->product_image_2}}"><img src="{{asset('/images')}}/{{$product->product_image_2}}" alt="" /></a></li>


                            <li><a href="#" data-image="{{asset('/images')}}/{{$product->product_image_3}}" data-zoom-image="{{asset('/images')}}/{{$product->product_image_3}}"><img src="{{asset('/images')}}/{{$product->product_image_3}}" alt="" /></a></li>

                            <li><a href="#" data-image="{{asset('/images')}}/{{$product->product_image_4}}" data-zoom-image="{{asset('/images')}}/{{$product->product_image_4}}"><img src="{{asset('/images')}}/{{$product->product_image_4}}" alt="" /></a></li>


							<li>
								<div class="video-link-product" data-toggle="modal" data-type="youtube" data-target="#modalVideoProduct" data-value="{{$product->product_video_link}}">
									<img src="{{asset('resource/frontend')}}/images/video.jpg" alt="" />
									<div>
										<i class="icon-f-32"></i>
									</div>
								</div>
                            </li>


						</ul>
					</div>
				</div>
				<div class="col-6">
					<div class="tt-product-single-info">
						<div class="tt-add-info">
							<ul>
                                <li><span>SKU:</span> {{$product->product_sku}}</li>

								<li>
                                    @if ($product->product_qty > 0)
                                        <span>Availability:</span>{{$product->product_qty}}  in Stock
                                    @else
                                    <span>Availability:</span> <span class="text-danger font-weight-bold">Out in Stock</span>
                                    @endif


                                </li>
							</ul>
						</div>
						<h1 class="tt-title">{{$product->product_name}}</h1>
						<div class="tt-price">
							<span class="new-price">{{$product->product_price}} BDT</span>
							<span class="old-price"></span>
						</div>


						<div class="tt-wrapper">
							<div class="tt-row-custom-01">
                                <div class="container">
                                <form action="{{route('cart.item.add',$product->id)}}" method="POST" >
                                    @csrf
								<div class="col-item">
									<div class="tt-input-counter style-01">
										<span class="minus-btn"></span>
										<input type="text" value="1" name="quantity" size="5"/>
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
						<div class="tt-wrapper">
							<ul class="tt-list-btn">
								<li><a class="btn-link" href="#"><i class="icon-n-072"></i>ADD TO WISH LIST</a></li>

							</ul>
						</div>
						<div class="tt-wrapper">
							<div class="tt-add-info">
								<ul>
									<li><span>Vendor:</span> Polo</li>
									<li><span>Product Type:</span> T-Shirt</li>

								</ul>
							</div>
						</div>
						<div class="tt-collapse-block">
							<div class="tt-item active">
								<div class="tt-collapse-title">DESCRIPTION</div>
								<div class="tt-collapse-content">
									{{$product->product_long_description}}
								</div>
							</div>
							{{--  <div class="tt-item">
								<div class="tt-collapse-title">ADDITIONAL INFORMATION</div>
								<div class="tt-collapse-content">
									<table class="tt-table-03">
										<tbody>
											<tr>
												<td>Color:</td>
												<td>Blue, Purple, White</td>
											</tr>
											<tr>
												<td>Size:</td>
												<td>20, 24</td>
											</tr>
											<tr>
												<td>Material:</td>
												<td>100% Polyester</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>  --}}
							{{--  <div class="tt-item">
								<div class="tt-collapse-title">REVIEWS (3)</div>
								<div class="tt-collapse-content">
									<div class="tt-review-block">
										<div class="tt-row-custom-02">
											<div class="col-item">
												<h2 class="tt-title">
													1 REVIEW FOR VARIABLE PRODUCT
												</h2>
											</div>
											<div class="col-item">
												<a href="#">Write a review</a>
											</div>
										</div>
										<div class="tt-review-comments">
											<div class="tt-item">
												<div class="tt-avatar">
													<a href="#"><img src="images/product/single/review-comments-img-01.jpg" alt=""></a>
												</div>
												<div class="tt-content">
													<div class="tt-rating">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-half"></i>
														<i class="icon-star-empty"></i>
													</div>
													<div class="tt-comments-info">
														<span class="username">by <span>ADRIAN</span></span>
														<span class="time">on January 14, 2017</span>
													</div>
													<div class="tt-comments-title">Very Good!</div>
													<p>
														Ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
													</p>
												</div>
											</div>
											<div class="tt-item">
												<div class="tt-avatar">
													<a href="#"><img src="images/product/single/review-comments-img-02.jpg" alt=""></a>
												</div>
												<div class="tt-content">
													<div class="tt-rating">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-half"></i>
														<i class="icon-star-empty"></i>
													</div>
													<div class="tt-comments-info">
														<span class="username">by <span>JESICA</span></span>
														<span class="time">on January 14, 2017</span>
													</div>
													<div class="tt-comments-title">Bad!</div>
													<p>
														Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
													</p>
												</div>
											</div>
											<div class="tt-item">
												<div class="tt-avatar">
													<a href="#"></a>
												</div>
												<div class="tt-content">
													<div class="tt-rating">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-half"></i>
														<i class="icon-star-empty"></i>
													</div>
													<div class="tt-comments-info">
														<span class="username">by <span>ADAM</span></span>
														<span class="time">on January 14, 2017</span>
													</div>
													<div class="tt-comments-title">Very Good!</div>
													<p>
														Diusmod tempor incididunt ut labore et dolore magna aliqua.
													</p>
												</div>
											</div>
										</div>
										<div class="tt-review-form">
											<div class="tt-message-info">
												BE THE FIRST TO REVIEW <span>“BLOUSE WITH SHEER &AMP; SOLID PANELS”</span>
											</div>
											<p>Your email address will not be published. Required fields are marked *</p>
											<div class="tt-rating-indicator">
												<div class="tt-title">
													YOUR RATING *
												</div>
												<div class="tt-rating">
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star-half"></i>
													<i class="icon-star-empty"></i>
												</div>
											</div>
											<form class="form-default">
												<div class="form-group">
													<label for="inputName" class="control-label">YOUR NAME *</label>
													<input type="email" class="form-control" id="inputName" placeholder="Enter your name">
												</div>
												<div class="form-group">
													<label for="inputEmail" class="control-label">COUPONE E-MAIL *</label>
													<input type="password" class="form-control" id="inputEmail" placeholder="Enter your e-mail">
												</div>
												<div class="form-group">
													<label for="textarea" class="control-label">YOUR REVIEW *</label>
													<textarea class="form-control"  id="textarea" placeholder="Enter your review" rows="8"></textarea>
												</div>
												<div class="form-group">
													<button type="submit" class="btn">SUBMIT</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>  --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent wrapper-social-icon">
		<div class="container">
			<ul class="tt-social-icon justify-content-center">
				<li><a class="icon-g-64" href="http://www.facebook.com/"></a></li>
				<li><a class="icon-h-58" href="http://www.facebook.com/"></a></li>
				<li><a class="icon-g-66" href="http://www.twitter.com/"></a></li>
				<li><a class="icon-g-67" href="http://www.google.com/"></a></li>
				<li><a class="icon-g-70" href="https://instagram.com/"></a></li>
			</ul>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title text-left">
				<h3 class="tt-title-small">MORE PRODUCTS</h3>
			</div>
				<div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">



                    @foreach ($products as $product)


				<div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center product-nohover">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>


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
<script src="{{asset('/resource/frontend')}}/external/elevatezoom/jquery.elevatezoom.js"></script>
<script src="{{asset('/resource/frontend')}}/external/magnific-popup/jquery.magnific-popup.min.js"></script>
@endpush
