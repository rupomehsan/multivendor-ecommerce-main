@extends('layouts.landing.index')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div id="smartwizard">
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="#step-1">
                            1 Address Information
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#step-2">
                            2 Order Information
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#step-3">
                            3 Payment Information
                        </a>
                    </li>
                </ul>

                <div class="tab-content mt-4 d-flex justify-content-between" style="overflow-x: hidden !important;">
                    <div class="w-100 me-2 ">
                        <div id="step-1" class="tab-pane" role="tabpanel">

                            <div class="card border rounded-0">
                                <div class="card-body">
                                    <h6 class="card-title">Address & Billing Information:</h6>
                                    <hr/>

                                    <div class="row">
                                        <div class="col-lg-6 my-2">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control"
                                                       placeholder="Full Name *">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 my-2">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control"
                                                       placeholder="Phone *">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 my-2">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control"
                                                       placeholder="Email *">
                                            </div>
                                        </div>


                                        <div class="col-lg-6 my-2">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control"
                                                       placeholder="Address *">
                                            </div>
                                        </div>


                                        <div class="col-lg-12 my-2">
                                            <textarea name="" id="" rows="10" class="form-control"
                                                      placeholder="Additional Information"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel">
                            <div class="card border rounded-0" style="min-height: 500px">
                                <div class="card-body">
                                    <h6 class="card-title">Order Information:</h6>
                                    <hr/>

                                    <ul class="order_list">
                                        <li class="order_list_item py-3">
                                            <div class="d-flex">
                                                <img class="img-fluid bottom-shadow me-5"
                                                     src="{{asset('assets/image/pos-item.png')}}" alt="">

                                                <ul class="text-capitalize fw-bold">
                                                    <li>
                                                        <h4 class="">Blue shirt</h4>
                                                    </li>
                                                    <li>
                                                        <h6 class="text-secondary fw-bold">shirt: <span
                                                                class="text-black-50 fw-lighter">blue</span></h6>
                                                    </li>

                                                    <li>
                                                        <h6 class="text-secondary fw-bold">color: <span
                                                                class="text-black-50 fw-lighter">blue</span></h6>
                                                    </li>

                                                    <li>
                                                        <h6 class="text-secondary fw-bold">size: <span
                                                                class="text-black-50 fw-lighter">m</span></h6>
                                                    </li>

                                                    <li>
                                                        <h6 class="text-secondary fw-bold">quantity: <span
                                                                class="text-black-50 fw-lighter">1</span></h6>
                                                    </li>
                                                    <li>
                                                        <h6 class="text-secondary fw-bold">total price: <span
                                                                class="text-black-50 fw-lighter">120</span></h6>
                                                    </li>


                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel">
                            <div class="card border rounded-0" style="min-height: 500px">
                                <div class="card-body">
                                    <h6 class="card-title">Delivery Info:</h6>
                                    <hr/>

                                    <ul class="text-capitalize text-valencia mb-3">
                                        <li class="d-flex align-items-center">
                                            <span class="iconify me-2" data-icon="bxs:user" data-width="20"
                                                  data-height="20"></span>
                                            <span>Ashiqur Rahman</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="iconify me-2" data-icon="bxs:user" data-width="20"
                                                  data-height="20"></span>
                                            <span>Ashiqur Rahman</span>
                                        </li>

                                        <li class="d-flex align-items-center">
                                            <span class="iconify me-2" data-icon="bxs:user" data-width="20"
                                                  data-height="20"></span>
                                            <span>Ashiqur Rahman</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="iconify me-2" data-icon="bxs:user" data-width="20"
                                                  data-height="20"></span>
                                            <span>Ashiqur Rahman</span>
                                        </li>

                                    </ul>

                                    <span class="card-title text-capitalize fs-5 fw-bold">payment method</span>
                                    <hr/>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" id="cod"
                                                   value="cod">
                                            <label class="form-check-label" for="cod">
                                                Cash On Delivery
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method"
                                                   id="credit_card" value="credit">
                                            <label class="form-check-label" for="credit_card">
                                                Credit Card
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method"
                                                   id="mob" value="mob">
                                            <label class="form-check-label" for="mob">
                                                Mobile Banking
                                            </label>
                                        </div>
                                    </div>


                                    <div class="d-none mt-4" id="mobile_banking_content">
                                        <span class=" fs-6 my-2">Please choose your payment gateway</span>

                                        <ul class="d-flex align-items-center">
                                            <li>
                                                <a href="">
                                                    <img src="{{asset('assets/image/bikash.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="{{asset('assets/image/bikash.png')}}" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="d-none my-4" id="credit_content">
                                        <div class="row">
                                            <div class="col-lg-6 my-2">
                                                <input type="text" class="form-control" placeholder="Card Name">
                                            </div>

                                            <div class="col-lg-6 my-2">
                                                <input type="text" class="form-control" placeholder="Cvv">
                                            </div>
                                            <div class="col-lg-6 my-2">
                                                <input type="month" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border rounded-0">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize fw-bold">Price Details</h5>
                            <hr>

                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="">Total:</h6>
                                <h6 class="fw-bold text-black-50 fs-4">$35.99</h6>
                            </div>
                            <hr>

                            <div class="mb-3">
                                <h5 class="fw-bold">Delivery Method</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivery" id="normal">
                                    <label class="form-check-label" for="normal">
                                        Normal Delivery: <span class="text-valencia ">(5-6 days)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivery" id="express">
                                    <label class="form-check-label" for="express">
                                        Express Delivery:<span class="text-valencia">(2-3 days)</span>
                                    </label>
                                </div>
                            </div>


                            <div>
                                <h5 class="fw-bold">Packaging</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivery" id="normal">
                                    <label class="form-check-label" for="normal">
                                        Default Packaging: <span
                                            class="text-valencia">(Default packaging by store)</span>

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivery" id="express">
                                    <label class="form-check-label fs-6" for="express">
                                        Gift Packaging:<span class="text-valencia">(Exclusive gift packaging)</span>
                                    </label>
                                </div>
                            </div>
                            <hr>

                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="">final:</h6>
                                <h6 class="fw-bold text-black-50 fs-4">$35.99</h6>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
@push('custom-js')
    <script>

        // var btnFinish = $("<button></button>")
        //     .text("Finish")
        //     .addClass("btn btn-primary")
        //     .on("click", function () {
        //         alert("Finish Clicked");
        //     });


        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            useURLhash: false,
            autoAdjustHeight: true,
            enableAllSteps: false,
            lang: {
                next: 'Continue',
                previous: 'Back'
            },


            enableURLhash: false,
            useURLhash: false,

            // toolbarSettings: {
            //     toolbarExtraButtons: [btnFinish],
            // },


        });


        $("input[name='payment_method']").click(function () {
            let value = $(this).attr("value");
            if (value === 'mob') {
                $('#mobile_banking_content').toggleClass('d-none')
            } else if (value === 'credit') {
                $('#credit_content').toggleClass('d-none')
            } else {
                $('#mobile_banking_content').addClass('d-none')
                $('#credit_content').addClass('d-none')
            }
        })


    </script>
@endpush()
