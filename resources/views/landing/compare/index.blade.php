@extends('layouts.landing.index')
@section('content')
    <div class="container my-5">
        <h6 class="text-center portion-title">Product Compare</h6>

       <div class="products-comparison-table">
           <div class="features">
               <div class="top-info">Models</div>
               <ul class="features-list">
                   <li>Price</li>
                   <li>Customer Rating</li>
                   <li>Description</li>
                   <li>Add to Cart</li>
                   <li>Remove</li>
                   
               </ul>
           </div>


           <div class="products-wrapper">
               <ul class="products-columns">
                   <li class="product">
                       <div class="top-info">
                           <div class="check"></div>
                           <img src="{{asset('assets/image/category.png')}}" alt="product image">
                           <h3>Samsung Series 6 J6300</h3>
                       </div>

                       <ul class="features-list">
                           <li>$600</li>
                           <li class="rate"><span>5/5</span></li>
                           <li>1080p</li>
                           <li>LED</li>
                           <li>47.6 inches</li>
                       </ul>
                   </li>

                   <li class="product">
                       <div class="top-info">
                           <div class="check"></div>
                           <img src="{{asset('assets/image/category.png')}}" alt="product image">
                           <h3>Samsung Series 6 J6300</h3>
                       </div>

                       <ul class="features-list">
                           <li>$600</li>
                           <li class="rate"><span>5/5</span></li>
                           <li>1080p</li>
                           <li>LED</li>
                           <li>47.6 inches</li>
                       </ul>
                   </li>

               </ul>
           </div>
       </div>
    </div>
@endsection
