@extends('backend.superadmin.layouts.app')

@push('css')

@endpush

@section('content')
{{--  <!--begin::Card-->  --}}
<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Sticky Form Actions
            <i class="mr-2"></i>
            <small class="">try to scroll the page</small></h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
            <div class="btn-group">
                <button type="button" class="btn btn-primary font-weight-bolder">
                <i class="ki ki-check icon-sm"></i>Save Form</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <ul class="nav nav-hover flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon flaticon2-reload"></i>
                                <span class="nav-text">Save &amp; continue</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon flaticon2-add-1"></i>
                                <span class="nav-text">Save &amp; add new</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon flaticon2-power"></i>
                                <span class="nav-text">Save &amp; exit</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        {{--  <!--begin::Form-->  --}}
        <form class="form" id="kt_form">
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                    <div class="my-5">
                        <h3 class="text-dark font-weight-bold mb-10">Customer Info:</h3>
                        <div class="form-group row">
                            <label class="col-3">First Name</label>
                            <div class="col-9">
                                <input class="form-control form-control-solid" type="text" value="Nick" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Last Name</label>
                            <div class="col-9">
                                <input class="form-control form-control-solid" type="text" value="Watson" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Company Name</label>
                            <div class="col-9">
                                <input class="form-control form-control-solid" type="text" value="Loop Inc." />
                                <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to  your full name.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Contact Phone</label>
                            <div class="col-9">
                                <div class="input-group input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-phone"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control form-control-solid" value="+45678967456" placeholder="Phone" />
                                </div>
                                <span class="form-text text-muted">We ll never share your email with anyone else.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Email Address</label>
                            <div class="col-9">
                                <div class="input-group input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-at"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control form-control-solid" value="nick.watson@loop.com" placeholder="Email" />
                                </div>
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

@endpush
