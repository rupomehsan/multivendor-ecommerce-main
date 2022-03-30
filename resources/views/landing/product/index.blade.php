@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <div class="wrapper py-5" style="min-height: 60vh">
        <div class="row">
            <div class="col-lg-2">
               <span>Categories</span>
                <hr>


                <ul>
                    <li>
                        <span class="fw-bold d-flex align-items-center justify-content-between cursor-pointer">
                            Electronics & Gadgets
                            <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20" data-height="20"></span>
                        </span>

                        <ul class="ms-3">
                            <li>
                                <a href="" class="text-black">Laptop</a>
                            </li>

                            <li>
                                <a href="" class="text-black">Desktop</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <span class="fw-bold d-flex align-items-center justify-content-between cursor-pointer">
                            Electronics & Gadgets
                            <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20" data-height="20"></span>
                        </span>

                        <ul class="ms-3">
                            <li>
                                <a href="" class="text-black">Laptop</a>
                            </li>

                            <li>
                                <a href="" class="text-black">Desktop</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <span class="fw-bold d-flex align-items-center justify-content-between cursor-pointer">
                            Electronics & Gadgets
                            <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20" data-height="20"></span>
                        </span>

                        <ul class="ms-3">
                            <li>
                                <a href="" class="text-black">Laptop</a>
                            </li>

                            <li>
                                <a href="" class="text-black">Desktop</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <h4>All Products</h4>
                            <span>Total 181 Products Found</span>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn border">
                           sort by
                        </button>
                    </div>


                    <div class="col-lg-4 my-3">
                        <div class="card bg-athens-gray">
                            <div class="card-body">

                                <div class="text-end">
                                    <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                    </button>
                                </div>

                                <div class="text-center py-5">
                                    <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>


                                <div class="card">
                                    <div class="card-body text-center">
                                        <h3>Sneakers</h3>
                                        <p>Shoes</p>
                                        <hr>
                                        <h4 class="my-2">$14.99</h4>

                                        <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                            <span>4.2</span>

                                            <span>123 reviews</span>
                                        </h6>

                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <button class="btn btn-valencia  form-control">Add to cart</button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 my-3">
                        <div class="card bg-athens-gray">
                            <div class="card-body">

                                <div class="text-end">
                                    <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                    </button>
                                </div>

                                <div class="text-center py-5">
                                    <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>


                                <div class="card">
                                    <div class="card-body text-center">
                                        <h3>Sneakers</h3>
                                        <p>Shoes</p>
                                        <hr>
                                        <h4 class="my-2">$14.99</h4>

                                        <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                            <span>4.2</span>

                                            <span>123 reviews</span>
                                        </h6>

                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <button class="btn btn-valencia  form-control">Add to cart</button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 my-3">
                        <div class="card bg-athens-gray">
                            <div class="card-body">

                                <div class="text-end">
                                    <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                    </button>
                                </div>

                                <div class="text-center py-5">
                                    <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>


                                <div class="card">
                                    <div class="card-body text-center">
                                        <h3>Sneakers</h3>
                                        <p>Shoes</p>
                                        <hr>
                                        <h4 class="my-2">$14.99</h4>

                                        <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                            <span>4.2</span>

                                            <span>123 reviews</span>
                                        </h6>

                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <button class="btn btn-valencia  form-control">Add to cart</button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
