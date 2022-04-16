@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Add Suppliers</h4>
                    <form action="{{url('api/v1/suppliers')}}" id="form" name="form" enctype="multipart/form-data"
                          novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General Information
                                    </button>

                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="First Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Code Name</label>
                                        <input type="text" id="code_name" name="code_name" class="form-control"
                                               placeholder="Code Name">
                                        <span class="text-danger" id="code_name_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="address" class="form-label">Address</label>
                                        <input type="text" id="address" name="address" class="form-control"
                                               placeholder="Address">
                                        <span class="text-danger" id="address_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                               placeholder="Email">
                                        <span class="text-danger" id="email_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">City</label>
                                        <input type="text" id="city" name="city" class="form-control"
                                               placeholder="Password">
                                        <span class="text-danger" id="password_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">State</label>
                                        <input type="text" id="state" name="state" class="form-control"
                                               placeholder="Confirm Password">
                                        <span class="text-danger" id="confirm_password_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
                                        <span class="text-danger" id="phone_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Country</label>
                                        <input type="text" id="country" name="country" class="form-control" placeholder="Phone">
                                        <span class="text-danger" id="phone_error"></span>
                                    </div>
                                 <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Details</label>
                                        <input type="text" id="details" name="details" class="form-control" placeholder="Phone">
                                        <span class="text-danger" id="phone_error"></span>
                                    </div>
{{--                                    <div class="form-group mb-3 col-6">--}}
{{--                                        <label for="" class="form-label">Upload Image</label>--}}
{{--                                        <div class="dropzone" id="image-box"></div>--}}
{{--                                        <input type="hidden" id="image" name="image">--}}
{{--                                    </div>--}}
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{url('admin/suppliers')}}" class="btn btn-outline-base">Cancel</a>
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
        let description;
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                window.editor = editor;
                description = editor;
            });
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/suppliers"
        }

        // image Uploader dropZone;
        // image Uploader dropZone;
        // let image = new Dropzone("#image-box", {
        //     url: window.origin + '/api/v1/suppliers/file-upload',
        //     method: "post",
        //     uploadMultiple: true,
        //     createImageThumbnails: true,
        //     paramName: "file",
        //     clickable: true,
        //     maxFiles: 10,
        //     parallelUploads: 10,
        //     addRemoveLinks: true,
        //     success: function (file, res) {
        //         if (res.status === "success") {
        //             toastr.success(res.message)
        //             let defaultExistFile = $('.dz-preview.dz-complete.dz-image-preview')
        //             if (defaultExistFile) {
        //                 defaultExistFile.remove()
        //             }
        //             $('#image').val(res.data)
        //
        //         }
        //     },
        //     error: function (err) {
        //         console.log(err)
        //     }
        // });
        //add item
        //add item
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })
        //page restricted
        //page restricted
        let page = "{{request()->segment(2)}}";
        pageRestricted(page);

    </script>

@endpush
