@extends('frontend.layouts.app')
@section('title','Order')
@push('css')

@endpush
@section('content')

<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{route('welcome')}}">Home</a></li>
			<li>Order</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-shopping-layout">
				<h2 class="tt-title-border">Order</h2>
				<div class="tt-wrapper">
					<h3 class="tt-title">Order Items : {{$order->item_count}}</h3>
					<div class="tt-table-responsive">
						<table class="tt-table-shop-01">
							<thead>
								<tr>
									<th>ORDER</th>
									<th>DATE</th>
									<th>PAYMENT STATUS</th>
									<th>FULFILLMENT STATUS</th>
									<th>TOTAL</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{$order->order_number}}</td>
									<td>{{$order->created_at}}</td>
									<td>{{$order->is_paid}}</td>
									<td>{{$order->status}}</td>
									<td>{{$order->grand_total}}</td>
								</tr>


							</tbody>
						</table>
					</div>
                </div>

                <div class="tt-wrapper">
					<h3 class="tt-title">Order Items : {{$order->item_count}}</h3>
					<div class="tt-table-responsive">
						<table class="tt-table-shop-01 ">
							<thead class="text-bold text-primary">
								<tr>
									<th>Product Name</th>
									<th>Price</th>
									<th>Quantity</th>

								</tr>
							</thead>
							<tbody class="text-bold text-dark">
                                @foreach ($order_items as $item)
								<tr>
									<td>{{$item->product->product_name}}</td>
									<td>{{$item->price}}</td>
									<td>{{$item->quantity}}</td>

                                </tr>
                                @endforeach


							</tbody>
						</table>
					</div>
                </div>

				<div class="tt-wrapper">
					<h3 class="tt-title">Shipping Address</h3>
					<div class="tt-table-responsive">
						<table class="tt-table-shop-02">
							<tbody>
								<tr>
									<td>NAME:</td>
									<td>{{$order->shipping_fullname}} </td>
                                </tr>
                                <tr>
									<td>PHONE:</td>
									<td>{{$order->shipping_phone}}</td>
								</tr>
								<tr>
									<td>E-MAIL:</td>
									<td>{{$order->shipping_email}}</td>
								</tr>
								<tr>
									<td>ADDRESS:</td>
									<td>{{$order->shipping_address}}</td>
								</tr>
								<tr>
									<td>City:</td>
									<td>{{$order->shipping_city}}</td>
                                </tr>
                                <tr>
									<td>State:</td>
									<td>{{$order->shipping_state}}</td>
								</tr>

								<tr>
									<td>ZIP:</td>
									<td>{{$order->shipping_zipcode}}</td>
								</tr>

							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>





@endsection


@push('js')

@endpush
