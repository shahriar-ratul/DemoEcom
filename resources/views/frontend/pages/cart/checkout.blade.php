@extends('frontend.layouts.app')
@section('title','Checkout')
@push('css')
@endpush
@section('content')

<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li>Shopping Cart</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">SHOPPING CART</h1>
			<div class="row">

				<div class="col-sm-12 col-xl-8">
					<div class="form-default">
                        <form method="POST" action="{{route('order.store')}}">
                            @csrf

							<div class="form-group">
								<label class="control-label">LAST NAME *</label>
								<input type="text" class="form-control border border-primary" name="shipping_fullname">
							</div>
							<div class="form-group">
								<label  class="control-label">ADDRESS *</label>
								<input type="text" class="form-control border border-primary" name="shipping_address">
							</div>
							<div class="form-group">
								<label  class="control-label">TOWN / CITY *</label>
								<input type="text" class="form-control border border-primary" name="shipping_city">
							</div>
							<div class="form-group">
								<label class="control-label">STATE*</label>
								<input type="text" class="form-control border border-primary" name="shipping_state">
							</div>
							<div class="form-group">
								<label  class="control-label">POSTCODE / ZIP *</label>
								<input type="text" class="form-control border border-primary" name="shipping_zipcode">
							</div>
							<div class="form-group">
								<label  class="control-label">PHONE</label>
								<input type="text" class="form-control border border-primary" name="shipping_phone">
							</div>
							<div class="form-group">
								<label  class="control-label">EMAIL ADDRESS *</label>
								<input type="text" class="form-control border border-primary" name="shipping_email">
							</div>


					</div>

				</div>
				<div class="col-sm-12 col-xl-4">
					<div class="tt-shopcart-wrapper">
						<div class="tt-shopcart-box">
							<h4 class="tt-title">
								Payment
							</h4>


								<div class="form-group">
									<label for="address_country">Payment Method <sup>*</sup></label>
									<select name="payment_method" class="form-control">
										<option value="cash_on_delivery"> Cash on delivery</option>
									</select>
								</div>


						</div>
						<div class="tt-shopcart-box">

						</div>
						<div class="tt-shopcart-box tt-boredr-large">
							<button type="submit" class="btn btn-lg"><span class="icon icon-check_circle"></span>Order</button>
						</div>
					</div>
                </div>
            </form>
			</div>
		</div>
	</div>
</div>



@endsection


@push('js')

@endpush
