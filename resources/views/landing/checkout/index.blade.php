@extends('layouts.landing.index')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="stepper">

                    <div class="steps active">
                        <span>1</span>
                    </div>
                    <div class="steps">
                        <span>2</span>
                    </div>

                    <div class="step-btn">
                        <a href="">prev</a>
                        <a href="">next</a>
                    </div>

                </div>
            </div>
        </div>

{{--        <div class="row row-cols-2 justify-content-between">--}}
{{--            <div class="col-7">--}}
{{--                <div class="card shadow-sm">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5>Delivery Information</h5>--}}

{{--                        <form action="">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 my-2">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="name" id="name" class="form-control"--}}
{{--                                               placeholder="Full Name *">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-6 my-2">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="name" id="name" class="form-control"--}}
{{--                                               placeholder="Phone *">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-6 my-2">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="name" id="name" class="form-control"--}}
{{--                                               placeholder="Email *">--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <div class="col-lg-6 my-2">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="name" id="name" class="form-control"--}}
{{--                                               placeholder="Address *">--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <div class="col-lg-12 my-2">--}}
{{--                                    <textarea name="" id="" rows="10" class="form-control" placeholder="Additional Information"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <button class="btn btn-valencia my-3 px-5">Save</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-4">--}}
{{--                <div class="card shadow-sm">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5>Order Summery</h5>--}}

{{--                        <div class="d-flex justify-content-between align-items-center my-3">--}}
{{--                            <span class="text-capitalize">sub total (2 items)</span>--}}
{{--                            <h5 class="m-0">$30.99</h5>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex justify-content-between align-items-center my-3">--}}
{{--                            <span class="text-capitalize">sub total (2 items)</span>--}}
{{--                            <h5 class="m-0">$30.99</h5>--}}
{{--                        </div>--}}

{{--                        <hr>--}}


{{--                        <div class="d-flex justify-content-between align-items-center my-3">--}}
{{--                            <span class="text-capitalize">sub total (2 items)</span>--}}
{{--                            <h5 class="m-0">$30.99</h5>--}}
{{--                        </div>--}}

{{--                        <button class="btn btn-valencia form-control text-capitalize my-3">MAKE PURCHASE</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
@endsection
