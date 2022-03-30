@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <div class="container py-5" style="min-height: 50vh;" id="all-shops">
        <div class="text-center">
            <h4 class="text-valencia fw-bold text-capitalize">all shops</h4>
        </div>


        <div class="row">
            <div class="col-lg-4">
                <div class="card position-relative">
                    <img class="card-img-top shop-cover-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">
                    <img class="shop-profile-photo" src="{{asset('assets/image/shop-bg.png')}}" alt="">


                    <div class="card-body border">
                        <h6>Bonton</h6>
                        <span>All kind of clothing store</span>
                        <span>Shop since 9th july, 2018</span>
                        <span>Total Products 343</span>

                        <div class="row justify-content-around">
                            <div class="col-3">
                                <button class="btn form-control">follow</button>
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
