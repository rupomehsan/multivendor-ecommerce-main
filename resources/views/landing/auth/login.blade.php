@extends('layouts.landing.index')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="card bottom-shadow px-5">
                    <div class="card-body text-center">
                        <a >
                            <img class="" src="{{asset('assets/image/logo-black.png')}}" alt="">
                        </a>


                        <h4 class="my-3 text-uppercase">log in</h4>


                        <div class="form-group text-start my-3">
                            <label for="email" id="email_label" class="form-label">Email</label>
                            <input type="email" id="email" name="name" class="form-control py-2" placeholder="Enter Your Email">
                            <span class="text-danger">Error message</span>
                        </div>

                        <div class="form-group text-start my-3">
                            <label for="password" id="password_label" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control py-2" placeholder="Enter Your password">
                            <span class="text-danger">Error message</span>
                        </div>

                        <div class="text-end">
                            <a href="" class="btn text-capitalize text-secondary">forget password ?</a>
                        </div>

                        <button class="btn btn-valencia form-control text-capitalize my-3">Log in</button>

                        <span>New here? <a href="{{url('/register')}}" class="text-danger">Sign up</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')

@endpush
