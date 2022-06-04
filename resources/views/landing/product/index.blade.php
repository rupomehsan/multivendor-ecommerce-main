@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')
    <div class="wrapper py-5" style="min-height: 60vh">
        <div class="row">
            <div class="col-lg-2">
                <span>Categories</span>
                <hr>
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
                <div id="categorySiteNav">
                </div>
                <hr>
                <form action="">
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
                    <div id="allBrandforShop" class="mt-3">

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
                </form>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h4 class="portion-title py-3">All Products</h4>
                            <span class="text-secondary">Total <span class="fw-bolder py-3" id="totalCountProductByCategory"></span> Products Found</span>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-3" id="allProductByCategory">
                </div>
                <div class="row" >
                    <div class="col-lg-2 offset-lg-5">
                        <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('custom-js')
    <script>
        var brandId = []
        $(function () {
            var categoryId = {{request()->segment(2)}};
            var getProductByCategoryId = "{{url('/api/v1/get-related-products-by-category')}}/" + categoryId
            getProduct(getProductByCategoryId,"#allProductByCategory")

            // get getAllCategories
            // get getAllCategories
            getAllCategories("#categorySiteNav")
            // get getAllBrands
            // get getAllBrands
            getAllBrands("#allBrandforShop")


        })

        // get getProductByCategoryAndShopId
        // get getProductByCategoryAndShopId
        function getProductByCategoryAndShopId(id){
            var data = {
                url:window.origin+"/api/v1/get-related-products-by-category/"+id
            }
            getAllProductByShopIdAndCategoryId(data, "#allProductByCategory")
        }
        // get customRange
        // get customRange
        $('#customRange').change(function () {
            $('#priceRangeShow').text($(this).val())
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
                seachingProduct(data, "#allProductByCategory")
            }else{
                var data = {
                    minimum: minimum,
                    maximum: maximum,
                    customRange: customRange,
                    brandId: [""],
                    url: window.origin + "/api/v1/universal/search-product"
                }
                seachingProduct(data, "#allProductByCategory")
            }
        })

    </script>
@endpush

