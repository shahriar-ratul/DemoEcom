@extends('backend.superadmin.layouts.app')

@push('css')
<!--begin::Page Vendors Styles(used by this page)-->
<link href="{{ asset('resource/backend/') }}/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->

@endpush


@section('content')


<!--begin::Card-->
<div class="card card-custom card-custom gutter-t">
    <div class="card-header py-3">
        <div class="card-title">
            <h3 class="card-label">Orders</h3>
        </div>
        <div class="card-toolbar">

        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable3">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Order No</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Grand Total</th>
                    <th>Items</th>
                    <th>Paid</th>
                    <th>Payment Method</th>
                    <th>items</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $key=>$order)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->user->username}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->grand_total}}</td>
                    <td>{{$order->item_count}}</td>
                    <td>{{$order->is_paid}}</td>
                    <td>{{$order->payment_method}}</td>
                    <td>
                        @foreach ($order_items as $item)
                        <ul>
                            @if ($order->id == $item->order_id)
                            <li>
                                {{$item->product->product_name}}-
                                {{$item->price}}-
                                {{$item->quantity}}
                            </li>
                            @endif
                        </ul>

                        @endforeach
                    </td>
                    <td>
                            <a class="btn btn-info" href="{{ route('superadmin.order.edit',$order->id) }}">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a class="btn btn-danger text-light" onclick="deleteTag({{ $order->id }})">
                            <i class="fas fa-trash-alt"></i> Delete
                          </a>
                          <form id="delete-form-{{ $order->id }}" action="{{ route('superadmin.order.destroy',$order->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!--end::Card-->


@endsection

@push('js')

<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('resource/backend/') }}/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('resource/backend/') }}/assets/js/pages/crud/datatables/extensions/buttons.js?v=7.0.5"></script>
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

<script type="text/javascript">
    function deleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it! ',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }
</script>

@endpush
