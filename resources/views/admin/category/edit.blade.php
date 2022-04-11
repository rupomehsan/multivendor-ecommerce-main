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
                    <form action="{{url('api/v1/categories')}}/{{$id}}" id="form" name="form"
                          enctype="multipart/form-data" novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Data
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
                                                class="required">*</sup> Category Name </label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Category Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Category description</label>
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
                                        <label for="host" id="host_label" class="form-label">Parent Category</label>
                                        <br>
                                        <!-- Dropdown -->
                                        <select id='parentCategory' name="parent_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Filters</label>
                                        <input type="text" id="filter_id" name="filter_id" class="form-control"
                                               placeholder="filter_id">
                                        <span class="text-danger" id="filter_id_error"></span>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Stores</label>
                                        <input type="text" id="store_id" name="store_id" class="form-control"
                                               placeholder="store_id">
                                        <span class="text-danger" id="store_id_error"></span>
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
            window.location.href = window.origin + "/admin/category"
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
        url = "{{url('api/v1/categories')}}/" + id
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
        $("#parentCategory").select2();
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
                        $('#parentCategory').empty()
                        $('#parentCategory').append(`
                          <option value='' selected disabled>Parent Category</option>
                        `)
                        res.data.forEach(function (item) {
                            $('#parentCategory').append(`
                          <option ${(item.id === editDataParentId ? 'selected' : '')} value='${item.id}'>${item.name}</option>
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
@endpush
