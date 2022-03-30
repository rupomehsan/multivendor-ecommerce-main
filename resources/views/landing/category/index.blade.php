@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <div class="container py-5" style="min-height: 50vh;">
        <div class="text-center">
            <h4 class="text-valencia fw-bold text-capitalize">all category</h4>
        </div>
        <div class="row row-cols-2">
            <div class="col my-3">

                <div class="card border">
                    <div class="card-body d-flex">
                        <img src="{{asset('assets/image/category.png')}}" style="width: 200px; height: 120px" alt="">

                        <div class="ms-3">
                            <a href="{{url('all-products')}}" class="fw-bold">Electronics & Gadgets</a>
                            <ul class="d-flex mt-4">
                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>

                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col my-3">

                <div class="card border">
                    <div class="card-body d-flex">
                        <img src="{{asset('assets/image/category.png')}}" style="width: 200px; height: 120px" alt="">

                        <div class="ms-3">
                            <a href="" class="fw-bold">Electronics & Gadgets</a>
                            <ul class="d-flex mt-4">
                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>

                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col my-3">

                <div class="card border">
                    <div class="card-body d-flex">
                        <img src="{{asset('assets/image/category.png')}}" style="width: 200px; height: 120px" alt="">

                        <div class="ms-3">
                            <a href="" class="fw-bold">Electronics & Gadgets</a>
                            <ul class="d-flex mt-4">
                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>

                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col my-3">

                <div class="card border">
                    <div class="card-body d-flex">
                        <img src="{{asset('assets/image/category.png')}}" style="width: 200px; height: 120px" alt="">

                        <div class="ms-3">
                            <a href="" class="fw-bold">Electronics & Gadgets</a>
                            <ul class="d-flex mt-4">
                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>

                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col my-3">

                <div class="card border">
                    <div class="card-body d-flex">
                        <img src="{{asset('assets/image/category.png')}}" style="width: 200px; height: 120px" alt="">

                        <div class="ms-3">
                            <a href="" class="fw-bold">Electronics & Gadgets</a>
                            <ul class="d-flex mt-4">
                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>

                                <li class="me-2">
                                    <a href="" class="text-black">Laptop,</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
