@extends('backend.superadmin.layouts.app')

@push('css')

@endpush

@section('content')
    {{--  <!--begin::Card-->  --}}
    <div class="card card-custom card-sticky" id="kt_page_sticky_card">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Edit Product</h3>
                <i class="mr-2"></i>
            </div>
            {{--  <!--begin::Form-->  --}}

            <div class="card-toolbar">
                <form class="form" id="form" name="form" enctype="multipart/form-data" action="{{route('superadmin.product.update',$product->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <a href="{{route('superadmin.product.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
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
                        <h3 class="text-dark font-weight-bold mb-10">Product Info:</h3>
                        <div class="form-group row">
                            <label class="col-3">Category</label>
                            <div class="col-9">
                                <select class="form-control border border-primary select2" id="category" name="category[]" multiple="multiple" autocomplete="off">
                                    {{--                                    <option disabled selected></option>--}}
                                    @php
                                        $product_category =[];
                                       if(!empty($product->category_id)){
                                       $product_category =json_decode($product->category_id);
                                          }
                                    @endphp
                                    @foreach($categories as $category)


                                            <option value="{{$category->id}}" {{ (in_array($category->id, $product_category)) ? 'selected' : '' }}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Sub Category</label>
                            <div class="col-9">
                                <select class="form-control border border-primary select2" id="subcategory" name="subcategory[]" multiple="multiple" autocomplete="off">

                                    @php
                                        $product_category =[];
                                       if(!empty($product->subcategory_id)){
                                       $product_category =json_decode($product->subcategory_id);
                                          }
                                    @endphp
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}"  {{ (in_array($subcategory->id, $product_category)) ? 'selected' : '' }}>{{$subcategory->category->name}}--{{$subcategory->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Select Manufacturer</label>
                            <div class="col-9">
                                <select class="form-control border border-primary select2" id="manufacturer" name="manufacturer[]" autocomplete="off">
                                    @php
                                        $manufacturer_items =[];
                                       if(!empty($product->manufacturer_id)){
                                       $manufacturer_items =json_decode($product->manufacturer_id);
                                          }
                                    @endphp
                                    <option disabled selected></option>
                                    @foreach($manufacturers as $manufacturer)
                                        <option value="{{$manufacturer->id}}"  {{ (in_array($manufacturer->id, $manufacturer_items)) ? 'selected' : '' }}>{{$manufacturer->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Product Name</label>
                            <div class="col-9">
                                <input class="form-control border border-primary" type="text" value="{{$product->product_name}}" placeholder="Enter Product Name" name="product_name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Product Price</label>
                            <div class="col-9">
                                <input class="form-control border border-primary" type="text" value="{{$product->product_price}}" placeholder="Enter Product Price" name="product_price" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Product Sku</label>
                            <div class="col-9">
                                <input class="form-control border border-primary" type="text" value="{{$product->product_sku}}" placeholder="Enter Product Sku" name="product_sku" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Is featured</label>
                            <div class="col-9">
                                <select class="form-control select2" id="is_featured" name="is_featured" autocomplete="off">
                                    <option disabled selected></option>
                                    <option value="1" {{$product->is_featured == 1 ? 'selected' : '' }}>yes</option>
                                    <option value="0" {{$product->is_featured == 0 ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Is Leatest</label>
                            <div class="col-9">
                                <select class="form-control select2" id="is_latest" name="is_latest" autocomplete="off">
                                    <option disabled selected></option>
                                    <option value="1" {{$product->is_latest == 1 ? 'selected' : '' }}>yes</option>
                                    <option value="0" {{$product->is_latest == 0 ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Product Quantity</label>
                            <div class="col-9">
                                <div class="input-group input-group-solid">

                                    <input type="number" class="form-control"  name="product_quantity" value="{{$product->product_qty}}" placeholder="Quantity" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Status</label>
                            <div class="col-9">
                                <select class="form-control select2" id="status" name="product_status" autocomplete="off">
                                    <option selected disabled></option>
                                    <option value="1"  {{$product->product_status == 1 ? 'selected' : '' }} >Active</option>
                                    <option value="0" {{$product->product_status == 0 ? 'selected' : '' }}  >Not Active</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Product Discription</label>
                            <div class="col-9">
                                <textarea class="summernote" name="product_description" id="kt_summernote_1">{!! $product->product_long_description !!}</textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-3">Video EmbedCode Link</label>
                            <div class="col-9">
                                <div class="input-group input-group-solid">

                                    <input type="text" class="form-control form-control-solid" name="product_video_link" value="{{$product->product_video_link}}" placeholder="Enter Video EmbedCode Link" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Product Image 1:</label>
                            <div class="col-9 ">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_9" style="background-image: url({{asset('images')}}/{{$product->product_image}})">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image_1" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Default empty input with blank image</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Product Image 2:</label>
                            <div class="col-9 ">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url({{asset('images')}}/{{$product->product_image_1}})">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image_2" accept=".png, .jpg, .jpeg" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>

                                </div>
                                <span class="form-text text-muted">Default empty input with blank image</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Product Image 3:</label>
                            <div class="col-9 ">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_6" style="background-image: url({{asset('images')}}/{{$product->product_image_2}})">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image_3" accept=".png, .jpg, .jpeg" />

                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>

                                </div>
                                <span class="form-text text-muted">Default empty input with blank image</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Product Image 4:</label>
                            <div class="col-9 ">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_7" style="background-image: url({{asset('images')}}/{{$product->product_image_3}})">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image_4" accept=".png, .jpg, .jpeg" />

                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>

                                </div>
                                <span class="form-text text-muted">Default empty input with blank image</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3">Product Image 5:</label>
                            <div class="col-9 ">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_8" style="background-image: url({{asset('images')}}/{{$product->product_image_4}})">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image_5" accept=".png, .jpg, .jpeg" />
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

            <!--begin::Page Scripts(used by this page)-->
            <script src="{{asset('resource/backend')}}/assets/js/pages/crud/forms/editors/summernote.js"></script>
            <!--end::Page Scripts-->

            <script >
                $(document).ready(function(){


                    // select Category
                    $('#category').select2({
                        placeholder: "Select Category",
                        tags: true,
                        allowClear: true,
                        tokenSeparators: [',', ' ']
                    });
                    // select sub Category
                    $('#subcategory').select2({
                        placeholder: "Select SubCategory",
                        tags: true,
                        allowClear: true,
                        tokenSeparators: [',', ' ']
                    });
                    // select sub Category
                    $('#manufacturer').select2({
                        placeholder: "Select Manufacturer",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });

                    // select is feature
                    $('#is_featured').select2({
                        placeholder: "Select Feature",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });

                    // select is feature
                    $('#is_latest').select2({
                        placeholder: "Select Latest",
                        // tags: true,
                        allowClear: true,
                        // tokenSeparators: [',', ' ']
                    });

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
