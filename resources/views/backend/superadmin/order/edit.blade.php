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
                <form class="form" id="form" name="form" enctype="multipart/form-data" action="{{route('superadmin.order.update',$order->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <a href="{{route('superadmin.order.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                        <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary font-weight-bolder">
                            <i class="ki ki-check icon-sm"></i>update</button>

                    </div>
            </div>
        </div>
        <div class="card-body">


            <div class="row">
                <div class="col-xl-2"></div>

                <div class="col-xl-8">
                    <div class="my-5">
                        <h3 class="text-dark font-weight-bold mb-10">Order Info:</h3>

                        <div class="form-group row">
                            <label class="col-3">Order Id</label>
                            <div class="col-9">
                                <input class="form-control border border-danger"
                                type="text" name="order_number" autocomplete="off" value="{{$order->order_number}}" disabled/>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-3">Order Status</label>
                            <div class="col-9">
                                <select class="form-control select2" id="status" name="status" autocomplete="off">
                                    <option selected disabled></option>
                                    <option value="pending" @if($order->status == 'pending' ) selected @endif >pending</option>
                                    <option value="processing" @if($order->status == 'processing' ) selected @endif >processing</option>
                                    <option value="completed" @if($order->status == 'completed' ) selected @endif >completed</option>
                                    <option value="declined" @if($order->status == 'declined' ) selected @endif >declined</option>
                                    <option value="canceled" @if($order->status == 'canceled' ) selected @endif >canceled</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Order Status</label>
                            <div class="col-9">
                                <select class="form-control select2" id="is_paid" name="is_paid" autocomplete="off">
                                    <option selected disabled></option>
                                    <option value="0" @if($order->is_paid == '0' ) selected @endif >Unpaid</option>
                                    <option value="1" @if($order->is_paid == '1' ) selected @endif >Paid</option>

                                </select>
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
                        placeholder: "Select status",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });
                       // select payment
                    $('#is_paid').select2({
                        placeholder: "Select Payment",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });
                });

            </script>


    @endpush
