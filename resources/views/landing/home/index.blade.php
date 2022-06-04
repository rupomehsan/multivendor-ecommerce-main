@extends('layouts.landing.index')

@section('content')

    <div id="home-section" class="bg-white">
        <!-- ***** Hero Section ***** -->
        <div id="hero" class="hero">
            <div class="swiper hero-slider">
                <div class="swiper-wrapper" id="slider">
                    <div class="swiper-slide">
                        <img src="assets/image/hero.png" alt="">
                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>${item.title}</span>
                            </h1>
                            <h2 class="percentage">
                                ${item.offer} % OFF!
                            </h2>
                            <span>
                                    ${item.description}
                                </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/image/hero.png" alt="">
                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>${item.title}</span>
                            </h1>
                            <h2 class="percentage">
                                ${item.offer} % OFF!
                            </h2>
                            <span>
                                    ${item.description}
                                </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/image/hero.png" alt="">
                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>${item.title}</span>
                            </h1>
                            <h2 class="percentage">
                                ${item.offer} % OFF!
                            </h2>
                            <span>
                                    ${item.description}
                                </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/image/hero.png" alt="">
                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>${item.title}</span>
                            </h1>
                            <h2 class="percentage">
                                ${item.offer} % OFF!
                            </h2>
                            <span>
                                    ${item.description}
                                </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/image/hero.png" alt="">
                        <div class="container overlay">
                            <h1 class="title">
                                Get
                                <br/>
                                <span>${item.title}</span>
                            </h1>
                            <h2 class="percentage">
                                ${item.offer} % OFF!
                            </h2>
                            <span>
                                    ${item.description}
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
                    <div class="swiper-wrapper" id="categorySlider">

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
                            <input type="range" class="form-range" id="customRange" name="points" min="0" max="1000">
                            <input type="hidden" id="categoryId" value="">
                            <h6 class="fw-bold py-3"> Price Range : <span id="priceRange"></span></h6>
                            <h6 class="pb-3 fw-bold">Categories : <span id="catName"></span></h6>
                            <div class="row row-cols-2" id="searchCategory">


                            </div>
                            <div class="my-2">
                                <input type="button" id="searchData"
                                       class="btn bg-valencia form-control text-white rounded-pill my-1"
                                       value="Search">
                                {{--                                <input id="searchData" class="btn btn-valencia form-control" value="Search" />--}}
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row row-cols-lg-3" id="popularProduct">


                </div>

                <div class="col-lg-2 offset-lg-5">
                    <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products
                    </button>
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
                <div class="row row-cols-lg-3" id="dealOfTheDay">


                </div>
                <div class="col-lg-2 offset-lg-5">
                    <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products
                    </button>
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
                                    <form action="{{url('api/v1/contact')}}" id="form" name="form" enctype="multipart/form-data"
                                          novalidate>
                                    <div class="row">
                                        <div class="col-6 my-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 bg-athens-gray"
                                                       id="name"
                                                       name="name"
                                                       placeholder="john doe">
                                                <label for="name">Name</label>
                                                <span class="alert text-danger py-1" id="name_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-6 my-2">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0 bg-athens-gray"
                                                       id="email"
                                                       name="email"
                                                       placeholder="name@example.com">
                                                <label for="email">Email</label>
                                                <span class="alert text-danger py-1" id="email_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 bg-athens-gray"
                                                       id="subject"
                                                       name="subject"
                                                       placeholder="Write Your Subject">
                                                <label for="subject">Subject</label>
                                                <span class="alert text-danger py-1" id="subject_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <div class="form-floating">
                                            <textarea class="form-control border-0 bg-athens-gray"
                                                      placeholder="Leave a message here"
                                                      id="message"
                                                      name="message"
                                                      style="height: 190px"></textarea>
                                                <label for="message">Message</label>
                                                <span class="alert text-danger py-1" id="message_error"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-base-primary my-3" id="contactForm" >Submit </button>
                                        </div>
                                    </div>
                                    </form>
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
                delay: 3000,
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
    <script>

        $(document).ready(function () {
            //get all slider
            //get all slider
            getAllSliders()
            //get all categories
            //get all categories
            getAllCategories("#categorySlider")
            //get popular products
            //get popular products
            var popularProductList = "{{url('api/v1/get-all-products')}}"
            getProduct(popularProductList,"#popularProduct")
            //deal Of TheDay
            //deal Of TheDay
            var delaOfDatProduct = "{{url('api/v1/get-all-products')}}"
            {{--delaOfDatProductList(delaOfDatProduct)--}}
            getProduct(delaOfDatProduct,"#dealOfTheDay")
            // range searching
            // range searching
            $('#customRange').change(function () {
                $('#priceRange').text($(this).val())
            })
            //get category for search
            //get category for search
            getAllCategories("#searchCategory")
            $(document).on("click", ".searchCategory", function () {
                catId = $(this).attr('data-id')
                catName = $(this).val()
                $('#categoryId').val(catId)
                $('#catName').text(catName)
            })

            $(document).on("click", "#searchData", function (e) {
                e.preventDefault()
                var categoryId = $('#categoryId').val()
                var priceRange = $('#customRange').val()
                searchProductByPriceAndCategoryId(categoryId, priceRange)
            })

            $('#form').submit(function (e) {
                e.preventDefault();
                let form = $(this);
                formSubmit("post", "submit-button", form);
            })

        })

    </script>
@endpush
