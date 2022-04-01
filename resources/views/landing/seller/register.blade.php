@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <div id="seller-content">
        <div class="py-5 my-3 login">
            <div class="container d-flex align-items-center justify-content-between">
                <h6 class="m-0">Already a Seller?</h6>
                <button class="btn btn-valencia text-capitalize fw-bold px-4 py-2">login</button>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h6 class="portion-title text-center">Register your shop</h6>
                    <form action="">
                        <div class="card border rounded-0 my-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold fs-4">Personal information</h6>
                                <hr>

                                <div class="form-group mb-3">
                                    <label class="form-label" for="name" id="name_label">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           placeholder="Type Full Name">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label" for="email" id="name_label">Email</label>
                                    <input type="text" id="email" name="email" class="form-control"
                                           placeholder="Type Email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name" id="name_label">Password</label>
                                    <input type="password" id="name" name="name" class="form-control"
                                           placeholder="*****">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name" id="name_label">Confirm Password</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="*****">
                                </div>

                                <h6 class="card-title fw-bold fs-4">Shop information</h6>
                                <hr>

                                <div class="form-group mb-3">
                                    <label class="form-label" for="email" id="name_label">Shop Name</label>
                                    <input type="text" id="email" name="email" class="form-control"
                                           placeholder="Type Email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name" id="name_label">Shop Phone</label>
                                    <input type="password" id="name" name="name" class="form-control"
                                           placeholder="*****">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name" id="name_label">Shop Address</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="*****">
                                </div>

                                <span>By signing up you agree to our <a href="">terms and conditions</a></span>
                            </div>
                        </div>

                        <button class="btn btn-valencia form-control my-3">Register</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection

