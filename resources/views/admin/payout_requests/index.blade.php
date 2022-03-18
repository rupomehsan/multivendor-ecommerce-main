@extends('layouts.admin.index')
@section('content')
    <main id="help-content">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Payout Requests</h4>

                        <table class="table" id="help-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Request ID</th>
                                <th>Vendor Name</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>123</td>
                                <td>Akash</td>
                                <td>
                                    Requested amount: 234,343
                                    <br/>
                                    Admin commission: -234.00
                                    <br/>
                                    Payable amount: 200,000
                                </td>
                                <td>Pending</td>
                                <td>12 June, 2022</td>
                                <td>
                                    <button class="btn btn-outline-base" data-bs-target="#payoutModal"
                                            data-bs-toggle="modal">
                                        Pay Now
                                    </button>
                                </td>

                            </tr>

                            <tr>
                                <td>1</td>
                                <td>123</td>
                                <td>Akash</td>
                                <td>
                                    Requested amount: 234,343
                                    <br/>
                                    Admin commission: -234.00
                                    <br/>
                                    Payable amount: 200,000
                                </td>
                                <td>Pending</td>
                                <td>12 June, 2022</td>
                                <td>
                                    <button class="btn btn-outline-base">
                                        Pay Now
                                    </button>
                                </td>

                            </tr>
                            </tbody>
                        </table>


                        <!-- Modal -->
                        <form action="">
                            <div class="modal fade" id="payoutModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">PAYOUT</h5>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row row-cols-2">
                                                <div class="col">
                                                    <h6>Bank Name :</h6>
                                                </div>
                                                <div class="col">
                                                    <span>
                                                          ProjectX
                                                    </span>
                                                </div>

                                                <div class="col">
                                                    <h6>Account Type :</h6>
                                                </div>
                                                <div class="col">
                                                    <span>
                                                          Savings
                                                    </span>
                                                </div>

                                                <div class="col">
                                                    <h6>Account Number :</h6>
                                                </div>
                                                <div class="col">
                                                    <span>
                                                          14502001093
                                                    </span>
                                                </div>
                                            </div>


                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Request ID</label>
                                                <input type="text" id="request_id" name="request_id" class="form-control" placeholder="MPSAD6ASD">
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>

                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Vendor Name</label>
                                                <input type="text" id="request_id" name="request_id" class="form-control" placeholder="MPSAD6ASD">
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>


                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Payable amount</label>
                                                <input type="text" id="request_id" name="request_id" class="form-control" placeholder="MPSAD6ASD">
                                                <span class="text-danger" id="request_id_error">Err Msg</span>
                                            </div>

                                            <div class="form-group my-2">
                                                <label for="request_id" id="request_id_label" class="form-label">Payment method</label>

                                                <select name="" id="" class="form-select">
                                                    <option value="" selected>Select Payment Method </option>
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
