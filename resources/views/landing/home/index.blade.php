@extends('layouts.landing.index')

@section('content')
    <!-- ***** Hero Section ***** -->
    <img class="w-100" src="{{asset('assets/image/hero.png')}}" alt="">


    <!-- ***** Pick Up Section ***** -->
    <div id="pickup-section" class="py-4 d-flex align-items-center justify-content-center">
        <div class="text-center me-5">
            <span class="iconify" data-icon="carbon:delivery" style="color: #da333d;" data-width="55" data-height="55"></span>
            <p>24/7 Nationwide Delivery</p>
        </div>

        <div class="text-center me-5">
            <span class="iconify" data-icon="gg:arrows-exchange" style="color: #da333d;" data-width="25" data-height="25"></span>
            <p>Warranty On All Products</p>
        </div>

        <div class="text-center me-5">
            <span class="iconify" data-icon="carbon:delivery" style="color: #da333d;" data-width="55" data-height="55"></span>
            <p>24/7 Nationwide Delivery</p>
        </div>
    </div>

@endsection

@push('custom-js')
    <script>
        let heroSwiper = new Swiper(".hero-swiper", {
            direction: "vertical",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
