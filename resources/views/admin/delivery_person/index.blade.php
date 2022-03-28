@extends('layouts.admin.index')

@section('content')
    <main id="delivery-person-content">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Delivery person</h4>
                            <button class="btn btn-base btn-base-primary" data-bs-toggle="modal" data-bs-target="#deliveryModal">Add Delivery Person</button>
                        </div>


                        <!-- DELIVERY PERSON MODAL -->
                        <form action="">
                            <div class="modal fade" id="deliveryModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">ADD DELIVERY PERSON</h5>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group mb-3">
                                                <label for="name" id="name_label" class="form-label">Delivery Person Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                                <span class="text-danger" id="name_error">err msg</span>
                                            </div>


                                            <div class="form-group my-3">
                                                <label for="name" id="name_label" class="form-label">Email</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                                <span class="text-danger" id="name_error">err msg</span>
                                            </div>



                                            <div class="form-group my-3">
                                                <label for="name" id="name_label" class="form-label">Phone</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                                <span class="text-danger" id="name_error">err msg</span>
                                            </div>



                                            <div class="form-group my-3">
                                                <label for="identity_type" id="name_label" class="form-label">Identity Type</label>
                                                <select id="identity_type" class="form-select">
                                                    <option selected value="passport">NID</option>
                                                    <option  value="passport">Passport</option>
                                                    <option  value="passport">Driving licence</option>
                                                    <option  value="passport">Company ID</option>
                                                </select>
                                                <span class="text-danger" id="name_error">err msg</span>
                                            </div>


                                            <div class="form-group my-3">
                                                <label for="identity_type" id="name_label" class="form-label">Identity Number</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Identity Number">
                                                <span class="text-danger" id="name_error">err msg</span>
                                            </div>

                                            <label for="" class="form-label">Upload Image</label>
                                            <div class="dropzone" id="image-box"></div>
                                            <input type="hidden" id="image" name="logo">


                                        </div>
                                        <div class="modal-footer border-0 justify-content-start">
                                            <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-base-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <table class="table" id="deliveryPersonTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>img</th>
                                    <th>Akash</th>
                                    <th>aks@gmail.com</th>
                                    <th>01950012831</th>
                                    <th>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </th>
                                    <th>
                                        <span class="iconify" data-icon="bxs:edit" data-width="25" data-height="25"></span>
                                        <span class="iconify" data-icon="ant-design:delete-outlined" data-width="25" data-height="25"></span>
                                    </th>
                                </tr>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('custom-js')
    <script>
        $(document).ready(function () {
            $('#deliveryPersonTable').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });
        });


        let image = new Dropzone("#image-box", {

            url: window.origin + "/api/v1/uploads.php",
            method: "post",
            uploadMultiple: false,
            createImageThumbnails: true,
            paramName: "file",
            clickable: true,


            init: function () {
                this.on('addedfile', function (file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });

            },

            success: function (file, res) {
                // let defaultExistFile = $('.dz-preview.dz-complete.dz-image-preview')
                //
                // if (defaultExistFile) {
                //     defaultExistFile.remove()
                // }
                //
                // $('#' + hiddenId).val(res.data)
                // data = res.data;
            },
        });
    </script>
@endpush
