@extends('frontend.layouts.app')
@section('title','Profile')
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
			<h1 class="tt-title-subpages noborder">Order</h1>
			<div class="tt-shopping-layout">
				<h2 class="tt-title">Your Order Edit </h2>

				<div class="tt-wrapper">
					<h6 class="tt-title">Your Order Number is -{{$order->order_number}}</h6>
					<div class="form-default">
						<form action="{{route('user.order.update',$order->id)}}" method="POST">
                            @csrf
                            @method('PUT')
							<div class="form-group">
								<label class="control-label">Order Status *</label>
								<select class="form-control" name="status">
									<option>Select</option>
									<option value="canceled">Cancel Your Order</option>
								</select>
							</div>

							<div class="row tt-offset-21">
								<div class="col-auto">
									<button type="submit" class="btn">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection
@push('js')
@endpush
