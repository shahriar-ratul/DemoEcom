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
                <form class="form" id="form" name="form" enctype="multipart/form-data" action="{{route('superadmin.profile.changepassword.store')}}" method="post">
                    @csrf

                    <a href="{{route('superadmin.profile.index')}}" class="btn btn-info font-weight-bolder mr-3">
                        <i class="ki ki-check icon-sm"></i>Profile</a>

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
                            <label class="col-3">Current Password</label>
                            <div class="col-9">
                                <input class="form-control border border-primary
                                 @error('current_password') is-invalid @enderror" type="password" name="current_password" autocomplete="off" placeholder="Enter Your Current Password" />

                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">New Password</label>
                            <div class="col-9">
                                <input class="form-control border border-primary @error('password') is-invalid @enderror" type="password" name="password" autocomplete="off" placeholder="Enter New Password"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Confirm New Password</label>
                            <div class="col-9">
                                <input class="form-control border border-primary @error('password') is-invalid @enderror" type="password" name="password_confirmation" autocomplete="off" placeholder="Enter New Password Again"/>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

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
