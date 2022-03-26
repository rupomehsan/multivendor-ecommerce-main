@extends('layouts.landing.index')

@section('content')
    <div class="container" id="product-view">
        <div class="row">
            <div class="col-lg-4">
                <!-- Product Slider -->
                <div
                    style="--swiper-navigation-color: rgba(0, 0, 0, 0.35); --swiper-pagination-color: #fff"
                    class="swiper productSwiper"
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/pos-item.png')}}"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper productThumbSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/pos-item.png')}}"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>

                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                    </div>
                </div>


                <!-- Product Sizes & Colors -->
                <div class="d-flex align-items-center my-5">
                    <span class="">Colors</span>

                    <div class="color-switcher ms-5">
                        <span class="switch-button" id="#33D0DA"></span>
                        <span class="switch-button" id="#22A0DF"></span>
                        <span class="switch-button" id="#FF8A00"></span>
                    </div>
                </div>

                <div class="d-flex align-items-center my-5">
                    <span class="">Size</span>

                    <div class="size-switcher ms-5">
                        <span class="size-button" id="10">10</span>
                        <span class="size-button" id="12">12</span>
                        <span class="size-button" id="14">14</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex justify-content-between align-items-center my-2">
                    <h2 class="text-uppercase">puma shoes</h2>

                    <button class="btn bg-valencia rounded-0">
                        <span class="iconify" data-icon="fontisto:email" style="color: white;" data-width="20"
                              data-height="20"></span>
                    </button>

                </div>

                <div class="review my-5 border-top border-bottom d-flex align-items-center py-4">
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>

                    <span class="mx-4">4.2</span>
                    <span class="text-secondary border-start ps-4">(123 Customer reviews)</span>
                </div>


                <h2 class="mb-3 text-valencia">$14.99</h2>

                <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus ante viverra platea ac egestas nulla. Mi volutpat ultricies amet egestas sem. Porttitor ut nunc non neque. Consectetur est non sollicitudin enim ac quisque massa malesuada.
                </span>

                <div class="border-top border-bottom py-3 my-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="handle-counter" id="handleCounter">
                                <span>Qty</span>
                                <button class="btn decrement-btn">-</button>
                                <input class="counter-input" type="text" value="1">
                                <button class="btn increment-btn">+</button>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <button class="btn btn-valencia form-control" data-bs-toggle="modal"
                                    data-bs-target="#cartModal">Add to cart
                            </button>
                        </div>
                    </div>

                    <button class="btn text-capitalize text-secondary d-flex align-items-center mt-4">
                        <span class="iconify me-3" data-icon="ic:outline-favorite" data-width="20"
                              data-height="20"></span>

                        add to wishlist
                    </button>
                    <button class="btn text-capitalize text-secondary d-flex align-items-center">
                        <span class="iconify me-3" data-icon="bx:git-compare" data-width="20" data-height="20"></span>
                        compare
                    </button>
                </div>


                <h6>Product Code:<span class="text-secondary mx-2">ak023</span></h6>
                <h6>Category:<span class='text-secondary mx-2'>Shoe</span></h6>
            </div>


            <div class="col-lg-4">

                <div class="bg-athens-gray p-1">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-secondary mt-2">Delivery Options</h6>
                        <span class="iconify text-secondary" data-icon="charm:circle-warning" data-width="25"
                              data-height="25"></span>
                    </div>

                    <div class="d-flex justify-content-between ">
                        <span class="d-flex align-items-center text-secondary">
                              <span class="iconify me-2" data-icon="akar-icons:location" data-width="25"
                                    data-height="25"></span>
                            Skyview Paragon, ibrahimpur, Dhaka
                        </span>
                        <span class="text-valencia">Change</span>
                    </div>

                    <hr>

                    <div class="d-flex align-items-center justify-content-between text-secondary">
                        <div class="d-flex align-items-center">
                            <span class="iconify me-2" data-icon="icon-park-outline:delivery" data-width="25"
                                  data-height="25"></span>
                            <h6 class="text-capitalize">
                                home delivery <br>
                                <span class="">3-4 Days</span>
                            </h6>
                        </div>

                        <h5>$14.99</h5>
                    </div>

                    <hr>

                    <div class="text-secondary d-flex align-items-center">
                        <span class="iconify me-2" data-icon="fa:credit-card" data-width="25" data-height="25"></span>
                        <h6 class="m-0 p-0">Credit Card Payment</h6>
                    </div>

                    <hr>


                    <div class="d-flex justify-content-between text-secondary">
                        <div>
                            <h6>Return & Warranty</h6>
                            <div class="d-flex align-items-center my-3">
                                <span class="iconify me-2" data-icon="entypo:back-in-time" data-width="25"
                                      data-height="25"></span>

                                <div>
                                    <h6 class="m-0">
                                        7 Days Return
                                    </h6>
                                    <span class="">Change of mind is not applicable</span>
                                </div>

                            </div>

                            <h6 class="text-secondary d-flex align-items-center">
                                <span class="iconify me-2" data-icon="bi:shield-slash" data-width="25"
                                      data-height="25"></span>
                                Warranty not available
                            </h6>
                        </div>
                        <span class="iconify text-secondary" data-icon="charm:circle-warning" data-width="25"
                              data-height="25"></span>
                    </div>

                </div>

                <div class="bg-athens-gray mt-2 p-1">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-secondary">Sold by</span>

                        <button class="btn text-secondary">
                            <span class="iconify text-valencia" data-icon="jam:messages" data-width="25"
                                  data-height="25"></span>
                            Chat Now
                        </button>
                    </div>

                    <h6 class="text-secondary">
                        SK Fashion BD
                    </h6>

                    <ul class="d-flex">
                        <li class="border-top border-bottom d-flex justify-content-center align-items-center flex-column p-2">
                            <span class="text-secondary">Positive Seller Ratings</span>
                            <h2 class="text-valencia">81%</h2>
                        </li>

                        <li class="border d-flex justify-content-center align-items-center flex-column p-2">
                            <span class="text-secondary">Positive Seller Ratings</span>
                            <h2 class="text-valencia">81%</h2>
                        </li>

                        <li class="border-top border-bottom d-flex justify-content-center align-items-center flex-column p-2">
                            <span class="text-secondary">Positive Seller Ratings</span>
                            <h2 class="text-valencia">81%</h2>
                        </li>
                    </ul>

                    <div class="text-center my-3">
                        <button class="btn text-capitalize text-valencia">
                            go to store
                        </button>
                    </div>
                </div>


            </div>
        </div>


        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">

                <button class="nav-link border-0 active" id="description-tab" data-bs-toggle="tab"
                        data-bs-target="#description" type="button" role="tab" aria-controls="description"
                        aria-selected="true">Description
                </button>

            </li>

            <li class="nav-item" role="presentation">

                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Reviews
                </button>

            </li>

            <li class="nav-item ms-5" role="presentation">
                heloo
            </li>
        </ul>
        <div class="tab-content py-3" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">
                <div class="row row-cols-2">
                    <div class="col-4">
                        <h2>Description</h2>
                    </div>

                    <div class="col">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus ante viverra platea ac egestas nulla. Mi volutpat ultricies amet egestas sem. Porttitor ut nunc non neque. Consectetur est non sollicitudin enim ac quisque massa malesuada metus. </span>

                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptatem.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptatem.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptatem.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptatem.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="profile-tab">...</div>

        </div>





        <!-- Add to Cart Modal -->
        <div class="modal fade" id="cartModal">

            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="w-75 m-auto py-3">
                        <h4 class="text-center text-capitalize">You have just added</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <div class="row py-3">
                            <div class="col-lg-3">
                                <img class="border border-danger w-100 h-auto " src="{{asset('assets/image/pos-item.png')}}"
                                     alt="">
                            </div>
                            <div class="col-lg-9">
                                <h5>Puma Shoe</h5>
                                <span>1 x $14.99</span>

                                <div class="row my-3">
                                    <div class="col-lg-4">
                                        <a href="{{url('/cart')}}" class="btn btn-outline-danger form-control rounded-0 bottom-shadow">View
                                            Cart
                                        </a>
                                    </div>

                                    <div class="col-lg-4">
                                        <a href="{{url('/checkout')}}" class="btn btn-valencia form-control">Checkout</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h5>Customer who bought this also bought</h5>
                            </div>

                            <div class="col-lg-6">
                                <div class="card bg-athens-gray">
                                    <div class="card-body">

                                        <div class="text-end">
                                            <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                            </button>
                                        </div>

                                        <div class="text-center ">
                                            <img class="py-4" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                        </div>


                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6>Sneakers</h6>
                                                <p>Shoes</p>
                                                <hr>
                                                <h6>$14.99</h6>

                                                <p class="">
                                                <span class="iconify" data-icon="ant-design:star-filled"
                                                      style="color: #ffce31;"
                                                      data-width="20" data-height="20"></span>
                                                    <span>4.2</span>
                                                    <span>123 reviews</span>
                                                </p>

                                                <div class="row row-cols-2">
                                                    <div class="col">
                                                        <button class="btn btn-valencia form-control font-size-sm">Add to
                                                            cart
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{url('/product-view')}}"
                                                           class="btn form-control btn-outline-valencia font-size-sm">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="card bg-athens-gray">
                                    <div class="card-body">

                                        <div class="text-end">
                                            <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                            </button>
                                        </div>

                                        <div class="text-center ">
                                            <img class="py-4" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                        </div>


                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6>Sneakers</h6>
                                                <p>Shoes</p>
                                                <hr>
                                                <h6>$14.99</h6>

                                                <p class="">
                                                <span class="iconify" data-icon="ant-design:star-filled"
                                                      style="color: #ffce31;"
                                                      data-width="20" data-height="20"></span>
                                                    <span>4.2</span>
                                                    <span>123 reviews</span>
                                                </p>

                                                <div class="row row-cols-2">
                                                    <div class="col">
                                                        <button class="btn btn-valencia form-control font-size-sm">Add to
                                                            cart
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{url('/product-view')}}"
                                                           class="btn form-control btn-outline-valencia font-size-sm">Details</a>
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
        </div>
    </div>
@endsection


@push('custom-js')
    <script>
        let productThumbSwiper = new Swiper(".productThumbSwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        let productSwiper = new Swiper(".productSwiper", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: productThumbSwiper,
            },
        });
    </script>
@endpush
