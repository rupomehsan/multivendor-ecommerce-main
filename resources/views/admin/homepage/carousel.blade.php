@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color text-uppercase">Carousel</h4>

                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-4 col-sm-6 col-12 my-3">
                            <form class="search-form">
                                <input class="search-field" type="text" placeholder="Search">
                                <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                      data-height="25"></span>
                            </form>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-12">
                            <button class="btn btn-base btn-base-primary" data-bs-target="#carouselModal" data-bs-toggle="modal">
                                <span class="iconify me-2" data-icon="carbon:add-filled" style="color: white;"
                                      data-width="20" data-height="20"></span>
                                Add Carousel
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="carouselModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">ADD Carousel</h5>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                           <label for="name" id="name_label" class="form-label">Product Category</label>
                                           <input type="text" id="name" name="name" placeholder="Sub Category Name" class="form-control">
                                           <span class="text-danger" id="name_error">Error Msg</span>
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

                        <div class="col-lg-12 col-sm-12 col-12">
                            <table class="table table-striped" id="category-table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Carousel Image</th>
                                    <th>Product Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img class="avatar-table" src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                    </td>
                                    <td>Lotion</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <span class="iconify" data-icon="bxs:edit" data-width="20"
                                              data-height="20"></span>
                                        <span class="iconify" data-icon="ant-design:delete-outlined"
                                              data-width="20" data-height="20"></span>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('custom-js')
    <script>
        $(document).ready(function () {
            $('#category-table').DataTable({
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
