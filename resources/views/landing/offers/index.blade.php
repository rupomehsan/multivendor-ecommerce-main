@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')



    <div class="container py-5" style="min-height: 50vh;" id="all-shops">
        <div class="text-center">
            <h4 class="text-valencia fw-bold text-capitalize">all offers</h4>
        </div>

        <div class="row row-cols-2">
            <div class="col mb-3">
                <img src="{{asset('assets/image/offer.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col mb-3">
                <img src="{{asset('assets/image/offer.png')}}" class="img-fluid" alt="">
            </div>


            <div class="col mb-3">
                <img src="{{asset('assets/image/offer.png')}}" class="img-fluid" alt="">
            </div>


            <div class="col mb-3">
                <img src="{{asset('assets/image/offer.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col mb-3">
                <img src="{{asset('assets/image/offer.png')}}" class="img-fluid" alt="">
            </div>

        </div>



    </div>




@endsection
