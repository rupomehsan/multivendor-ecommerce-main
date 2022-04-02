@extends('layouts.landing.index')

@section('content')

    <div id="home-section" class="bg-white">
        <!-- ***** Hero Section ***** -->
        <div id="hero" class="hero">
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('assets/image/hero.png')}}" alt="">

                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>Stylish</span>
                            </h1>
                            <h2 class="percentage">
                                25% OFF!
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ut volutpat egestas.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/image/hero.png')}}" alt="">

                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>Stylish</span>
                            </h1>
                            <h2 class="percentage">
                                25% OFF!
                            </h2>
                            <span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ut volutpat egestas.
                        </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/image/hero.png')}}" alt="">

                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>Stylish</span>
                            </h1>
                            <h2 class="percentage">
                                25% OFF!
                            </h2>
                            <span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ut volutpat egestas.
                        </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <!-- ***** Pick Up Section ***** -->
        <div id="pickup-section" class="py-4 pickup-section bg-athens-gray ">
            <div class="container">
                <div class="text-center">
                    <span class="iconify" data-icon="carbon:delivery" style="color: #da333d;" data-width="55"
                          data-height="55"></span>
                        <p>24/7 Nationwide Delivery</p>
                </div>

                <div class="vl"></div>

                <div class="text-center">
                    <span class="iconify" data-icon="bi:shield-check" style="color: #da333d;" data-width="55"
                      data-height="55"></span>
                    <p>Warranty On All Products</p>
                </div>

                <div class="vl"></div>
                <div class="text-center">
                    <span class="iconify" data-icon="gg:arrows-exchange" style="color: #da333d;" data-width="55"
                      data-height="55"></span>
                    <p>Easy 90 Days Return Policy</p>
                </div>
            </div>

        </div>

        <!-- ***** Navigation for All (Products, Brands, Shops, Offers) ***** -->
    @include('partial.landing.menu')


    <!-- ***** Category Section ***** -->
        <div id="category-section" class="category-section py-5">
            <div class="text-center">
                <h2 class="portion-title">Categories</h2>
            </div>
            <div class="container">

                <div class="swiper category-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/category.png')}}" alt="">

                            <div class="overlay">
                                <span>Sneakers</span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/category.png')}}" alt="">

                            <div class="overlay">
                                <span>Sneakers</span>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/category.png')}}" alt="">

                            <div class="overlay">
                                <span>Sneakers</span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/category.png')}}" alt="">

                            <div class="overlay">
                                <span>Sneakers</span>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>


        <!-- ***** Popular Product Section ***** -->
        <div id="popular-product" class="popular-product py-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="portion-title"><span>Popular </span>Products</h2>
                    <span class="text-secondary">Lorem ipsum dolor sit amet, consecrate radicalising elite.  Disciple amet material <br/> beat color exception Podio presentiment rem sed solute vero.</span>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="dropdown">
                        <span class="iconify text-valencia cursor-pointer" data-icon="ri:equalizer-line" data-width="25"
                              data-height="25"
                              type="button" data-bs-toggle="dropdown"></span>

                        <form action="" class="dropdown-menu dropdown-menu-end p-3 border-0 bottom-shadow">
                            <label for="customRange" class="form-label">Price</label>
                            <input type="range" class="form-range" id="customRange" name="points" min="0" max="4">

                            <h6>Categories</h6>
                            <div class="row row-cols-2">
                                <div class="col">
                                    <input type="button" class="btn bg-outline-valencia form-control rounded-pill"
                                           value="PHone">
                                </div>

                                <div class="col">
                                    <input type="button"
                                           class="btn bg-valencia form-control text-white rounded-pill"
                                           value="PHone">
                                </div>
                            </div>

                            <div class="my-2">
                                <button type="submit" class="btn btn-valencia form-control">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
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

        <!-- ***** Advertisement Section ***** -->
{{--        <div class="wrapper py-2">--}}
{{--            <div class="row row-cols-3">--}}
{{--                <div class="col">--}}
{{--                    <img src="{{asset('assets/image/a.png')}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <img src="{{asset('assets/image/a.png')}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <img src="{{asset('assets/image/a.png')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


        <!-- ***** Deals Product Section ***** -->
        <div id="deal-product" class="deal-product py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-9 col-12">
                        <div class="text-center">
                            <h2 class="portion-title"><span>deal </span>of The Day</h2>
                            <span class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/> Adipisci amet aperiam beatae dolore excepturi odio praesentium rem sed soluta vero.</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="bg-valencia text-white d-flex align-items-center justify-content-center py-3">
                            <span class="mx-2">End of:</span>
                            <span class='timer d-flex' data-minutes-left='1440'></span>
                        </div>
                    </div>
                </div>
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


        <!-- ***** Contact Section ***** -->
        <div class="contact-section bg-athens-gray py-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="portion-title text-capitalize mb-2">Contact Us</h2>
                    <span class="text-secondary">Lorem ipsum dolor sit amet,  consectetur adipisicing elit. <br> Accusamus accusantium ad aut cumque dolorem error est </span>
                </div>

                <div class="row">
                    <div class="col-lg-3 my-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="40" data-height="40"></span>

                                <h4 class="text-valencia my-3">Address</h4>
                                <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="40" data-height="40"></span>

                                <h4 class="text-valencia my-3">Address</h4>
                                <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 my-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="40" data-height="40"></span>

                                <h4 class="text-valencia my-3">Address</h4>
                                <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="40" data-height="40"></span>

                                <h4 class="text-valencia my-3">Address</h4>
                                <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 my-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 my-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0 bg-athens-gray" id="name"
                                                   placeholder="john doe">
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-6 my-2">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0 bg-athens-gray" id="email"
                                                   placeholder="name@example.com">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>

                                    <div class="col-12 my-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0 bg-athens-gray" id="subject"
                                                   placeholder="Write Your Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0 bg-athens-gray"
                                                      placeholder="Leave a message here" id="message"
                                                      style="height: 190px"></textarea>
                                            <label for="message">Message</label>
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

@push('custom-js')
    <script>
        let heroSlider = new Swiper(".hero-slider", {
            direction: "vertical",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        let categorySwiper = new Swiper(".category-slider", {

            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },

                1170: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


        function updateTextInput(val) {
            document.getElementById('textInput').value = val;
        }

        $('.timer').startTimer();

    </script>
@endpush
