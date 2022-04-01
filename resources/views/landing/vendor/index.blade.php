@extends('layouts.landing.vendor')
@section('content')
    <div id="vendor-shop-section" class=" bg-white">
        <img src="{{asset('assets/image/poster.png')}}" class="img-fluid" alt="">
        <div class="container py-5">
            <div id="popular-product" class="popular-product py-5">
                <div class="container">
                    <h2 class="portion-title text-center">Special Offers</h2>

                    <div class="row row-cols-lg-3">
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">
                                    <div class="ribbon ribbon-top-left"><span>10%</span></div>

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col-lg-2 offset-lg-5">
                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                        </div>
                    </div>

                </div>
            </div>


            <div id="popular-product" class="popular-product py-5">
                <div class="container">
                    <h2 class="portion-title text-center">Feature Products</h2>

                    <div class="row row-cols-lg-3">
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col-lg-2 offset-lg-5">
                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                        </div>
                    </div>

                </div>
            </div>
            <div id="popular-product" class="popular-product py-5">
                <div class="container">
                    <h2 class="portion-title text-center">Best Selling Products</h2>

                    <div class="row row-cols-lg-3">
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col-lg-2 offset-lg-5">
                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                        </div>
                    </div>

                </div>
            </div>
            <div id="popular-product" class="popular-product py-5">
                <div class="container">
                    <h2 class="portion-title text-center">Best Rated Products</h2>

                    <div class="row row-cols-lg-3">
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col my-3">
                            <div class="card bg-athens-gray rounded-sm product-card">
                                <div class="card-body">

                                    <ul class="extra-list">
                                        <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                        </li>

                                        <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                        </li>
                                    </ul>
                                    <div class="text-center my-5">
                                        <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                            <span class="fw-lighter text-capitalize">Shoes</span>
                                            <hr>
                                            <h5 class="fw-lighter">$14.99</h5>

                                            <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                            <div class="row row-cols-2 my-2">
                                                <div class="col">
                                                    <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                        <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                        Add to cart
                                                    </button>
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
                        <div class="col-lg-2 offset-lg-5">
                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="py-4 text-center my-3" style="background: #FFEDEE">
            <a href="" class="text-valencia fw-bold fs-4 text-center">View all products of this shop >>></a>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        let categorySwiper = new Swiper(".category-slider", {
            slidesPerView: 3,
            spaceBetween: 62,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
