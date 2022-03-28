@extends('layouts.landing.vendor')
@section('content')
    <div id="vendor-shop-section">
        <img src="{{asset('assets/image/poster.png')}}" class="img-fluid" alt="">

        <div class="container py-5">
            <div class="row my-3">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <h2 class="portion-title"><span>special</span> offer</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="">
                        <input type="search" class="form-control border-0 rounded-pill bg-athens-gray"
                               placeholder="Search">
                    </form>
                </div>
            </div>

            <div class="swiper category-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('assets/image/category.png')}}" alt="">
                        <div class="ribbon ribbon-top-left"><span>10%</span></div>

                        <div class="overlay">
                            <span>Sneakers</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ribbon ribbon-top-left"><span>10%</span></div>
                        <img src="{{asset('assets/image/category.png')}}" alt="">

                        <div class="overlay">
                            <span>Sneakers</span>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <img src="{{asset('assets/image/category.png')}}" alt="">
                        <div class="ribbon ribbon-top-left"><span>10%</span></div>
                        <div class="overlay">
                            <span>Sneakers</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src="{{asset('assets/image/category.png')}}" alt="">
                        <div class="ribbon ribbon-top-left"><span>10%</span></div>
                        <div class="overlay">
                            <span>Sneakers</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="py-5">
                <div class="d-flex justify-content-end">
                    <div class="dropdown">
                        <span class="iconify filter-btn" data-icon="ri:equalizer-line" data-width="25" data-height="25" type="button" data-bs-toggle="dropdown"></span>

                        <ul class="dropdown-menu dropdown-menu-end p-3 border-0 bottom-shadow" style="width: 400px" >
                            <form action="">
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
                            </form>
                        </ul>
                    </div>
                </div>


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

                <div class="text-center">
                    <button class="btn btn-valencia">Load More</button>
                </div>
            </div>
        </div>

{{--        <div class="chat-box">--}}
{{--            h--}}
{{--        </div>--}}

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
