@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <div class="container py-5" style="min-height: 50vh;">
        <div class="text-center">
            <h4 class="text-valencia fw-bold text-capitalize">all category</h4>
        </div>
        <div class="row row-cols-2" id="categoryPage">


        </div>
    </div>
@endsection
@push('custom-js')
    <script>
      $(document).ready(function(){
          getAllCategories("#categoryPage")
      })
    </script>
@endpush
