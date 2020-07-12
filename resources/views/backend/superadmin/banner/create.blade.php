@extends('backend.superadmin.layouts.app')

@push('css')

@endpush

@section('content')
    {{--  <!--begin::Card-->  --}}
    <div class="card card-custom card-sticky" id="kt_page_sticky_card">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Add New Banner</h3>
                <i class="mr-2"></i>
            </div>
            {{--  <!--begin::Form-->  --}}

            <div class="card-toolbar">
                <form class="form" id="form" name="form" enctype="multipart/form-data" action="{{route('superadmin.banner.store')}}" method="post">
                    @csrf
                    <a href="{{route('superadmin.banner.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                        <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary font-weight-bolder">
                            <i class="ki ki-check icon-sm"></i>Save</button>

                    </div>
            </div>
        </div>
        <div class="card-body">


            <div class="row">
                <div class="col-xl-2"></div>

                <div class="col-xl-8">
                    <div class="my-5">
                        <h3 class="text-dark font-weight-bold mb-10">Banner Info:</h3>


                        <div class="form-group row">
                            <label class="col-3">Text</label>
                            <div class="col-9">
                                <input class="form-control border border-primary" type="text" placeholder="Enter Banner Text" name="title" />
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-3">Status</label>
                            <div class="col-9">
                                <select class="form-control select2" id="status" name="status" autocomplete="off">
                                    <option selected disabled></option>
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Image:</label>
                            <div class="col-9 ">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_9" style="background-image: url({{asset('resource/backend')}}/assets/media/users/blank.png)">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Default empty input with blank image</span>
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
            <script src="{{asset('resource/backend')}}/assets/js/pages/crud/forms/widgets/select2.js?v=7.0.5"></script>
            <!--end::Page Scripts-->
            <!--begin::Page Scripts(used by this page)-->
            <script src="{{asset('resource/backend')}}/assets/js/pages/crud/file-upload/image-input.js"></script>
            <!--end::Page Scripts-->


            <script >
                $(document).ready(function(){


                    // select status
                    $('#status').select2({
                        placeholder: "Select Status",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });







                });

            </script>


    @endpush
