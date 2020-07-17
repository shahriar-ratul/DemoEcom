@extends('frontend.layouts.app')
@section('title','Profile')
@push('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
@endpush

@section('content')

<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{route('welcome')}}">Home</a></li>
			<li>Account</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<h1 class="tt-title-subpages noborder">ACCOUNT</h1>
			<div class="tt-shopping-layout">
				<h2 class="tt-title-border">MY ACCOUNT TOTAL ORDER -{{count($orders)}}</h2>
				<div class="tt-wrapper">
					<h3 class="tt-title">ORDER HISTORY</h3>
					<div class="tt-table-responsive">
						<table class="tt-table-shop-01 text-center">
							<thead>
								<tr>
									<th>ORDER</th>
									<th>DATE</th>
									<th>PAYMENT STATUS</th>
									<th>FULFILLMENT STATUS</th>
									<th>Total Items</th>
									<th>TOTAL</th>
									<th colspan="2" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>

                                @foreach ($orders as $item)

								<tr>
									<td><a href="#">{{$item->order_number}}</a></td>
									<td>{{ date('d-M-y', strtotime($item->created_at)) }}</td>
									<td class="text-center">

                                        @if ($item->is_paid == 1)
                                        <h6><span class="badge badge-dark">Paid</span></h6>
                                        @elseif( $item->is_paid == 0)
                                        <h6><span class="badge badge-danger">Unpaid</span></h6>
                                        @endif

                                    </td>
									<td>
                                        @if ($item->status == 'pending')
                                        <h6><span class="badge badge-dark">pending</span></h6>
                                        @elseif( $item->status == 'processing')
                                        <h6><span class="badge badge-primary">processing</span></h6>
                                        @elseif( $item->status == 'completed')
                                        <h6><span class="badge badge-success">completed</span></h6>
                                        @elseif( $item->status == 'declined')
                                        <h6><span class="badge badge-warning">declined</span></h6>

                                        @elseif( $item->status == 'canceled')
                                        <h6><span class="badge badge-danger">canceled</span></h6>
                                        @endif
                                    </td>
									<td>{{$item->item_count}}</td>
									<td>{{$item->grand_total}}</td>
									<td>
                                        @if($item->status != 'completed')
                                        <a href="{{route('user.order.edit',$item->id)}}" class="btn text-white">Edit</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('user.details.order',$item->id)}}" class="btn bg-info text-white">details</a>
                                    </td>
                                </tr>

                                @endforeach


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
