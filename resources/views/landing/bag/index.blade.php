@extends('layouts.landing.index')
@section('content')
    <div id="bag-section">
        <h1 class="py-4 bg-athens-gray text-center">My Bag</h1>

        <div class="container my-4">

            <div class="row row-cols-2">
                <div class="col-8">
                    <table class="w-100 table">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">

                                <span>Puma Shoes</span>
                            </td>

                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">7</option>
                                </select>
                            </td>

                            <td>
                                <div class="handle-counter border" id="handleCounter">
                                    <button class="btn decrement-btn">-</button>
                                    <input class="counter-input" type="text" value="1">
                                    <button class="btn increment-btn">+</button>
                                </div>
                            </td>

                            <td>
                                <h6>$ 1,150</h6>
                            </td>

                            <td>
                                <button class="btn">
                                    <span class="iconify" data-icon="clarity:window-close-line" data-width="25"
                                          data-height="25"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">

                                <span>Puma Shoes</span>
                            </td>

                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">7</option>
                                </select>
                            </td>

                            <td>
                                <div class="handle-counter border" id="handleCounter">
                                    <button class="btn decrement-btn">-</button>
                                    <input class="counter-input" type="text" value="1">
                                    <button class="btn increment-btn">+</button>
                                </div>
                            </td>

                            <td>
                                <h6>$ 1,150</h6>
                            </td>

                            <td>
                                <button class="btn">
                                    <span class="iconify" data-icon="clarity:window-close-line" data-width="25"
                                          data-height="25"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">

                                <span>Puma Shoes</span>
                            </td>

                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">7</option>
                                </select>
                            </td>

                            <td>
                                <div class="handle-counter border" id="handleCounter">
                                    <button class="btn decrement-btn">-</button>
                                    <input class="counter-input" type="text" value="1">
                                    <button class="btn increment-btn">+</button>
                                </div>
                            </td>

                            <td>
                                <h6>$ 1,150</h6>
                            </td>

                            <td>
                                <button class="btn">
                                    <span class="iconify" data-icon="clarity:window-close-line" data-width="25"
                                          data-height="25"></span>
                                </button>
                            </td>
                        </tr>
                        </tbody>

                        <tfoot>
                        <tr>
                            <td colSpan="3"></td>
                            <td colSpan="2" class="tfoot p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Sub Total</span>
                                    <span>$114</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Delivery Charge</span>
                                    <span>$114</span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colSpan="3">

                                <button class="btn">Continue Shopping</button>

                            </td>

                            <td colSpan="1">
                                <h6>Total: </h6>
                            </td>

                            <td colSpan="1" class="text-end">$1,210</td>
                        </tr>
                        </tfoot>
                    </table>
                    <hr>
                </div>

                <div class="col-4">
                    <div class="card" style="background: #FAFAFA; box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.15);">
                        <div class="card-body">
                            <h4 class="my-3">Payment Info.</h4>
                            <p >Payment Method:</p>


                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="credit-radio" name="payment_method"
                                       checked>
                                <label class="form-check-label" for="credit-radio">
                                    Credit Card
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method"
                                       id="cod-radio">
                                <label class="form-check-label" for="cod-radio">
                                    Cash on delivery
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method"
                                       id="mba-radio">
                                <label class="form-check-label" for="mba-radio">
                                    Mobile banking app
                                </label>
                            </div>


                            <div class="row row-cols-2 align-items-center my-2">
                                <div class="col">
                                    <p>Name On Card:</p>
                                </div>
                                <div class="col">
                                    <h6>Jesper Ahmed</h6>
                                </div>

                                <div class="col">
                                    <p>Card Number:</p>
                                </div>
                                <div class="col">
                                    <h6>*** *** ** 9360</h6>
                                </div>

                                <div class="col">
                                    <p>Expiration Date:</p>
                                </div>
                                <div class="col">
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col">
                                    <p>CVV:</p>
                                </div>

                                <div class="col-3">
                                    <input type="text" class="form-control">
                                </div>

                                <button class="btn btn-valencia form-control text-capitalize my-4">checkout</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
