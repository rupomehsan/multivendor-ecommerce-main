@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <div class="container py-5" style="min-height: 50vh;" id="all-brands">
        <div class="text-center">
            <h4 class="text-valencia fw-bold text-capitalize">all brands</h4>
        </div>
        <div class="row" id="showAllBrands">

        </div>
    </div>




@endsection
@push('custom-js')
    <script>
        // get all brands
        // get all brands
        getAllBrands("#showAllBrands")
    </script>
@endpush
