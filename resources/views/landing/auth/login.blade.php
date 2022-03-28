@extends('layouts.landing.index')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="card bottom-shadow px-5">
                    <div class="card-body text-center">

                        <img class="" src="{{asset('assets/image/logo-black.png')}}" alt="">


                        <h4 class="my-3 text-uppercase">log in</h4>

                        <form action="">
                            <div class="form-group text-start my-3">
                                <label for="email" id="email_label" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control py-2"
                                       placeholder="Enter Your Email">
                                <span class="text-danger" id="email_error">Error message</span>
                            </div>

                            <div class="form-group text-start my-3">
                                <label for="password" id="password_label" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control py-2"
                                       placeholder="Enter Your password">
                                <span class="text-danger" id="password_error">Error message</span>
                            </div>

                            <div class="text-end">
                                <a href="" class="btn text-capitalize text-secondary">forget password ?</a>
                            </div>

                            <button class="btn btn-valencia form-control text-capitalize my-3">Log in</button>

                            <p class="my-3 text-uppercase">or</p>

                            <button
                                class="btn border form-control text-capitalize d-flex align-items-center justify-content-center">
                                <span class="iconify me-2" data-icon="flat-color-icons:google" data-width="20"
                                      data-height="20"></span>
                                Login with google
                            </button>

                            <p class="my-5">New here? <a href="{{url('/register')}}" class="text-danger text-uppercase">Sign
                                    up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

