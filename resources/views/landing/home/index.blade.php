@extends('layouts.landing.index')

@section('content')
    <!-- ***** Hero Section ***** -->
    <div id="hero" class="hero">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('assets/image/hero.png')}}" alt="">

                    <div class="container overlay">
                        <h1>
                            Get
                            <br/>
                            Stylish
                        </h1>
                        <h2>
                            25% OFF!
                        </h2>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ut volutpat egestas.
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/image/hero.png')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/image/hero.png')}}" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- ***** Pick Up Section ***** -->
    <div id="pickup-section" class="py-4  bg-athens-gray ">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="text-center">
                <span class="iconify" data-icon="carbon:delivery" style="color: #da333d;" data-width="55"
                      data-height="55"></span>
                <p>24/7 Nationwide Delivery</p>
            </div>

            <div class="text-center ">
                <span class="iconify" data-icon="bi:shield-check" style="color: #da333d;" data-width="55"
                      data-height="55"></span>
                <p>Warranty On All Products</p>
            </div>

            <div class="text-center">
                <span class="iconify" data-icon="gg:arrows-exchange" style="color: #da333d;" data-width="55"
                      data-height="55"></span>
                <p>Easy 90 Days Return Policy</p>
            </div>
        </div>

    </div>


    <!-- ***** Category Section ***** -->
    {{--    <div id="category-section" class="category-section">--}}
    {{--        <div class="text-center">--}}
    {{--            <h2>Categories</h2>--}}
    {{--        </div>--}}
    {{--        <div class="container">--}}

    {{--            <div class="swiper category-slider">--}}
    {{--                <div class="swiper-wrapper">--}}
    {{--                    <div class="swiper-slide">--}}
    {{--                        <div class="card bottom-shadow">--}}
    {{--                            <div class="card-body">--}}
    {{--                                hello--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="swiper-slide">--}}
    {{--                        <div class="card bottom-shadow">--}}
    {{--                            <div class="card-body">--}}
    {{--                                hi--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="swiper-slide">--}}
    {{--                        <div class="card bottom-shadow">--}}
    {{--                            <div class="card-body">--}}
    {{--                                bye--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="swiper-button-next"></div>--}}
    {{--                <div class="swiper-button-prev"></div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}


    <!-- ***** Popular Product Section ***** -->
    <div id="popular-product" class="popular-product py-5">
        <div class="container">
            <div class="text-center">
                <h2>Popular <span class="text-danger">Products</span></h2>
                <span class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/> Adipisci amet aperiam beatae dolore excepturi odio praesentium rem sed soluta vero.</span>
            </div>

            <div class="text-end">
                <button type="button" class="btn filter-btn">
                    <span class="iconify" data-icon="ri:equalizer-line" style="color: #e20d13;" data-width="25"
                          data-height="25"></span>
                </button>
            </div>

            <form action="">
                <div class="filter-card card bottom-shadow d-none w-25">
                    <div class="card-body">
                        <label for="customRange" class="form-label">Price</label>
                        <input type="range" class="form-range" id="customRange" name="points" min="0" max="4">

                        <h6>Categories</h6>
                        <div class="row row-cols-2">
                            <div class="col">
                                <input type="button" class="btn bg-outline-valencia form-control rounded-pill"
                                       value="PHone">
                            </div>

                            <div class="col">
                                <input type="button" class="btn bg-valencia form-control text-white rounded-pill"
                                       value="PHone">
                            </div>
                        </div>

                        <div class="my-2">
                            <button type="submit" class="btn btn-valencia form-control">Search</button>
                        </div>
                    </div>
                </div>
            </form>


            <div class="row row-cols-lg-3">

                <div class="col my-3">
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
                                            <a href="{{url('/product-view')}}" class="btn form-control btn-outline-valencia">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
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

    <!-- ***** Advertisement Section ***** -->
    <div class="wrapper py-2">
        <div class="row row-cols-3">
            <div class="col">
                <img src="{{asset('assets/image/a.png')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('assets/image/a.png')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('assets/image/a.png')}}" alt="">
            </div>
        </div>
    </div>



    <!-- ***** Deals Product Section ***** -->
    <div id="deal-product" class="deal-product py-5">
        <div class="container">

            <div class="text-center">
                <h2>Deal <span class="text-danger">of The Day</span></h2>
                <span class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/> Adipisci amet aperiam beatae dolore excepturi odio praesentium rem sed soluta vero.</span>
            </div>

            <div class="text-end">
                <button type="button" class="btn filter-btn">
                    <span class="iconify" data-icon="ri:equalizer-line" style="color: #e20d13;" data-width="25"
                          data-height="25"></span>
                </button>
            </div>

            <form action="">
                <div class="filter-card card bottom-shadow d-none w-25">
                    <div class="card-body">
                        <label for="customRange" class="form-label">Price</label>
                        <input type="range" class="form-range" id="customRange" name="points" min="0" max="4">

                        <h6>Categories</h6>
                        <div class="row row-cols-2">
                            <div class="col">
                                <input type="button" class="btn bg-outline-valencia form-control rounded-pill"
                                       value="PHone">
                            </div>

                            <div class="col">
                                <input type="button" class="btn bg-valencia form-control text-white rounded-pill"
                                       value="PHone">
                            </div>
                        </div>

                        <div class="my-2">
                            <button type="submit" class="btn btn-valencia form-control">Search</button>
                        </div>
                    </div>
                </div>
            </form>


            <div class="row row-cols-lg-3">

                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col my-3">
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
                                            <button class="btn form-control btn-outline-valencia">Details</button>
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


    <!-- ***** Contact Section ***** -->
    <div class="contact-section bg-mercury">
        <div class="container">
            <div class="text-center">
                <h2>Contact Us</h2>
                <span class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/> Adipisci amet aperiam beatae dolore excepturi odio praesentium rem sed soluta vero.</span>
            </div>

            <div class="row row-cols-3">
                <div class="col my-2">
                    <div class="card my-2">
                        <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="20" data-height="20"></span>

                            <h4>Address</h4>
                            <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="20" data-height="20"></span>

                            <h4>Address</h4>
                            <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col my-2">
                    <div class="card my-2">
                        <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="20" data-height="20"></span>

                            <h4>Address</h4>
                            <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-body">
                                <span class="iconify" data-icon="akar-icons:location" style="color: #e20d13;"
                                      data-width="20" data-height="20"></span>

                            <h4>Address</h4>
                            <span>
                                House-22, Road-04,
                                <br>
                                Nikunja-02, Dhaka - 1229
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col my-2">
                    <div class="card my-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 my-2">
                                    <input type="text" class="form-control border-0 bg-mercury"
                                           placeholder="Your Name">
                                </div>
                                <div class="col-6 my-2">
                                    <input type="text" class="form-control border-0 bg-mercury"
                                           placeholder="Your Email">
                                </div>

                                <div class="col-12 my-2">
                                    <input type="text" class="form-control border-0 bg-mercury"
                                           placeholder="Your Subject">
                                </div>
                                <div class="col-12 my-2">
                                    <textarea name=""  rows="5" class="form-control bg-mercury" placeholder="Message "></textarea>
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
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        let categorySwiper = new Swiper(".category-slider", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


        function updateTextInput(val) {
            document.getElementById('textInput').value = val;
        }

    </script>
@endpush
