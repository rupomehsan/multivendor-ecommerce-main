@extends('layouts.admin.index')
@section('content')
    <main id="vendor-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color text-uppercase">Vendors</h4>

                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-4 col-sm-6 col-12 my-3">
                            <form class="search-form">
                                <input class="search-field" type="text" placeholder="Search">
                                <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                      data-height="25"></span>
                            </form>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-12">
                            <button class="btn btn-base btn-base-primary" data-bs-target="#vendorModal"
                                    data-bs-toggle="modal">
                                <span class="iconify me-2" data-icon="carbon:add-filled" style="color: white;"
                                      data-width="20" data-height="20"></span>
                                Add Vendor
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="vendorModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">ADD Vendor</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name" id="name_label" class="form-label">Category Name</label>
                                            <input type="text" id="name" name="name" placeholder="Category Name"
                                                   class="form-control">
                                            <span class="text-danger" id="name_error">Error Msg</span>
                                        </div>
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
                                    <th>Vendor Image</th>
                                    <th>Vendor Name</th>
                                    <th>Vendor Email</th>
                                    <th>Vendor Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img class="avatar-table"
                                             src="https://images.unsplash.com/photo-1576595879571-5402d294c407?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80"
                                             alt="">
                                    </td>
                                    <td>Ice Cream</td>
                                    <td>ice@cream.com</td>
                                    <td>0195512821</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <a href="{{url('admin/vendors/view')}}">view</a>
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
        });
    </script>
@endpush
