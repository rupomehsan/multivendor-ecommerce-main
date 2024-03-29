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
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="{{asset('assets/image/vendor-icon.png')}}" alt="">
                                </div>

                                <div class="col-lg-6">
                                    <h6>AJ shopping online bd</h6>

                                    <p>2231 Followers</p>
                                    <p>85% Positive Seller Ratings</p>
                                </div>

                                <div class="col-lg-2">
                                    <button class="btn">
                                            <span class="iconify" data-icon="jam:messages" data-width="25"
                                                  data-height="25"></span>
                                        chat
                                    </button>
                                </div>

                                <div class="col-lg-2">
                                    <button class="btn">
                                            <span class="iconify" data-icon="jam:messages" data-width="25"
                                                  data-height="25"></span>
                                        follow
                                    </button>
                                </div>
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
                    <a href="{{url('/vendor/coupon')}}"
                       class="nav-link {{ in_array('profile', request()->segments()) ? 'active' : '' }}">coupon</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container py-5">
        <h6 class="text-center portion-title">Coupons</h6>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="seller-coupons">
                    <img class="img-fluid" src="{{asset('assets/image/offer.png')}}" alt="">
                    <button class="btn btn-valencia">copy code</button>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="seller-coupons">
                    <img class="img-fluid" src="{{asset('assets/image/offer.png')}}" alt="">
                    <button class="btn btn-valencia">copy code</button>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="seller-coupons">
                    <img class="img-fluid" src="{{asset('assets/image/offer.png')}}" alt="">
                    <button class="btn btn-valencia">copy code</button>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="seller-coupons">
                    <img class="img-fluid" src="{{asset('assets/image/offer.png')}}" alt="">
                    <button class="btn btn-valencia">copy code</button>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="seller-coupons">
                    <img class="img-fluid" src="{{asset('assets/image/offer.png')}}" alt="">
                    <button class="btn btn-valencia">copy code</button>
                </div>
            </div>

        </div>
    </div>
@endsection
