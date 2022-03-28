@extends('layouts.admin.index')
@section('content')
    <main id="pos-content">
        <h4 class="text-capitalize">pos system</h4>

        <div class="row">
            <div class="col-lg-8 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-4 col-sm-6 col-12 my-3">
                                <form class="search-form">
                                    <input class="search-field" type="text" placeholder="Search">
                                    <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                          data-height="25"></span>
                                </form>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12 my-3">
                                <div class="row row-cols-2 align-items-center">
                                    <div class="col">
                                        <select class="form-select">
                                            <option selected>All Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <a href="{{url('admin/pos/orders-list')}}" class="btn btn-base btn-base-primary">See all orders</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-12 my-3">

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <nav>
                                    <ul class="pagination justify-content-end">

                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">

                        <select class="form-select">
                            <option selected>Customer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                        </select>

                        <div class="row row-cols-2 my-2">
                            <div class="col">
                                <button data-bs-toggle="modal"
                                        data-bs-target="#customerModal" class="btn btn-base btn-base-primary form-control">Add customer</button>
                            </div>

                            <div class="col">
                                <button class="btn btn-base btn-base-warning form-control">New order</button>
                            </div>
                        </div>

                        <div class="row my-2 align-items-center">
                            <div class="col-lg-8">
                                <span>Current Customer: Ashiqur Rahman</span>
                            </div>

                            <div class="col-lg-4 text-end">
                                <button class="btn btn-base btn-base-pink">Clear cart</button>
                            </div>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ITEM</th>
                                <th scope="col">QTY</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">DELETE</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            </tbody>
                        </table>


                        <div class="row row-cols-2 text-end">
                            <div class="col">
                                <h6>Subtotal:</h6>
                            </div>
                            <div class="col">
                                <h6>123.00$</h6>
                            </div>

                            <div class="col">
                                <h6>Product discount:</h6>
                            </div>
                            <div class="col">
                                <h6>5%</h6>
                            </div>

                            <div class="col">
                                <h6>Extra discount:</h6>
                            </div>
                            <div class="col">
                                <h6>15%</h6>
                            </div>

                            <div class="col">
                                <button class="btn btn-danger form-control">Cancel</button>
                            </div>

                            <div class="col">
                                <button class="btn btn-base-primary form-control" >Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ORDER MODAL -->
        <div class="modal fade" id="customerModal">

            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title">Add new customer</h5>
                    </div>
                    <div class="modal-body">
                        <!-- CUSTOMER'S NAME -->
                        <div class="mb-3">
                            <label for="name" id="name_label" class="form-label">Customer’s Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                            <span class="text-danger" id="name_error">Error MSG</span>
                        </div>


                        <!-- CUSTOMER'S EMAIL -->
                        <div class="my-3">
                            <label for="email" id="email_label" class="form-label">Customer’s Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                            <span class="text-danger" id="email_error">Error MSG</span>
                        </div>



                        <!-- CUSTOMER'S PHONE -->
                        <div class="my-3">
                            <label for="phone" id="phone_label" class="form-label">Customer’s Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone">
                            <span class="text-danger" id="phone_error">Error MSG</span>
                        </div>


                        <!-- CUSTOMER'S ADDRESS -->
                        <div class="my-3">
                            <label for="address" id="address_label" class="form-label">Customer’s Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address">
                            <span class="text-danger" id="address_error">Error MSG</span>
                        </div>


                        <!-- CUSTOMER'S ADDRESS ZIP CODE -->
                        <div class="my-3">
                            <label for="zip_code" id="zip_code_label" class="form-label">Customer’s ZIP Code</label>
                            <input type="text" id="zip_code" name="zip_code" class="form-control" placeholder="Enter ZIP Code">
                            <span class="text-danger" id="zip_code_error">Error MSG</span>
                        </div>

                    </div>
                    <div class="modal-footer border-0 justify-content-start">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-base-primary px-5">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
