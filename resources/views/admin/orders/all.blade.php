@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">


                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-2 col-sm-2 col-12">
                            <h4 class="card-title text-base-color text-uppercase">Order All</h4>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 my-3">
                            <form class="search-form">
                                <input class="search-field" type="text" placeholder="Search">
                                <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                      data-height="25"></span>
                            </form>
                        </div>


                        <div class="col-lg-12 col-sm-12 col-12">
                            <table class="table table-striped" id="category-table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Payment Type</th>
                                    <th>Payment Status</th>
                                    <th>Total</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>120320</td>
                                    <td>12 June, 2022</td>
                                    <td>Akash</td>
                                    <td>COD</td>
                                    <td>Unpaid</td>
                                    <td>123$</td>
                                    <td>On Delivery</td>
                                    <td>
                                        <a href="{{url('admin/orders/view')}}">
                                            View
                                        </a>
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
