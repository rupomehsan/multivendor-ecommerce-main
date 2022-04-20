<?php
$id = request()->segment(4);
?>
@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Edit Category</h4>
                    <form action="{{url('api/v1/products')}}/{{$id}}" id="form" name="form"
                          enctype="multipart/form-data" novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-data" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Data
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-link" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Links
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-attribute" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Attribute
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-discount" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Discount
                                    </button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-contact" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">SEO
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label"><sup
                                                class="required">*</sup> Product Name </label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Product Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Product description</label>
                                        <textarea name="description" id="description"
                                                  placeholder="Description"></textarea>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label"><sup
                                                class="required">*</sup> Meta Tag Title</label>
                                        <input type="text" id="meta_title" name="meta_tag_title"
                                               class="form-control"
                                               placeholder="Meta Tag Title">
                                        <span class="text-danger" id="meta_title_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Meta Tag
                                            Description</label>
                                        <input type="text" id="meta_description" name="meta_description" class="form-control"
                                               placeholder="Meta Tag Description">
                                        <span class="text-danger" id="meta_description_error"></span>

                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Meta Tag Keywords</label>
                                        <input type="text" id="meta_keyword" name="meta_tag_keyword"
                                               class="form-control"
                                               placeholder="Meta Tag Keywords">
                                        <span class="text-danger" id="meta_keyword_error"></span>
                                    </div>


                                </div>

                                <div class="tab-pane fade py-3" id="nav-data" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">

                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Model</label>
                                        <input type="text" id="model" name="model"
                                               class="form-control"
                                               placeholder="Model">
                                        <span class="text-danger" id="model_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">sku</label>
                                        <input type="text" id="sku" name="sku"
                                               class="form-control"
                                               placeholder="sku">
                                        <span class="text-danger" id="sku_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">upc</label>
                                        <input type="text" id="upc" name="upc"
                                               class="form-control"
                                               placeholder="upc">
                                        <span class="text-danger" id="upc_error"></span>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">jan</label>
                                        <input type="text" id="jan" name="jan"
                                               class="form-control"
                                               placeholder="jan">
                                        <span class="text-danger" id="jan_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="isbn_label" class="form-label">Isbn</label>
                                        <input type="text" id="isbn" name="isbn"
                                               class="form-control"
                                               placeholder="Isbn">
                                        <span class="text-danger" id="isbn_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Mpn</label>
                                        <input type="text" id="mpn" name="mpn"
                                               class="form-control"
                                               placeholder="Mpn">
                                        <span class="text-danger" id="mpn_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Location</label>
                                        <input type="text" id="location" name="location"
                                               class="form-control"
                                               placeholder="Location">
                                        <span class="text-danger" id="location_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Quantity</label>
                                        <input type="number" id="quantity" name="quantity"
                                               class="form-control"
                                               placeholder="Quantity">
                                        <span class="text-danger" id="quantity_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Minimum Quantity</label>
                                        <input type="number" id="min_quantity" name="min_quantity"
                                               class="form-control"
                                               placeholder="Minimum Quantity">
                                        <span class="text-danger" id="min_quantity_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Subtract Stock</label>
                                        <select name="subtract" id="subtract" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <span class="text-danger" id="subtract_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Tax Class</label>
                                        <select name="tax_class_id" id="tax_class_id" class="form-control">
                                            <option value="">None</option>
                                        </select>
                                        <span class="text-danger" id="tax_class_id_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Out Of Stock
                                            Status</label>
                                        <input type="text" id="stock_status_id" name="stock_status_id"
                                               class="form-control"
                                               placeholder="Model">
                                        <span class="text-danger" id="stock_status_id_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Available Stock</label>

                                        <input type="text" id="available_stock" name="available_stock"
                                               class="form-control"
                                               placeholder="Model">
                                        <span class="text-danger" id="available_stock_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Requires Shipping</label>
                                        <select name="shipping" id="shipping" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <span class="text-danger" id="shipping_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Date Available</label>
                                        <input type="date" id="date_available" name="date_available"
                                               class="form-control"
                                               placeholder="Model">
                                        <span class="text-danger" id="date_available_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div>
                                            <label for="model" id="model_label" class="form-label mr-5 d-block">Dimensions
                                                (L x W x H)</label>
                                        </div>

                                        <div class="row ml-1">
                                            <input type="text" id="length" name="length"
                                                   class="form-control col-md-3 mr-1"
                                                   placeholder="length">
                                            <input type="text" id="width" name="width"
                                                   class="form-control col-md-3 mr-1"
                                                   placeholder="width">
                                            <input type="text" id="height" name="height"
                                                   class="form-control col-md-3 mr-1"
                                                   placeholder="height">
                                        </div>

                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Length Class</label>
                                        <select name="length_class_id" id="length_class_id" class="form-control">
                                            <option value="1" selected="selected">Centimeter</option>
                                            <option value="2">Millimeter</option>
                                            <option value="3">Inch</option>
                                        </select>
                                        <span class="text-danger" id="quantity_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Weight</label>
                                        <input type="text" id="weight" name="weight"
                                               class="form-control"
                                               placeholder="weight">
                                        <span class="text-danger" id="weight_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="model" id="model_label" class="form-label">Weight Class</label>
                                        <select name="weight_class_id" id="weight_class_id" class="form-control">
                                            <option value="1" selected="selected">Kilogram</option>
                                            <option value="2">Gram</option>
                                            <option value="3">Pound</option>
                                            <option value="4">Ounce</option>
                                        </select>
                                        <span class="text-danger" id="weight_class_id_error"></span>
                                    </div>
                                </div>

                                <div class="tab-pane fade py-3" id="nav-link" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Brand</label>
                                        <br>
                                        <!-- Dropdown -->
                                        <select id='brand_id' name="brand_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Category</label>
                                        <br>
                                        <!-- Dropdown -->
                                        <select id='category_id' name="category_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Filters</label> <br>
                                        <select id='filter_id' name="filter_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                        <span class="text-danger" id="filter_id_error"></span>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Stores</label> <br>
                                        <select id='store_id' name="store_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                        <span class="text-danger" id="store_id_error"></span>
                                    </div>
                                    <div class="form-group mb-3 col-6">
                                        <label for="" class="form-label">Upload Image</label>
                                        <div class="dropzone" id="image-box"></div>
                                        <input type="hidden" id="image" name="image">
                                    </div>


                                </div>

                                <div class="tab-pane fade py-3" id="nav-attribute" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Attribute Name</label>
                                        <div class="row container" id="attribute-name">
                                            <input type="text"  name="attribute[name][]"
                                                   class="form-control col-8 mt-1"
                                                   placeholder="Enter product attribute Name" >
                                            <span class="iconify col-1 mt-1" id="addattr"
                                                  data-icon="akar-icons:circle-plus-fill" style="cursor: pointer"
                                                  data-width="35"></span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Color</label>
                                        <div class="row container" id="color">
                                            <input type="text" id="color" name="attribute[color][]"
                                                   class="form-control col-8"
                                                   placeholder="Enter product color Name" >
                                            <span class="iconify col-1" id="addColor"
                                                  data-icon="akar-icons:circle-plus-fill" style="cursor: pointer"
                                                  data-width="35"></span>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade py-3" id="nav-discount" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Discount Product</label>
                                        <div class="row container" id="discount">

                                        </div>
                                        <span class="text-danger" id="keyword_error"></span>
                                    </div>
                                </div>
                                <div class="tab-pane fade py-3" id="nav-contact" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">SEO</label>
                                        <input type="text" id="keyword" name="keyword" class="form-control"
                                               placeholder="keyword">
                                        <span class="text-danger" id="keyword_error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{url('admin/products')}}"  class="btn btn-outline-base">Cancel</a>
                            <button id="submit-button" type="submit" class="btn btn-base-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('custom-js')
    <script>
        // get edit data
        var editDataCategoryId = ''
        var editDataBrandId = ''
        var editDataFilterId = ''
        var editDataStoreId = ''
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/products"
        }
        // ckeditor;
        // ckeditor;
        let description;
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                window.editor = editor;
                description = editor;
            });
        // file uploader
        // file uploader
        let image = new Dropzone("#image-box", {
            url: window.origin + '/api/v1/products/file-upload',
            method: "post",
            uploadMultiple: true,
            createImageThumbnails: true,
            paramName: "file",
            clickable: true,
            maxFiles: 10,
            parallelUploads: 10,
            addRemoveLinks: true,
            success: function (file, res) {
                if (res.status === "success") {
                    toastr.success(res.message)
                    let defaultExistFile = $('.dz-preview.dz-complete.dz-image-preview')
                    if (defaultExistFile) {
                        defaultExistFile.remove()
                    }
                    $('#image').val(res.data)
                }
            },
            error: function (err) {
                console.log(err)
            }
        });
        // get edit data
        // get edit data
        let id = "{{request()->segment(4)}}"
        url = "{{url('api/v1/products')}}/" + id
        getEditData(url, image)
        // Create or update data
        // Create or update data
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("patch", "submit-button", form);
        })
        // dropdown menu
        // dropdown menu
        // Initialize select2
        $("#category_id").select2();
        /**
         * GET All category
         * **/
        $(document).ready(function () {
            $.ajax({
                url: "{{ URL::to('/api/v1/categories') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    if (res.data.length > 0) {
                        // alert(typeof(editDataParentId));
                        $('#category_id').empty()
                        $('#category_id').append(`
                          <option value='' selected disabled>Parent Category</option>
                        `)
                        res.data.forEach(function (item) {
                            // alert(editDataCategoryId)
                            $('#category_id').append(`
                          <option ${(item.id === editDataCategoryId ? 'selected' : '')} value='${item.id}'>${item.name}</option>
                        `)
                        })
                    }
                    // setTimeout(location.reload.bind(location), 1000);
                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                    // on error, tell the failed
                },
            });
        })
        // dropdown menu
        // dropdown menu
        // Initialize select2
        $("#brand_id").select2();
        /**
         * GET All brands
         * **/
        $(document).ready(function () {
            $.ajax({
                url: "{{ URL::to('/api/v1/brands') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    if (res.data.length > 0) {
                        // alert(typeof(editDataParentId));
                        $('#brand_id').empty()
                        $('#brand_id').append(`
                          <option value='' selected disabled>Select Brand</option>
                        `)
                        res.data.forEach(function (item) {
                            // alert(editDataCategoryId)
                            $('#brand_id').append(`
                          <option ${(item.id === editDataBrandId ? 'selected' : '')} value='${item.id}'>${item.name}</option>
                        `)
                        })
                    }
                    // setTimeout(location.reload.bind(location), 1000);
                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                    // on error, tell the failed
                },
            });
        })
        // dropdown menu
        // dropdown menu
        // Initialize select2
        $("#store_id").select2();
        /**
         * GET All store
         * **/
        $(document).ready(function () {
            $.ajax({
                url: "{{ URL::to('/api/v1/stores') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    if (res.data.length > 0) {
                        // alert(typeof(editDataParentId));
                        $('#store_id').empty()
                        $('#store_id').append(`
                          <option value='' selected disabled>Select Store</option>
                        `)
                        res.data.forEach(function (item) {
                            // alert(editDataCategoryId)
                            $('#store_id').append(`
                          <option ${(item.id === editDataStoreId ? 'selected' : '')} value='${item.id}'>${item.name}</option>
                        `)
                        })
                    }
                    // setTimeout(location.reload.bind(location), 1000);
                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                    // on error, tell the failed
                },
            });
        })
        // dropdown menu
        // dropdown menu
        // Initialize select2
        $("#filter_id").select2();
        /**
         * GET All filter
         * **/
        $(document).ready(function () {
            $.ajax({
                url: "{{ URL::to('/api/v1/filters') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    if (res.data.length > 0) {
                        // alert(typeof(editDataParentId));
                        $('#filter_id').empty()
                        $('#filter_id').append(`
                          <option value='' selected disabled>Select Store</option>
                        `)
                        res.data.forEach(function (item) {
                            // alert(editDataCategoryId)
                            $('#filter_id').append(`
                          <option ${(item.id === editDataFilterId ? 'selected' : '')} value='${item.id}'>${item.name}</option>
                        `)
                        })
                    }
                    // setTimeout(location.reload.bind(location), 1000);
                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                    // on error, tell the failed
                },
            });
        })
    </script>
    <script>
        // attribute
        // attribute
        $(document).on('click','#addattr',function(){

            $("#attribute-name").append('<section> <div class="row"><input type="text" name="attribute[name][]" placeholder="Enter product attribute Name" class="form-control col-8 mt-2"/> <span class="iconify col-1 mt-3 remove-sec"  data-icon="ant-design:minus-circle-filled"  style="cursor: pointer" data-width="35"></span></div></section>');
        });
        $(document).on('click', '.remove-sec', function () {
            $(this).parents('section').remove();
        });
        // color
        // color
        $(document).on('click',"#addColor",function () {
            $("#color").append('<section> <div class="row"><input type="text" name="attribute[color][]" placeholder="Enter product color Name" class="form-control col-8 mt-2"/> <span class="iconify col-1 mt-3 remove-sec"  data-icon="ant-design:minus-circle-filled"  style="cursor: pointer" data-width="35"></span></div></section>');
        });
        $(document).on('click', '.remove-sec', function () {
            $(this).parents('section').remove();
        });
        // discount
        // discount
        $(document).on('click',"#addDiscount",function () {
            $("#discount").append('<section> <div class="row">  <input type="number" id="discount" name="discount[quantity][]" class="form-control col-3 mt-1 mr-1"  placeholder="Quantity"> <input type="text" id="" name="discount[price][]" class="form-control col-3 mt-1 mr-1" placeholder="Price"> <input type="date" id="" name="discount[start_date][]" class="form-control col-2 mt-1 mr-1" placeholder="Start Date"> <input type="date" id="" name="discount[end_date][]" class="form-control col-2 mt-1 mr-1"placeholder="End Date"> <span class="iconify col-1 mt-3 remove-dis"  data-icon="ant-design:minus-circle-filled"  style="cursor: pointer" data-width="35"></span></div></section>');
        });
        $(document).on('click', '.remove-dis', function () {
            $(this).parents('section').remove();
        });
    </script>
@endpush
