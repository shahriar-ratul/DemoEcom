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
            <h3 class="card-label">All Product List</h3>
        </div>
        <div class="card-toolbar">

            <a href="{{ route('superadmin.product.create') }}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Add New Product</a>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable3">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Image 4</th>
                    <th>Image 5</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Sku</th>
                    <th>Product Quantity</th>
                    <th>Featured </th>
                    <th>Latest</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$product)
                <tr>
                    <td>{{++$key}}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                <img class="" src="{{asset('images')}}/{{$product->product_image}}" alt="Product Image">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                <img class="" src="{{asset('images')}}/{{$product->product_image_1}}" alt="Product Image">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                <img class="" src="{{asset('images')}}/{{$product->product_image_2}}" alt="Product Image">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                <img class="" src="{{asset('images')}}/{{$product->product_image_3}}" alt="Product Image">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                <img class="" src="{{asset('images')}}/{{$product->product_image_4}}" alt="Product Image">
                            </div>
                        </div>
                    </td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_sku}}</td>
                    <td>{{$product->product_qty}}</td>
                    <td>
                        @if($product->is_featured == 1)
                        <span class="label  label-success label-inline label-pill">Active</span>
                        @elseif($product->is_featured == 0)
                            <span class="label  label-danger label-inline label-pill">Deactive</span>
                        @endif
                    </td>

                    <td>
                        @if($product->is_latest == 1)
                        <span class="label  label-success label-inline label-pill">Active</span>
                        @elseif($product->is_latest == 0)
                            <span class="label  label-danger label-inline label-pill">Deactive</span>
                        @endif
                    </td>
                    <td>{{$product->user->username}}</td>
                    <td>
                            <a class="btn btn-info" href="{{ route('superadmin.product.edit',$product->id) }}">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-danger text-light" onclick="deleteTag({{ $product->id }})">
                            <i class="fas fa-trash-alt"></i>
                          </a>
                          <form id="delete-form-{{ $product->id }}" action="{{ route('superadmin.product.destroy',$product->id) }}" method="POST" style="display: none;">
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
<script src="{{ asset('resource/backend/') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('resource/backend/') }}/assets/js/pages/crud/datatables/extensions/buttons.js"></script>
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
