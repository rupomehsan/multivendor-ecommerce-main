<?php
$shopId = request()->segment(3);
?>
@extends('layouts.landing.vendor')
@section('content')
  <div id="shopdetailsContainer"></div>
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

    <script>
        $(function(){
            var shopId = "{{request()->segment(3)}}";
            var url = "/api/v1/shop-details/"+shopId;
            getShopDetailsWithAllProduct(url,shopId)
        })
    </script>

@endpush
