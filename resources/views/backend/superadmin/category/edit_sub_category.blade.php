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
        <form class="form" action="{{ route('superadmin.subcategory.update',$subcategory->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="card-toolbar">
            <a href="{{ route('superadmin.subcategory.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
            <div class="btn-group">
                <button type="submit" class="btn btn-primary font-weight-bolder">
                <i class="ki ki-check icon-sm"></i>Update SubCategory</button>

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
                                <select class="form-control select2" id="category" name="category">
                                    <option selected disabled >Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @if($subcategory->category_id == $category->id)selected @endif>{{$category->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <h4 class="col-3">Sub Category Name</h4>
                            <div class="col-9">
                                <input class="form-control form-control-solid border border-primary" type="text" name="name" placeholder="Enter SubCategory Name" value="{{ $subcategory->name }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <h4 class="col-3">Status</h4>
                            <div class="col-9">
                                <select class="form-control select2" id="status" name="status">
                                    <option readonly>Select status</option>
                                    <option value="1" @if($subcategory->status == 1)selected @endif>Active</option>
                                    <option value="0" @if($subcategory->status == 0)selected @endif>Not Active</option>

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
		{{--  <script src="{{ asset('resource/backend') }}/assets/js/pages/crud/forms/widgets/select2.js?v=7.0.5"></script>  --}}
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

                    $('#status').select2({
                        placeholder: "Select Category",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });
                });
        </script>
@endpush
