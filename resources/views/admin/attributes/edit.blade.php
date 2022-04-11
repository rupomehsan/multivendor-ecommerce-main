<?php
$id = request()->segment(4);
?>
@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Edit Attributes</h4>
                    <form action="{{url('api/v1/attributes')}}/{{$id}}" id="form" name="form"
                          enctype="multipart/form-data" novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label"><sup
                                                class="required">*</sup> Attributes Name </label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Attributes Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{url('admin/attributes')}}" class="btn btn-outline-base">Cancel</a>
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
            window.location.href = window.origin + "/admin/attributes"
        }
        // ckeditor;
        // ckeditor;
        let description;
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                window.editor = editor;
                description = editor;
            });

        // get edit data
        // get edit data
        let id = "{{request()->segment(4)}}"
        url = "{{url('api/v1/attributes')}}/" + id
        getEditData(url)
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
                url: "{{ URL::to('/api/v1/attributes') }}",
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
