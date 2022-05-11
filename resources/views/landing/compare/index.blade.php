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
                        <li>Resolution</li>
                        <li>Screen Type</li>
                        <li>Display Size</li>
                        <li>Refresh Rate</li>
                        <li>Model Year</li>
                        <li>Tuner Technology</li>
                        <li>Ethernet Input</li>
                        <li>USB Input</li>
                        <li>Scart Input</li>
                    </ul>
                </div> <!-- .features -->

                <div class="cd-products-wrapper">
                    <ul class="cd-products-columns">
                        <li class="product">
                            <div class="top-info">
                                <img src="{{asset('assets/image/category.png')}}" alt="product image" class="img-fluid">
                            </div> <!-- .top-info -->
                            <ul class="cd-features-list">
                                <li>Temporibus Doloribus </li>
                                <li>$600</li>
                                <li class="rate"><span>5/5</span></li>
                                <li>1080p</li>
                                <li>LED</li>
                                <li>47.6 inches</li>
                                <li>800Hz</li>
                                <li>2015</li>
                                <li>mpeg4</li>
                                <li>1 Side</li>
                                <li>3 Port</li>
                                <li>1 Rear</li>
                            </ul>
                        </li> <!-- .product -->
                        <li class="product">
                            <div class="top-info">
                                <img src="{{asset('assets/image/category.png')}}" alt="product image" class="img-fluid">
                            </div> <!-- .top-info -->
                            <ul class="cd-features-list">
                                <li>Temporibus Doloribus</li>
                                <li>$600</li>
                                <li class="rate"><span>5/5</span></li>
                                <li>1080p</li>
                                <li>LED</li>
                                <li>47.6 inches</li>
                                <li>800Hz</li>
                                <li>2015</li>
                                <li>mpeg4</li>
                                <li>1 Side</li>
                                <li>3 Port</li>
                                <li>1 Rear</li>
                            </ul>
                        </li> <!-- .product -->
                        <li class="product">
                            <div class="top-info">
                                <img src="{{asset('assets/image/category.png')}}" alt="product image" class="img-fluid">
                            </div> <!-- .top-info -->
                            <ul class="cd-features-list">
                                <li>$600</li>
                                <li class="rate"><span>5/5</span></li>
                                <li>1080p</li>
                                <li>LED</li>
                                <li>47.6 inches</li>
                                <li>800Hz</li>
                                <li>2015</li>
                                <li>mpeg4</li>
                                <li>1 Side</li>
                                <li>3 Port</li>
                                <li>1 Rear</li>
                            </ul>
                        </li> <!-- .product -->
                        <li class="product">
                            <div class="top-info">
                                <img src="{{asset('assets/image/category.png')}}" alt="product image" class="img-fluid">
                            </div> <!-- .top-info -->
                            <ul class="cd-features-list">
                                <li>$600</li>
                                <li class="rate"><span>5/5</span></li>
                                <li>1080p</li>
                                <li>LED</li>
                                <li>47.6 inches</li>
                                <li>800Hz</li>
                                <li>2015</li>
                                <li>mpeg4</li>
                                <li>1 Side</li>
                                <li>3 Port</li>
                                <li>1 Rear</li>
                            </ul>
                        </li> <!-- .product -->
                        <li class="product">
                            <div class="top-info">
                                <img src="{{asset('assets/image/category.png')}}" alt="product image" class="img-fluid">
                            </div> <!-- .top-info -->
                            <ul class="cd-features-list">
                                <li>$600</li>
                                <li class="rate"><span>5/5</span></li>
                                <li>1080p</li>
                                <li>LED</li>
                                <li>47.6 inches</li>
                                <li>800Hz</li>
                                <li>2015</li>
                                <li>mpeg4</li>
                                <li>1 Side</li>
                                <li>3 Port</li>
                                <li>1 Rear</li>
                            </ul>
                        </li> <!-- .product -->

                    </ul> <!-- .cd-products-columns -->
                </div> <!-- .cd-products-wrapper -->
            </div> <!-- .cd-products-table -->
        </section> <!-- .cd-products-comparison-table -->


    </div>
@endsection
@push('custom-js')
    <script>
        $(function(){
            $.ajax({
                url:"{{url('api/v1/get-all-compare-list')}}",
                method:"get",
                dataType:"json",
                success:function(res){
                    console.log(res)
                },
                error:function(err){
                    console.log(err)
                }
            })
        })
    </script>
@endpush
