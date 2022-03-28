@extends('layouts.admin.index')
@section('content')
    <main id="help-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-uppercase text-base-color">Brands</h4>

                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-4 col-sm-6 col-12 my-3">
                            <form class="search-form">
                                <input class="search-field" type="text" placeholder="Search">
                                <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                      data-height="25"></span>
                            </form>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-12">
                            <button class="btn btn-base btn-base-primary" data-bs-target="#brandModal"
                                    data-bs-toggle="modal">
                                <span class="iconify me-2" data-icon="carbon:add-filled" style="color: white;"
                                      data-width="20" data-height="20"></span>
                                Add Brands
                            </button>
                        </div>
                    </div>


                    <table class="table" id="help-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand Image</th>
                            <th>Brand Name</th>
                            <th>Brand Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="" alt="brand-img">
                            </td>
                            <td>NOIR</td>
                            <td>Clothing brand</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </td>
                            <td>
                                <span class="iconify" data-icon="bxs:edit" data-width="20" data-height="20"></span>
                                <span class="iconify" data-icon="ant-design:delete-outlined" data-width="20" data-height="20"></span>
                            </td>
                        </tr>

                        </tbody>
                    </table>


                    <!-- Modal -->
                    <form action="">
                        <div class="modal fade" id="brandModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">ADD Payment</h5>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group mb-2">
                                            <label for="request_id" id="request_id_label" class="form-label">Brand
                                                name</label>
                                            <input type="text" id="request_id" name="request_id"
                                                   class="form-control" placeholder="MPSAD6ASD">
                                            <span class="text-danger" id="request_id_error">Err Msg</span>
                                        </div>


                                        <div class="form-group mb-2">
                                            <label for="request_id" id="request_id_label" class="form-label">Brand
                                                Category</label>
                                            <input type="text" id="request_id" name="request_id"
                                                   class="form-control" placeholder="MPSAD6ASD">
                                            <span class="text-danger" id="request_id_error">Err Msg</span>
                                        </div>

                                        <label for="" class="form-label">Upload Image</label>
                                        <div class="dropzone" id="image-box"></div>
                                        <input type="hidden" id="image" name="logo">
                                    </div>


                                    <div class="modal-footer border-0 justify-content-start">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <button type="button" class="btn btn-base-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection

@push('custom-js')
    <script>
        $(document).ready(function () {
            $('#help-table').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
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
        });
    </script>
@endpush
