@extends('layouts.admin.index')
@section('content')
    <main id="dashboard-content">
        <h6>👋 Hello!</h6>
        <h4>Welcome <span class="text-base-color"> Onboard</span></h4>

        <h2 class="title-underline font-size-sm-2 position-relative my-4">User Overview</h2>

        <!-- ===== Total Count ===== -->
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-orange-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

        </div>

        <!-- ===== Order Table ===== -->
        <div class="card p-4 border-0 rounded-sm">

            <h5>New orders</h5>

            <table class="table table-striped" id="order-table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vendors</th>
                    <th scope="col">order number</th>
                    <th scope="col">number of products</th>
                    <th scope="col">Customer</th>
                    <th scope="col">order Total</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Fashion Nova</td>
                    <td>GUXKVK3XW6</td>
                    <td>1</td>
                    <td>Fashion Nova</td>
                    <td>2,000.00</td>
                    <td>
                        <button class="btn btn-outline-base px-4 py-1">View</button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td>Fashion Nova</td>
                    <td>GUXKVK3XW6</td>
                    <td>1</td>
                    <td>Fashion Nova</td>
                    <td>2,000.00</td>
                    <td>
                        <button class="btn btn-outline-base px-4 py-1">View</button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td>Fashion Nova</td>
                    <td>GUXKVK3XW6</td>
                    <td>1</td>
                    <td>Fashion Nova</td>
                    <td>2,000.00</td>
                    <td>
                        <button class="btn btn-outline-base px-4 py-1">View</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- ===== Top Cards ===== -->
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12 my-2">
                <div class="card border-0 rounded-sm">
                    <div class="card-body">
                        <h6 class="card-title">Top stores by order</h6>

                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Order: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Order: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Order: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Order: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Order: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Order: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12 my-2">
                <div class="card border-0 rounded-sm">
                    <div class="card-body">
                        <h6 class="card-title">Top selling products</h6>

                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Sold: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Sold: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Order: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Sold: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Sold: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div class="item-title">
                                        <span>Sold: 150</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-3" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12 my-2">
                <div class="card border-0 rounded-sm">
                    <div class="card-body">
                        <h6 class="card-title">Most rated products</h6>

                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div>
                                        <span class="iconify" data-icon="bxs:star" style="color: #ffce31;" data-width="25" data-height="25"></span>
                                        <span>1.3k 5 stars</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-1" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div>
                                        <span class="iconify" data-icon="bxs:star" style="color: #ffce31;" data-width="25" data-height="25"></span>
                                        <span>1.3k 5 stars</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-1" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div>
                                        <span class="iconify" data-icon="bxs:star" style="color: #ffce31;" data-width="25" data-height="25"></span>
                                        <span>1.3k 5 stars</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-1" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div>
                                        <span class="iconify" data-icon="bxs:star" style="color: #ffce31;" data-width="25" data-height="25"></span>
                                        <span>1.3k 5 stars</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-1" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div>
                                        <span class="iconify" data-icon="bxs:star" style="color: #ffce31;" data-width="25" data-height="25"></span>
                                        <span>1.3k 5 stars</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-1" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12 my-3">

                                <div class="card-item d-flex flex-column p-2">
                                    <div>
                                        <span class="iconify" data-icon="bxs:star" style="color: #ffce31;" data-width="25" data-height="25"></span>
                                        <span>1.3k 5 stars</span>
                                    </div>

                                    <img class="avatar-sm-1 rounded-circle mx-auto my-1" src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

                                    <span class="font-size-sm">Fashion Nova</span>
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
            $('#orders-table').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });
        });
    </script>
@endpush
