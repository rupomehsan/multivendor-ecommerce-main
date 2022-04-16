<?php
$id = request()->segment(4);
?>
@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Edit Vendors</h4>
                    <form action="{{url('api/v1/vendors')}}/{{$id}}" id="form" name="form" enctype="multipart/form-data"
                          novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">store
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label"><sup
                                                class="required">*</sup>Store url</label>
                                        <input type="text" id="store_url" name="store_url" class="form-control"
                                               placeholder="Vendor Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label"><sup
                                                class="required">*</sup>SSL URL</label>
                                        <input type="text" id="ssl_url" name="ssl_url" class="form-control"
                                               placeholder="Vendor Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Meta Tag Description</label>
                                        <textarea name="description" id="description"
                                                  placeholder="Description"></textarea>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label"><sup
                                                class="required">*</sup> Meta Tag Title</label>
                                        <input type="text" id="meta_tag_title" name="meta_tag_title"
                                               class="form-control"
                                               placeholder="Meta Tag Title">
                                        <span class="text-danger" id="meta_tag_title_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Meta Tag
                                            Description</label>
                                        <input type="text" id="meta_tag_desc" name="meta_tag_desc" class="form-control"
                                               placeholder="Meta Tag Description">
                                        <span class="text-danger" id="meta_tag_desc_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Meta Tag Keywords</label>
                                        <input type="text" id="meta_tag_keyword" name="meta_tag_keyword"
                                               class="form-control"
                                               placeholder="Meta Tag Keywords">
                                        <span class="text-danger" id="meta_tag_keyword_error"></span>
                                    </div>
                                </div>


                                <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Store Name</label>
                                        <input type="text" id="store_name" name="store_name" class="form-control"
                                               placeholder="Store Name">
                                        <span class="text-danger" id="store_name_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Store Owner</label>
                                        <input type="text" id="name" name="store_owner" class="form-control"
                                               placeholder="store_owner">
                                        <span class="text-danger" id="store_owner_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Address</label>
                                        <input type="text" id="address" name="address" class="form-control"
                                               placeholder="Address">
                                        <span class="text-danger" id="store_owner_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                               placeholder="Phone">
                                        <span class="text-danger" id="phone_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Opening Time</label>
                                        <input type="text" id="opening_time" name="opening_time" class="form-control"
                                               placeholder="Opening Time">
                                        <span class="text-danger" id="store_owner_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Comments</label>
                                        <input type="text" id="comments" name="comments" class="form-control"
                                               placeholder="Comments">
                                        <span class="text-danger" id="comments_error"></span>
                                    </div>
                                    <div class="form-group mb-3 col-6">
                                        <label for="" class="form-label">Upload Image</label>
                                        <div class="dropzone" id="image-box"></div>
                                        <input type="hidden" id="image" name="image">
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
                            <a href="{{url('admin/category')}}" class="btn btn-outline-base">Cancel</a>
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
        var editDataParentId = ''
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/vendors"
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
            url: window.origin + '/api/v1/categories/file-upload',
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
        url = "{{url('api/v1/vendors')}}/" + id
        getEditData(url, image)
        // Create or update data
        // Create or update data
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("patch", "submit-button", form);
        })


    </script>
@endpush
