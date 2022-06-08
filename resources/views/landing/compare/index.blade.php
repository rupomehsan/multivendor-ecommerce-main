@extends('layouts.landing.index')
@section('content')
    <div class="container my-5" style="min-height: 60vh" id="compareList">
        <h6 class="text-center portion-title py-4">Product Compare</h6>

        <section class="cd-products-comparison-table">
            <div class="cd-products-table">
                <div class="features">
                    <div class="top-info d-flex align-items-center justify-content-center">Models</div>
                    <ul class="cd-features-list">
                        <li>Name</li>
                        <li>Price</li>
                        <li>Customer Rating</li>
                        <li>Category</li>
                        <li>Brand</li>
                    </ul>
                </div> <!-- .features -->
                <div class="cd-products-wrapper">
                    <ul class="cd-products-columns" id="productColumn">
                    </ul> <!-- .cd-products-columns -->
                </div> <!-- .cd-products-wrapper -->
            </div> <!-- .cd-products-table -->
        </section> <!-- .cd-products-comparison-table -->


    </div>
@endsection
@push('custom-js')
    <script>
        $(function () {
            $.ajax({
                url: "{{url('api/v1/get-all-compare-list')}}",
                method: "get",
                dataType: "json",
                success: function (res) {
                    if (res.status === "success") {
                        var rating = 0
                        var image = "{{asset('assets/image/category.png')}}"
                        res.data.forEach(function (item) {
                            ratingCount(item)
                            $('#productColumn').append(`
                               <li class="product">
                                <div class="top-info">
                                    <img src="${item.image ? item.image : image}" alt="product image" class="img-fluid">
                                </div> <!-- .top-info -->
                                <ul class="cd-features-list">
                                    <li>${(item.product.name).slice(0, 15)}</li>
                                    <li>$ ${item.product.price}</li>
                                    <li class="">
                                    <span class="fa fa-star checked ${rating >= 1 ? "checked" : ""} my-3"></span>
                                    <span class="fa fa-star ${rating >= 2 ? "checked" : ""}"></span>
                                    <span class="fa fa-star ${rating >= 3 ? "checked" : ""}"></span>
                                    <span class="fa fa-star ${rating >= 4 ? "checked" : ""}"></span>
                                    <span class="fa fa-star ${rating >= 5 ? "checked" : ""}"></span>
</li>
                                    <li>${item.product.category[0].name}</li>
                                    <li>${item.product.brand.name}</li>
                                </ul>
                              </li> <!-- .product -->
                            `)
                        })

                        function ratingCount(res) {
                            var length = res.product.reviews.length
                            var ratingAdd = 0
                            res.product.reviews.forEach(function (item) {
                                // alert(item.rating)
                                ratingAdd += item.rating
                            })
                            rating = ratingAdd / length
                        }


                    }
                    console.log(res)
                },
                error: function (err) {
                    console.log(err)
                }
            })
        })
    </script>
@endpush
