@extends('layouts.landing.index')

@section('content')
    <div class="container py-5" id="cart-section">

        <div class="row row-cols-2 justify-content-between">
            <div class="col-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Cart (2 items)</h5>

                        <div class="row border-bottom py-4">
                            <div class="col-lg-3">
                                <div class="cart-img-container">
                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="row row-cols-2 align-items-center justify-content-between">

                                    <div class="col">
                                        <h6>Blue shirt</h6>
                                    </div>

                                    <div class="col-3">
                                        <div class="handle-counter border" id="handleCounter">
                                            <button class="btn decrement-btn">-</button>
                                            <input class="counter-input" type="text" value="1">
                                            <button class="btn increment-btn">+</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <span class="d-block text-secondary text-capitalize">shirt - BLUE</span>

                                        <span class="d-block text-secondary text-capitalize">color - BLUE</span>

                                        <span class="d-block text-secondary text-capitalize">size - m</span>
                                    </div>

                                    <div class="col-8">
                                        <button class="btn text-primary border text-capitalize my-2">
                                            <span class="iconify" data-icon="bi:trash" data-width="20"
                                                  data-height="20"></span>
                                            remove item
                                        </button>

                                        <button class="btn text-primary border text-capitalize my-2">
                                                <span class="iconify" data-icon="carbon:favorite" data-width="20"
                                                      data-height="20"></span>
                                            move to wish list
                                        </button>
                                    </div>

                                    <div class="col-2 ">
                                        <h4 class="text-secondary">$14.99</h4>
                                    </div>
                                </div>





                            </div>
                        </div>

                        <div class="row border-bottom py-4">
                            <div class="col-lg-3">
                                <div class="cart-img-container">
                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="row row-cols-2 align-items-center justify-content-between">

                                    <div class="col">
                                        <h6>Blue shirt</h6>
                                    </div>

                                    <div class="col-3">
                                        <div class="handle-counter border" id="handleCounter">
                                            <button class="btn decrement-btn">-</button>
                                            <input class="counter-input" type="text" value="1">
                                            <button class="btn increment-btn">+</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <span class="d-block text-secondary text-capitalize">shirt - BLUE</span>

                                        <span class="d-block text-secondary text-capitalize">color - BLUE</span>

                                        <span class="d-block text-secondary text-capitalize">size - m</span>
                                    </div>

                                    <div class="col-8">
                                        <button class="btn text-primary border text-capitalize my-2">
                                            <span class="iconify" data-icon="bi:trash" data-width="20"
                                                  data-height="20"></span>
                                            remove item
                                        </button>

                                        <button class="btn text-primary border text-capitalize my-2">
                                                <span class="iconify" data-icon="carbon:favorite" data-width="20"
                                                      data-height="20"></span>
                                            move to wish list
                                        </button>
                                    </div>

                                    <div class="col-2 ">
                                        <h4 class="text-secondary">$14.99</h4>
                                    </div>
                                </div>





                            </div>
                        </div>

                        <div class="row border-bottom py-4">
                            <div class="col-lg-3">
                                <div class="cart-img-container">
                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="row row-cols-2 align-items-center justify-content-between">

                                    <div class="col">
                                        <h6>Blue shirt</h6>
                                    </div>

                                    <div class="col-3">
                                        <div class="handle-counter border" id="handleCounter">
                                            <button class="btn decrement-btn">-</button>
                                            <input class="counter-input" type="text" value="1">
                                            <button class="btn increment-btn">+</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <span class="d-block text-secondary text-capitalize">shirt - BLUE</span>

                                        <span class="d-block text-secondary text-capitalize">color - BLUE</span>

                                        <span class="d-block text-secondary text-capitalize">size - m</span>
                                    </div>

                                    <div class="col-8">
                                        <button class="btn text-primary border text-capitalize my-2">
                                            <span class="iconify" data-icon="bi:trash" data-width="20"
                                                  data-height="20"></span>
                                            remove item
                                        </button>

                                        <button class="btn text-primary border text-capitalize my-2">
                                                <span class="iconify" data-icon="carbon:favorite" data-width="20"
                                                      data-height="20"></span>
                                            move to wish list
                                        </button>
                                    </div>

                                    <div class="col-2 ">
                                        <h4 class="text-secondary">$14.99</h4>
                                    </div>
                                </div>





                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Order Summery</h5>

                        <div class="d-flex justify-content-between align-items-center my-3">
                            <span class="text-capitalize">sub total (2 items)</span>
                            <h5 class="m-0">$30.99</h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center my-3">
                            <span class="text-capitalize">sub total (2 items)</span>
                            <h5 class="m-0">$30.99</h5>
                        </div>

                        <hr>


                        <div class="d-flex justify-content-between align-items-center my-3">
                            <span class="text-capitalize">sub total (2 items)</span>
                            <h5 class="m-0">$30.99</h5>
                        </div>

                        <button class="btn btn-valencia form-control text-capitalize my-3">MAKE PURCHASE</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
