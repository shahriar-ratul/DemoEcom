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
            <h3 class="card-label">All SubCategory List</h3>
        </div>
        <div class="card-toolbar">

            <a href="{{ route('superadmin.subcategory.create') }}" class="btn btn-primary font-weight-bolder">
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
                </span>Add New SubCategory</a>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable3">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Category Name</th>
                    <th>SubCategory Name</th>
                    <th>Status</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sub_categories as $key=>$sub_cat)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$sub_cat->category->name}}</td>
                    <td>{{$sub_cat->name}}</td>
                    <td>
                        @if($sub_cat->status == 1)
                            Active
                        @elseif($sub_cat->status == 0)
                            Not Active
                        @endif
                    </td>
                    <td>{{$sub_cat->user->username}}</td>
                    <td>
                            <a class="btn btn-info" href="{{ route('superadmin.subcategory.edit',$sub_cat->id) }}">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a class="btn btn-danger text-light" onclick="deleteTag({{ $sub_cat->id }})">
                            <i class="fas fa-trash-alt"></i> Delete
                          </a>
                          <form id="delete-form-{{ $sub_cat->id }}" action="{{ route('superadmin.subcategory.destroy',$sub_cat->id) }}" method="POST" style="display: none;">
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
