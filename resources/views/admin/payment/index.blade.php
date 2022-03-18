@extends('layouts.admin.index')
@section('content')
    <main id="help-content">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Payments</h4>
                            <button class="btn btn-base btn-base-primary" data-bs-target="#couponModal"
                                    data-bs-toggle="modal">Add Payment
                            </button>
                        </div>


                        <table class="table" id="help-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Payment Category</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>COD</td>
                                <td>Cash Delivery</td>
                                <td>pending</td>
                            </tr>

                            </tbody>
                        </table>


                        <!-- Modal -->
                        <form action="">
                            <div class="modal fade" id="couponModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">ADD Payment</h5>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group mb-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Payment
                                                    name</label>
                                                <input type="text" id="request_id" name="request_id"
                                                       class="form-control" placeholder="MPSAD6ASD">
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>


                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Payment Category</label>
                                                <select name="" id="" class="form-select">
                                                    <option value="" selected>Select Payment Type</option>
                                                </select>
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
