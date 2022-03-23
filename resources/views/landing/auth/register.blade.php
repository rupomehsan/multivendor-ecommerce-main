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


                        <h4 class="my-3 text-uppercase">Sign Up</h4>


                        <div class="form-group text-start my-3">
                            <label for="name" id="name_label" class="form-label">Name</label>
                            <input type="name" id="name" name="name" class="form-control py-2" placeholder="Enter Your Name">
                            <span class="text-danger" id="name_error">Error message</span>
                        </div>

                        <div class="form-group text-start my-3">
                            <label for="email" id="email_label" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control py-2" placeholder="Enter Your Email">
                            <span class="text-danger" id="email_error">Error message</span>
                        </div>

                        <div class="form-group text-start my-3">
                            <label for="phone" id="phone_label" class="form-label">Phone</label>
                            <input type="tel" id="phone" name="phone" class="form-control py-2" placeholder="Enter Your Phone">
                            <span class="text-danger">Error message</span>
                        </div>

                        <div class="form-group text-start my-3">
                            <label for="password" id="password_label" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control py-2" placeholder="Enter Your password">
                            <span class="text-danger">Error message</span>
                        </div>


                        <div class="form-group text-start my-3">
                            <label for="password" id="password_label" class="form-label">Confirm Password</label>
                            <input type="password" id="password" name="password" class="form-control py-2" placeholder="Enter Your password">
                            <span class="text-danger">Error message</span>
                        </div>

                        <button class="btn btn-valencia form-control text-capitalize my-3">Sign Up</button>

                        <span>Have Account ? <a href="{{url('/login')}}" class="text-danger">Log in</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')

@endpush