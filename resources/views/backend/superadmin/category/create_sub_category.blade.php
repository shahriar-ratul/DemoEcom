@extends('backend.superadmin.layouts.app')

@push('css')

@endpush

@section('content')
{{--  <!--begin::Card-->  --}}
<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Add New Category
            <i class="mr-2"></i>

        </div>
        <form class="form" action="{{ route('superadmin.category.store') }}" method="POST">
            @csrf
        <div class="card-toolbar">
            <a href="{{ route('superadmin.category.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
            <div class="btn-group">
                <button type="submit" class="btn btn-primary font-weight-bolder">
                <i class="ki ki-check icon-sm"></i>Save Form</button>

            </div>
        </div>
    </div>
    <div class="card-body">
        {{--  <!--begin::Form-->  --}}

            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                    <div class="my-5">
                        {{--  <h3 class="text-dark font-weight-bold mb-10">Customer Info:</h3>  --}}
                        <div class="form-group row">
                            <h4 class="col-3">Category Name</h4>
                            <div class="col-9">
                                <select class="form-control select2" id="category" name="category_name">
                                    <option value="AK">Select Category</option>
                                    <option value="AK">Alaska</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <h4 class="col-3">Sub Category Name</h4>
                            <div class="col-9">
                                <input class="form-control form-control-solid border border-primary" type="text" name="name" placeholder="Enter Category Name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <h4 class="col-3">Status</h4>
                            <div class="col-9">
                                <select class="form-control select2" id="kt_select2_1" name="category_name">
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>

                                </select>
                            </div>
                        </div>




                    </div>

                </div>
                <div class="col-xl-2"></div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
{{--  <!--end::Card-->  --}}
@endsection

@push('js')
<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('resource/backend') }}/assets/js/pages/crud/forms/widgets/select2.js?v=7.0.5"></script>
		<!--end::Page Scripts-->

        <script>

            $(document).ready(function(){
              // select optional subject 2
                    $('#category').select2({
                        placeholder: "Select Category",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });
                });
        </script>
@endpush
