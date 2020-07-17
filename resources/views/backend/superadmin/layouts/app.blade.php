@include('backend.superadmin.layouts.partial.header')

@include('backend.superadmin.layouts.partial.topbar')

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        @include('backend.superadmin.layouts.partial.sidebar')



        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                    </div>
                    <!--end::Header Menu Wrapper-->

                    <!--begin::Topbar-->
                    <div class="topbar">

                        <!--begin::User-->
                        <div class="topbar-item">
                            <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->username}}</span>
                                <span class="symbol symbol-35 symbol-light-success">
                                    <span class="symbol-label font-size-h5 font-weight-bold">{{Auth::user()->username[0]}}</span>
                                </span>
                            </div>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-2">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center">
                        </div>
                        <!--end::Toolbar-->
                    </div>
                </div>
                <!--end::Subheader-->

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->

                    <div class="container">
                        <!--begin::Dashboard-->

                        @yield('content')

                        <!--end::Dashboard-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->




@include('backend.superadmin.layouts.partial.footer')
