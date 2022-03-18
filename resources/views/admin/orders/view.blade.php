@extends('layouts.admin.index')
@section('content')
    <main id="order-view-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-2">
                        <div class="col">
                            <h5>Fashion Nova</h5>
                        </div>

                        <div class="col text-end">
                            <h3 class="text-uppercase">invoice</h3>
                        </div>

                        <div class="col">
                            <span>
                                House- 22, Road- 04, Nikunja- 02, khilkhet 1229 Dhaka, <br/>
                                Dhaka Division, Bangladesh
                            </span>
                        </div>

                        <div class="col text-end">
                            <span>
                                #ADS123456
                            </span>
                        </div>

                        <div class="col">
                            <h4 class="text-secondary">Bill To</h4>

                            <h6>Ashikur Rahman</h6>
                            <span>ashik@mail.com</span><br>
                            <span>01950012800</span>
                        </div>

                        <div class="col text-end">
                            <button class="btn border border-dark">
                                Print Invoice
                                <span class="iconify ms-2" data-icon="emojione:printer" style="color: white;"
                                      data-width="20" data-height="20"></span>
                            </button>
                        </div>


                    </div>

                    <table class="table ">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Tax</th>
                            <th>Shipping Charge</th>
                            <th>Status</th>
                            <th>Order Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img style="width: 100px; height: 100px"
                                     src="https://images.unsplash.com/photo-1589782051446-a24efcec7ffc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                                     alt="">
                            </td>

                            <td>
                                Mr. Ashiskur Rahman
                            </td>

                            <td>
                                3,400$
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                34.00$
                            </td>

                            <td>
                                34.00$
                            </td>
                            <td>
                                Order placed
                            </td>
                            <td>
                                3,745$
                            </td>
                        </tr>

                        <tr>
                            <th colspan="2">Payment Method</th>
                            <th colspan="6">Total Due</th>
                        </tr>


                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="2">COD</td>
                            <td colspan="5">SUBTOTAL</td>
                            <td>$5,200.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="5" class="">TAX 25%</td>
                            <td>$1,300.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="5">Shipping charges</td>
                            <td>$6,500.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="5">total</td>
                            <td>$6,500.00</td>
                        </tr>

                        <tr>
                            <td colspan="2">Terms & Condition</td>
                        </tr>

                        <tr>
                            <td colspan="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus pretium
                                porta leo pellentesque faucibus tempor sed neque, ultrices. Tortor ut aliquet risus
                                tristique sit volutpat ultricies sed.
                            </td>
                        </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

