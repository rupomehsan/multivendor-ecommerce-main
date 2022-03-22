@extends('layouts.admin.index')
@section('content')
    <main id="vendor-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-base-primary">Back To Vendor List</a>

                    <h6 class="my-2">Fashion Nova</h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="shop-tab" data-bs-toggle="tab" data-bs-target="#shop"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Shop
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order"
                                    type="button" role="tab" aria-controls="order" aria-selected="false">Order
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">Product
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="setting-tab" data-bs-toggle="tab" data-bs-target="#setting"
                                    type="button" role="tab" aria-controls="setting" aria-selected="true">Setting
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Transaction
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">Review
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">

                            <div class="row row-cols-2 align-items-center">
                                <div class="col-12">
                                    <div class="card my-2 bottom-shadow">
                                        <div class="card-body">
                                            <p>Vendor wallet</p>

                                            <div class="row">
                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 my-2">
                                                    <div class="card bg-warning text-center py-2 rounded-sm">
                                                        <h4>0.00$</h4>
                                                        <p>Commission given</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card bottom-shadow">

                                    <div class="card-body">
                                        <span class="card-title">Vendor Account</span>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p>Status :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="text-success">Active</p>
                                            </div>

                                            <div class="col-lg-2">
                                                <p>Name :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="">Name</p>
                                            </div>

                                            <div class="col-lg-2">
                                                <p>Phone :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="">0150000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="card bottom-shadow">

                                    <div class="card-body">
                                        <span class="card-title">Shop info</span>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p>Status :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="text-success">Active</p>
                                            </div>

                                            <div class="col-lg-2">
                                                <p>Name :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="">Name</p>
                                            </div>

                                            <div class="col-lg-2">
                                                <p>Phone :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="">0150000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="card bottom-shadow">

                                    <div class="card-body">
                                        <span class="card-title">Bank Info</span>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p>Status :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="text-success">Active</p>
                                            </div>

                                            <div class="col-lg-2">
                                                <p>Name :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="">Name</p>
                                            </div>

                                            <div class="col-lg-2">
                                                <p>Phone :</p>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="">0150000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                            <table class="table table-striped" id="orderTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Payment Status</th>
                                    <th>Total</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#111</td>
                                    <td>12 June, 2022</td>
                                    <td>Ashiqur Rahman</td>
                                    <td>Unpaid</td>
                                    <td>110</td>
                                    <td>Pending</td>
                                    <td>
                                        <a href="" class="btn btn-outline-base">View</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
                            <table class="table table-striped" id="productTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>product name</th>
                                    <th>purchase price</th>
                                    <th>selling price</th>
                                    <th>Featured</th>
                                    <th>active status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>aswdas</td>
                                    <td>12 June, 2022</td>
                                    <td>192.00$</td>
                                    <td>192.00$</td>
                                    <td>Switch</td>
                                    <td>Switch</td>
                                    <td>
                                        <a href="" class="btn btn-outline-base">View</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                            <div class="row row-cols-lg-2 row-cols-1">
                                <div class="col">
                                    <div class="card bottom-shadow my-3">
                                        <div class="card-body">
                                            <div class="card-title">Sales commission:</div>
                                            <hr>

                                            <p class="text-danger">If disabled the system will apply the default
                                                commission system</p>

                                            <form action="">
                                                <div class="form-group">
                                                    <label for="commission" class="form-label" id="commission_label">Commission
                                                        %</label>
                                                    <input type="text" id="commission" class="form-control">
                                                    <span class="text-danger">Error Message</span>
                                                </div>

                                                <button class="btn btn-base-primary my-3">Update</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bottom-shadow my-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="card-title">GST Number:</div>


                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <hr>


                                            <p class="text-danger">If disabled the GST number won’t show in invoice</p>

                                            <form action="">
                                                <div class="form-group">
                                                    <label for="number" class="form-label" id="number_label">Number</label>
                                                    <input type="text" id="number" class="form-control">
                                                    <span class="text-danger">Error Message</span>
                                                </div>

                                                <button class="btn btn-base-primary my-3">Update</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

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
            $('#orderTable').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });
        });
    </script>
@endpush
