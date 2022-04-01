@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <img class="img-fluid" src="{{asset('assets/image/all-shop.png')}}" alt="">

    <div class="container py-5" style="min-height: 50vh;" id="all-shops">
        <div class="text-center">
            <h4 class="text-valencia fw-bold text-capitalize">all shops</h4>
        </div>


        <div class="row my-3">
            <div class="col-lg-4 col-12 mb-3">
                <div class="card position-relative">
                    <img class="card-img-top shop-cover-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">
                    <img class="shop-profile-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">


                    <div class="card-body border pt-5 text-center">
                        <h6 class="fw-bold my-3 fs-3">Bonton</h6>
                        <p class="fw-bold">All kind of clothing store</p>
                        <span class="d-block">Shop since 9th july, 2018</span>
                        <span class="d-block">Total Products 343</span>

                        <div class="row justify-content-around my-3">
                            <div class="col-3">
                                <button class="btn form-control fw-bold">follow</button>
                            </div>
                            <div class="col-4">
                                <button class="btn form-control btn-valencia">visit store</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-12 mb-3">
                <div class="card position-relative">
                    <img class="card-img-top shop-cover-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">
                    <img class="shop-profile-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">


                    <div class="card-body border pt-5 text-center">
                        <h6 class="fw-bold my-3 fs-3">Bonton</h6>
                        <p class="fw-bold">All kind of clothing store</p>
                        <span class="d-block">Shop since 9th july, 2018</span>
                        <span class="d-block">Total Products 343</span>

                        <div class="row justify-content-around my-3">
                            <div class="col-3">
                                <button class="btn form-control fw-bold">follow</button>
                            </div>
                            <div class="col-4">
                                <button class="btn form-control btn-valencia">visit store</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-12 mb-3">
                <div class="card position-relative">
                    <img class="card-img-top shop-cover-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">
                    <img class="shop-profile-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">


                    <div class="card-body border pt-5 text-center">
                        <h6 class="fw-bold my-3 fs-3">Bonton</h6>
                        <p class="fw-bold">All kind of clothing store</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="fw-bold">4.2</span>
                            <span class="iconify" data-icon="clarity:star-solid" data-width="20"
                                  data-height="20"></span>

                            <span class="text-black-50">(86 Ratings)</span>
                        </div>
                        <span class="d-block">Shop since 9th july, 2018</span>
                        <span class="d-block">Total Products 343</span>

                        <div class="row justify-content-around my-3">
                            <div class="col-3">
                                <button class="btn form-control fw-bold">follow</button>
                            </div>
                            <div class="col-4">
                                <button class="btn form-control btn-valencia">visit store</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>




@endsection
