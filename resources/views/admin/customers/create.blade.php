@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Add Customer</h4>
                    <form action="{{url('api/v1/customers')}}" id="form" name="form" enctype="multipart/form-data"
                          novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General Information
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Affiliate
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">First Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="First Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Lats Name</label>
                                        <input type="text" id="lastname" name="lastname" class="form-control"
                                               placeholder="last_Name">
                                        <span class="text-danger" id="last_name_error"></span>
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
                                        <label for="host" id="host_label" class="form-label">Password</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                               placeholder="Password">
                                        <span class="text-danger" id="password_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Confirm Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                               placeholder="Confirm Password">
                                        <span class="text-danger" id="confirm_password_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
                                        <span class="text-danger" id="phone_error"></span>
                                    </div>

                                    <div class="form-group mb-3 col-6">
                                        <label for="" class="form-label">Upload Image</label>
                                        <div class="dropzone" id="image-box"></div>
                                        <input type="hidden" id="image" name="image">
                                    </div>
                                </div>

                                <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Company</label>
                                        <input type="text" id="company_name" name="company_name" class="form-control"
                                               placeholder="Company Name">
                                        <span class="text-danger" id="company_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Web Site</label>
                                        <input type="text" id="website" name="website" class="form-control"
                                               placeholder="Web Site ">
                                        <span class="text-danger" id="store_owner_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Tracking Code</label>
                                        <input type="text" id="tracking_code" name="tracking_code" class="form-control"
                                               placeholder="Tracking Cod">
                                        <span class="text-danger" id="tracking_code_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Commission (%)</label>
                                        <input type="text" id="commission" name="commission" class="form-control"
                                               placeholder="commission">
                                        <span class="text-danger" id="email_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Tax ID</label>
                                        <input type="number" id="tax_id" name="tax_id" class="form-control"
                                               placeholder="Tax ID">
                                        <span class="text-danger" id="Tax ID_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Payment Method </label>
                                        <select name="payment_method" id="" class="form-control">
                                            <option value="Cheque">Cheque</option>
                                            <option value="PayPal">PayPal</option>
                                            <option value="Bank Transfer">Bank Transfer</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Cheque Payee Name</label>
                                        <input type="text" id="cheque_payee_name" name="cheque_payee_name" class="form-control"
                                               placeholder="Cheque Payee Name">
                                        <span class="text-danger" id="cheque_payee_name_error"></span>
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
        let description;
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                window.editor = editor;
                description = editor;
            });
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/customers"
        }

        // image Uploader dropZone;
        // image Uploader dropZone;
        let image = new Dropzone("#image-box", {
            url: window.origin + '/api/v1/customers/file-upload',
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
