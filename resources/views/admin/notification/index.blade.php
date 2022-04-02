@extends('layouts.admin.index')

@section('content')
    <main id="notification-content">
        <div class="wrapper">

            <div class="row row-cols-lg-2 align-items-center mb-3">
                <div class="col-lg-8 col-12 mb-3">
                    <h2 class="title-underline font-size-sm-3 position-relative">Manage Notification</h2>
                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-3">
                            <button class="btn btn-base btn-base-primary" data-bs-target="#notificationModal"
                                    data-bs-toggle="modal">
                                <span class="iconify me-2" data-icon="carbon:add-filled" style="color: white;"
                                      data-width="20" data-height="20"></span>
                                Add Notification
                            </button>
                        </div>

                        <div class="col-lg-6  mb-3">
                            <button class="btn btn-base btn-base-primary" data-bs-target="#notificationAPIModal"
                                    data-bs-toggle="modal">
                                <span class="iconify me-2" data-icon="ant-design:setting-filled" style="color: white;"
                                      data-width="20" data-height="20"></span>
                                Notification API
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Add Notification Modal -->
            <form action="{{url('api/v1/notifications')}}" name="form" id="form" novalidate>
                <div class="modal fade" id="notificationModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title text-uppercase">Add notification</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group my-3">
                                    <label for="title" id="title_label" class="form-label">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Notification Title"
                                           class="form-control">
                                    <span class="text-danger" id="title_error"></span>
                                </div>
                                <div class="form-group my-3">
                                    <label for="description" id="description_label"
                                           class="form-label">Description</label>
                                    <textarea type="text" id="description" name="description"
                                              placeholder="Notification Description"
                                              class="form-control"></textarea>
                                    <span class="text-danger" id="description_error"></span>
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="form-label">Upload Image</label>
                                    <div class="dropzone" id="image-box"></div>
                                    <input type="hidden" id="image" name="image">
                                </div>
                                <div class="form-group my-3">
                                    <label for="link" id="link_label" class="form-label">External Link</label>
                                    <input type="text" id="link" name="link" placeholder="External Link"
                                           class="form-control">
                                    <span class="text-danger" id="link_error"></span>
                                </div>
                            </div>
                            <div class="modal-footer border-0 justify-content-start">
                                <button type="button" class="btn btn-outline-base" data-bs-dismiss="modal">Cancel
                                </button>
                                <button id="submit-button2" type="submit" class="btn btn-base-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- OneSignal Notification API Modal -->
            <form action="{{url('api/v1/notifications/manage-notifications/store')}}" name="form2" id="form2"
                  novalidate>
                <div class="modal fade" id="notificationAPIModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header border-0">
                                <h5 class="modal-title text-uppercase">Add OneSignal API</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="app_id" id="app_id_label" class="form-label">OneSignal APP
                                        ID</label>
                                    <input type="text" id="app_id" name="app_id" placeholder="OneSignal APP ID"
                                           class="form-control">
                                    <span class="text-danger" id="app_id_error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="api_key" id="api_key_label" class="form-label">OneSignal API
                                        KEY</label>
                                    <input type="text" id="api_key" name="api_key" placeholder="OneSignal API KEY"
                                           class="form-control">
                                    <span class="text-danger" id="api_key_error"></span>
                                </div>

                            </div>
                            <div class="modal-footer border-0 justify-content-start">
                                <button type="button" class="btn btn-outline-base" data-bs-dismiss="modal">Cancel
                                </button>
                                <button id="submit-button" type="submit" class="btn btn-base-primary">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>


            <table class="table table-striped" id="notificationTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1</td>
                    <td>Notification Title</td>
                    <td>Notification Description</td>
                    <td>12 June, 2022</td>
                    <td>
                        <button class="btn btn-outline-base">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Notification Title</td>
                    <td>Notification Description</td>
                    <td>12 June, 2022</td>
                    <td>
                        <button class="btn btn-outline-base">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </main>
@endsection

@push('custom-js')

    <script>
        function redirectPage() {
            window.location.href = window.origin + "/admin/notification"
        }
        $(document).ready(function () {
            $('#notificationTable').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });
        });

        // imageUploader
        let image = new Dropzone("#image-box", {
            url: window.origin + '/api/v1/notifications/file-upload',
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
        // get data //
        var mngNtfurl = "/api/v1/notifications/manage-notifications/get";
        getEditData(mngNtfurl);
        // store data //
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })
        $('#form2').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button2", form);
        })
        //page pageRestricted //
        let page = "{{request()->segment(2)}}";
        pageRestricted(page);
        // end  pageRestricted //
    </script>
@endpush
