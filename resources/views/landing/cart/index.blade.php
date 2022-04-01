@extends('layouts.landing.index')

@section('content')
    <div class="container py-5 my-5" id="cart-section">

        <div class="row row-cols-2 justify-content-between">
            <div class="col-8">
                <table class="table text-capitalize">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>size</th>
                        <th>quantity</th>
                        <th>total price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="border">
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                <h6>product name</h6>
                            </div>
                        </td>

                        <td>
                            <select name="" id="" class="form-select">
                                <option value="" selected>7</option>
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
                            <h6>100</h6>
                        </td>

                        <td>
                            <span class="iconify" data-icon="bi:trash" data-width="20" data-height="20"></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                <h6>product name</h6>
                            </div>
                        </td>

                        <td>
                            <select name="" id="" class="form-select">
                                <option value="" selected>7</option>
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
                            <h6>100</h6>
                        </td>

                        <td>
                            <span class="iconify" data-icon="bi:trash" data-width="20" data-height="20"></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                <h6>product name</h6>
                            </div>
                        </td>

                        <td>
                            <select name="" id="" class="form-select">
                                <option value="" selected>7</option>
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
                            <h6>100</h6>
                        </td>

                        <td>
                            <span class="iconify" data-icon="bi:trash" data-width="20" data-height="20"></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                <h6>product name</h6>
                            </div>
                        </td>

                        <td>
                            <select name="" id="" class="form-select">
                                <option value="" selected>7</option>
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
                            <h6>100</h6>
                        </td>

                        <td>
                            <span class="iconify" data-icon="bi:trash" data-width="20" data-height="20"></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                <h6>product name</h6>
                            </div>
                        </td>

                        <td>
                            <select name="" id="" class="form-select">
                                <option value="" selected>7</option>
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
                            <h6>100</h6>
                        </td>

                        <td>
                            <span class="iconify" data-icon="bi:trash" data-width="20" data-height="20"></span>
                        </td>
                    </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="3" class=""></td>
                        <th class="text-black-50 border-start">sub-total</th>
                        <th class="text-end border-end">300</th>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <th class="text-black-50 border-start border-bottom">Delivery charge</th>
                        <th class="text-end border-end border-bottom">80</th>
                    </tr>

                    <tr class="border-bottom bottom-shadow">
                        <td colspan="3">
                            <a href="" class="text-valencia">continue with shopping</a>
                        </td>
                        <th>total</th>
                        <th class="text-end">380</th>
                    </tr>
                    </tfoot>
                </table>


                {{--                <div class="card shadow-sm">--}}
                {{--                    <div class="card-body">--}}
                {{--                        <h5>Cart (2 items)</h5>--}}

                {{--                        <div class="row border-bottom py-4">--}}
                {{--                            <div class="col-lg-3">--}}
                {{--                                <div class="cart-img-container">--}}
                {{--                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                            <div class="col-lg-9">--}}
                {{--                                <div class="row row-cols-2 align-items-center justify-content-between">--}}

                {{--                                    <div class="col">--}}
                {{--                                        <h6>Blue shirt</h6>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-3">--}}
                {{--                                        <div class="handle-counter border" id="handleCounter">--}}
                {{--                                            <button class="btn decrement-btn">-</button>--}}
                {{--                                            <input class="counter-input" type="text" value="1">--}}
                {{--                                            <button class="btn increment-btn">+</button>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-12">--}}
                {{--                                        <span class="d-block text-secondary text-capitalize">shirt - BLUE</span>--}}

                {{--                                        <span class="d-block text-secondary text-capitalize">color - BLUE</span>--}}

                {{--                                        <span class="d-block text-secondary text-capitalize">size - m</span>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-8">--}}
                {{--                                        <button class="btn text-primary border text-capitalize my-2">--}}
                {{--                                            <span class="iconify" data-icon="bi:trash" data-width="20"--}}
                {{--                                                  data-height="20"></span>--}}
                {{--                                            remove item--}}
                {{--                                        </button>--}}

                {{--                                        <button class="btn text-primary border text-capitalize my-2">--}}
                {{--                                                <span class="iconify" data-icon="carbon:favorite" data-width="20"--}}
                {{--                                                      data-height="20"></span>--}}
                {{--                                            move to wish list--}}
                {{--                                        </button>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-2 ">--}}
                {{--                                        <h4 class="text-secondary">$14.99</h4>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}





                {{--                            </div>--}}
                {{--                        </div>--}}

                {{--                        <div class="row border-bottom py-4">--}}
                {{--                            <div class="col-lg-3">--}}
                {{--                                <div class="cart-img-container">--}}
                {{--                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                            <div class="col-lg-9">--}}
                {{--                                <div class="row row-cols-2 align-items-center justify-content-between">--}}

                {{--                                    <div class="col">--}}
                {{--                                        <h6>Blue shirt</h6>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-3">--}}
                {{--                                        <div class="handle-counter border" id="handleCounter">--}}
                {{--                                            <button class="btn decrement-btn">-</button>--}}
                {{--                                            <input class="counter-input" type="text" value="1">--}}
                {{--                                            <button class="btn increment-btn">+</button>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-12">--}}
                {{--                                        <span class="d-block text-secondary text-capitalize">shirt - BLUE</span>--}}

                {{--                                        <span class="d-block text-secondary text-capitalize">color - BLUE</span>--}}

                {{--                                        <span class="d-block text-secondary text-capitalize">size - m</span>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-8">--}}
                {{--                                        <button class="btn text-primary border text-capitalize my-2">--}}
                {{--                                            <span class="iconify" data-icon="bi:trash" data-width="20"--}}
                {{--                                                  data-height="20"></span>--}}
                {{--                                            remove item--}}
                {{--                                        </button>--}}

                {{--                                        <button class="btn text-primary border text-capitalize my-2">--}}
                {{--                                                <span class="iconify" data-icon="carbon:favorite" data-width="20"--}}
                {{--                                                      data-height="20"></span>--}}
                {{--                                            move to wish list--}}
                {{--                                        </button>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-2 ">--}}
                {{--                                        <h4 class="text-secondary">$14.99</h4>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}





                {{--                            </div>--}}
                {{--                        </div>--}}

                {{--                        <div class="row border-bottom py-4">--}}
                {{--                            <div class="col-lg-3">--}}
                {{--                                <div class="cart-img-container">--}}
                {{--                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                            <div class="col-lg-9">--}}
                {{--                                <div class="row row-cols-2 align-items-center justify-content-between">--}}

                {{--                                    <div class="col">--}}
                {{--                                        <h6>Blue shirt</h6>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-3">--}}
                {{--                                        <div class="handle-counter border" id="handleCounter">--}}
                {{--                                            <button class="btn decrement-btn">-</button>--}}
                {{--                                            <input class="counter-input" type="text" value="1">--}}
                {{--                                            <button class="btn increment-btn">+</button>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-12">--}}
                {{--                                        <span class="d-block text-secondary text-capitalize">shirt - BLUE</span>--}}

                {{--                                        <span class="d-block text-secondary text-capitalize">color - BLUE</span>--}}

                {{--                                        <span class="d-block text-secondary text-capitalize">size - m</span>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-8">--}}
                {{--                                        <button class="btn text-primary border text-capitalize my-2">--}}
                {{--                                            <span class="iconify" data-icon="bi:trash" data-width="20"--}}
                {{--                                                  data-height="20"></span>--}}
                {{--                                            remove item--}}
                {{--                                        </button>--}}

                {{--                                        <button class="btn text-primary border text-capitalize my-2">--}}
                {{--                                                <span class="iconify" data-icon="carbon:favorite" data-width="20"--}}
                {{--                                                      data-height="20"></span>--}}
                {{--                                            move to wish list--}}
                {{--                                        </button>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="col-2 ">--}}
                {{--                                        <h4 class="text-secondary">$14.99</h4>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}





                {{--                            </div>--}}
                {{--                        </div>--}}

                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

            <div class="col-4">
                <form action="">
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

                            <div class="text-center my-3">
                                <span class="text-black-50 border-bottom ">Have a coupon code?</span>
                            </div>


                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Type coupon code">
                                <button class="btn btn-valencia text-capitalize">apply</button>
                            </div>

                            <button class="btn btn-valencia form-control text-capitalize my-3">MAKE PURCHASE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
