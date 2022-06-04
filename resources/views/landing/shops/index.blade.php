@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <img class="img-fluid" src="{{asset('assets/image/all-shop.png')}}" alt="">

    <div class="container py-5" style="min-height: 50vh;" id="all-shops">
        <div class="text-center">
            <h4 class="text-valencia fw-bold text-capitalize">all shops</h4>
        </div>


        <div class="row my-3" id="showAllShps">


        </div>


    </div>




@endsection
@push('custom-js')
    <script>
        $(function () {
            var getallShops = "{{url('/api/v1/vendors')}}";
            getAllShops(getallShops,"#showAllShps")
        })
    </script>
@endpush
