@extends('backend.superadmin.layouts.app')

@push('css')

@endpush

@section('content')
    {{--  <!--begin::Card-->  --}}
    <div class="card card-custom card-sticky" id="kt_page_sticky_card">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Profile</h3>
                <i class="mr-2"></i>
            </div>
            {{--  <!--begin::Form-->  --}}

            <div class="card-toolbar">
                <form class="form" id="form" name="form" enctype="multipart/form-data" action="{{route('superadmin.profile.update',$user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <a href="{{route('superadmin.profile.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                        <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary font-weight-bolder">
                            <i class="ki ki-check icon-sm"></i>Update</button>

                    </div>
            </div>
        </div>
        <div class="card-body">


            <div class="row">
                <div class="col-xl-2"></div>

                <div class="col-xl-8">
                    <div class="my-5">
                        <h3 class="text-dark font-weight-bold mb-10">User Info:</h3>


                        <div class="form-group row">
                            <label class="col-3">First Name</label>
                            <div class="col-9">
                                <input class="form-control border border-primary
                                 @error('firstName') is-invalid @enderror" type="text" name="firstName" autocomplete="firstName" value="{{$user->firstName }}" placeholder="Enter Your First Name" />

                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-3">Last Name</label>
                            <div class="col-9">
                                <input class="form-control border border-primary
                                @error('lastName') is-invalid @enderror"
                                type="text" name="lastName" autocomplete="lastName" value="{{$user->lastName }}" placeholder="Enter Your Last Name"/>

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                            <label class="col-3">User Name</label>
                            <div class="col-9">
                                <input class="form-control border border-primary
                                @error('username') is-invalid @enderror"
                                type="text" name="username" autocomplete="off" value="{{$user->username }}" placeholder="Enter Your User Name"/>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <div class="form-group row">
                            <label class="col-3">Email</label>
                            <div class="col-9">
                                <input class="form-control border border-danger @error('email') is-invalid @enderror"
                                type="email" name="email" autocomplete="email" value="{{$user->email }}" placeholder="Enter Your Email" disabled/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Image:</label>
                            <div class="col-9 ">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_9" style="background-image: url({{asset('users')}}/{{$user->image}})">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg"  />
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


    @endpush
