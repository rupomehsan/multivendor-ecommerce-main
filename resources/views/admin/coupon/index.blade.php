@extends('layouts.admin.index')
@section('content')
    <main id="help-content">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Coupons</h4>
                            <button class="btn btn-base btn-base-primary" data-bs-target="#couponModal"
                                    data-bs-toggle="modal">Add Coupon
                            </button>
                        </div>


                        <table class="table" id="help-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Coupon Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>per user usage</th>
                                <th>start date</th>
                                <th>end Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>ASK 3DA</td>
                                <td>Percentage</td>
                                <td>10</td>
                                <td>5</td>
                                <td>12 June, 2022</td>
                                <td>12 June, 2022</td>
                                <td>pending</td>
                                <td>
                                    <span class="iconify" data-icon="bxs:edit" data-width="20" data-height="20"></span>
                                    <span class="iconify" data-icon="ant-design:delete-outlined" data-width="20"
                                          data-height="20"></span>
                                </td>

                            </tr>


                            </tbody>
                        </table>


                        <!-- Modal -->
                        <form action="">
                            <div class="modal fade" id="couponModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">ADD COUPON</h5>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group mb-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Coupon
                                                    name</label>
                                                <input type="text" id="request_id" name="request_id"
                                                       class="form-control" placeholder="MPSAD6ASD">
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>


                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Coupon
                                                    Type</label>
                                                <select name="" id="" class="form-select">
                                                    <option value="" selected>Select Coupon Type</option>
                                                </select>
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>


                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Per
                                                    User Usage</label>
                                                <select name="" id="" class="form-select">
                                                    <option value="" selected>Select Coupon Type</option>
                                                </select>
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>


                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Start
                                                    Date</label>
                                                <input type="date" id="request_id" name="request_id"
                                                       class="form-control" placeholder="MPSAD6ASD">
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>


                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">End
                                                    Date</label>
                                                <input type="date" id="request_id" name="request_id"
                                                       class="form-control" placeholder="MPSAD6ASD">
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>
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
        });
    </script>
@endpush
