<?php
$shopId = request()->segment(3);
?>
@extends('layouts.landing.vendor')
@section('content')
    <div class="vendor-banner">
        <img class="vendor-banner-img" src="{{asset('assets/image/vendor-page.png')}}" alt="">
        <div class="container py-3">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row" id="shopDetails">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="bg-white py-2 vendor-nav">
        <div class="container">
            <ul class="d-flex justify-content-center align-items-center">

                <li class="me-5 nav-item">
                    <a href="{{url('/vendor/shop')}}/{{$shopId}}" class="nav-link
                                    {{ in_array('vendor', request()->segments()) && count(request()->segments()) === 1 ? 'active' : '' }}"
                    >
                        Shop
                    </a>
                </li>

                <li class="me-5 nav-item">
                    <a href="{{url('/vendor/all-products')}}/{{$shopId}}"
                       class="nav-link {{in_array('all-products', request()->segments())  ? 'active' : '' }}">All
                        Products</a>
                </li>

                <li class="me-5 nav-item">
                    <a href="{{url('/vendor/coupon')}}/{{$shopId}}"
                       class="nav-link {{ in_array('profile', request()->segments()) ? 'active' : '' }}">coupon</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="wrapper py-5" style="min-height: 60vh">
        <div class="row">
            <style>
                #categorySiteNav .accordion {
                    background-color: #eee;
                    color: #444;
                    cursor: pointer;
                    padding: 18px;
                    width: 100%;
                    border: none;
                    text-align: left;
                    outline: none;
                    font-size: 15px;
                    transition: 0.4s;
                }
                #categorySiteNav .active, .accordion:hover {
                    background-color: #ccc;
                }
                #categorySiteNav .panel {
                    padding: 0 18px;
                    display: none;
                    background-color: white;
                    overflow: hidden;
                }
                #categorySiteNav svg {
                    vertical-align: middle;
                    float: right;
                }
            </style>
            <div class="col-lg-2">
                <span>Categories</span>
                <hr>
                <div id="categorySiteNav">

                </div>

                {{--                <ul>--}}
                {{--                    <li class="d-flex align-items-center justify-content-center justify-content-between cursor-pointer fw-bold text-capitalize">--}}
                {{--                        <span>all category</span>--}}
                {{--                        <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20" data-height="20"></span>--}}
                {{--                    </li>--}}
                {{--                    <li class="list">--}}
                {{--                        <span class="list-title d-flex align-items-center justify-content-between cursor-pointer">--}}
                {{--                            Electronics & Gadgets--}}
                {{--                            <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20"--}}
                {{--                                  data-height="20"></span>--}}
                {{--                        </span>--}}

                {{--                        <ul class="ms-3 sub-list" id="sub-list1">--}}
                {{--                            <li>--}}
                {{--                                <a href="" class="text-black">Laptop</a>--}}
                {{--                            </li>--}}

                {{--                            <li>--}}
                {{--                                <a href="" class="text-black">Desktop</a>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                    <li class="list">--}}
                {{--                        <span class="list-title d-flex align-items-center justify-content-between cursor-pointer">--}}
                {{--                            Electronics & Gadgets--}}
                {{--                            <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20"--}}
                {{--                                  data-height="20"></span>--}}
                {{--                        </span>--}}

                {{--                        <ul class="ms-3 sub-list" id="sub-list2">--}}
                {{--                            <li>--}}
                {{--                                <a href="" class="text-black">Laptop</a>--}}
                {{--                            </li>--}}

                {{--                            <li>--}}
                {{--                                <a href="" class="text-black">Desktop</a>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
                <hr>
                <!-- ***** Price ***** -->
                <div>
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="customRange" class="form-label fs-5 fw-bold">Price</label>
                        <button class="btn btn-valencia" id="seachProductFromShop">search</button>
                    </div>
                    <input type="range" class="form-range mt-2" id="customRange" name="points" min="0" max="1000">
                    <h4 class="py-3">Price Range :<span id="priceRangeShow" class="fw-bold py-3"> 00</span></h4>
                    <div class="d-flex align-items-center justify-content-between">
                        <input type="number" id="minimum" name="minimum" class="form-control w-50">
                        <label for="" class="w-50 text-center text-capitalize">to</label>
                        <input type="number" id="maximum" name="maximum" class="form-control w-50">
                    </div>
                </div>
                <!-- ***** Brands ***** -->
                <div>
                    <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Brands</label>
                    <hr>
                    <div id="allBrandforShop">

                    </div>
                </div>


                <!-- ***** Fabric ***** -->
                <div>
                    <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Fabric</label>
                    <hr>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>
                </div>


                <!-- ***** Colors ***** -->
                <div>
                    <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Colors</label>
                    <hr>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>
                </div>


                <!-- ***** Sizes ***** -->
                <div>
                    <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Sizes</label>
                    <hr>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Noir
                        </label>
                    </div>
                </div>

            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h4 class="portion-title py-3">All Products</h4>
                            <span class="text-secondary">Total <span class="fw-bolder py-3"
                                                                     id="totalCountProductByShop"></span> Products Found</span>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-3" id="allProductByShop">

                </div>
                <div class="row">
                    <div class="col-lg-2 offset-lg-5">
                        <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        // get getSingleShopDetails
        // get getSingleShopDetails
        var brandId = []
        var shopId = {{request()->segment(3)}};
        var url = "/api/v1/shop-details/" + shopId;
        getSingleShopDetails(url, "#shopDetails")
        // get getAllProductByShopId
        // get getAllProductByShopId
        getAllProductByShopId(url, "#allProductByShop")
        // get getAllBrands
        // get getAllBrands
        getAllBrands("#allBrandforShop")
        // get getAllCategories
        // get getAllCategories
        getAllCategories("#categorySiteNav")

        $('#customRange').change(function () {
            $('#priceRangeShow').text($(this).val())
        })
        // get search product
        // get search product
        $(document).on("click", "#seachProductFromShop", function (e) {
            e.preventDefault()
            var minimum = $('#minimum').val()
            var maximum = $('#maximum').val()
            var customRange = $('#customRange').val()
            if(brandId.length!==0){
                var data = {
                    minimum: minimum,
                    maximum: maximum,
                    customRange: customRange,
                    brandId: brandId,
                    url: window.origin + "/api/v1/universal/search-product"
                }
                seachingProduct(data, "#allProductByShop")
            }else{
                var data = {
                    minimum: minimum,
                    maximum: maximum,
                    customRange: customRange,
                    brandId: [""],
                    url: window.origin + "/api/v1/universal/search-product"
                }
                seachingProduct(data, "#allProductByShop")
            }
        })

        // get brand id Store
        // get brand id Store
        $(document).on("click", ".brandChk", function () {
            var brandSelectItem = $(this).prop("checked")
            if (brandSelectItem === true) {
                var brand = brandId.includes($(this).val())
                brandId.push($(this).val())
            } else if (brandSelectItem === false) {
                for (var i = 0; i < brandId.length; i++) {
                    if (brandId[i] === $(this).val()) {
                        brandId.splice(i, 1);
                    }
                }
            }
        })
        // get getProductByCategoryAndShopId
        // get getProductByCategoryAndShopId
        function getProductByCategoryAndShopId(id){
            var data = {
                categoryId:id,
                shopId:shopId,
                url:window.origin+"/api/v1/get-product-by-categoryId-and-shopId"
            }
            getAllProductByShopIdAndCategoryId(data, "#allProductByShop")
        }

    </script>

@endpush
