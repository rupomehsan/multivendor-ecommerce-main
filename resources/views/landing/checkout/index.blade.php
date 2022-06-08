@extends('layouts.landing.index')
@section('content')
    <div class="container py-5">
        <form action="{{url('api/v1/product/order')}}" id="form" name="form" enctype="multipart/form-data"
              novalidate>
            <input type="hidden" name="store_id" id="store_id"/>
            <div class="row">
                <div id="smartwizard">
                    <ul class="nav">
                        <li>
                            <a class="nav-link" href="#step-1">
                                1 => Address Information
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#step-2">
                                2 => Order Information
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#step-3">
                                3 => Payment Information
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
                                                    <input type="text" name="first_name" id="first_name"
                                                           class="form-control"
                                                           placeholder="first Name *">
                                                    <span class="text-danger" id="first_name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-2">
                                                <div class="form-group">
                                                    <select name="division" id="division" class="form-control">
                                                        <option selected disabled>Select Your Division</option>

                                                    </select>

                                                    <span class="text-danger" id="phone_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-2">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" id="last_name"
                                                           class="form-control"
                                                           placeholder="Last Name *">
                                                    <span class="text-danger" id="last_name_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 my-2">
                                                <div class="form-group">
                                                    <select name="district" id="district" class="form-control">


                                                    </select>

                                                    <span class="text-danger" id="phone_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-2">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" class="form-control"
                                                           placeholder="Email *">
                                                    <span class="text-danger" id="email_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-2">
                                                <div class="form-group">
                                                    <select name="station" id="station" class="form-control">


                                                    </select>

                                                    <span class="text-danger" id="phone_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 my-2">
                                                <div class="form-group">
                                                    <input type="number" name="phone" id="phone" class="form-control"
                                                           placeholder="Phone *">
                                                    <span class="text-danger" id="phone_error"></span>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 my-2">
                                                <div class="form-group">
                                                    <input type="text" name="" id="" class="form-control"
                                                           placeholder="Colony / Suburb / Locality / Landmark">
                                                    <span class="text-danger" id="phone_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 my-2">
                                            <textarea name="additional_info" id="" rows="10" class="form-control"
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



                                        <ul class="order_list" id="clientCartItem">

{{--                                            <li class="border-3 my-3" style="width:100%;height: 100px">--}}
{{--                                                <h1>Rupomehsan</h1>--}}
{{--                                            </li>--}}


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
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                       id="cod"
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

                                            <ul class="d-flex align-items-center my-3">

                                                <div class="button-container mx-3 border">
                                                    <img src="{{asset('assets/image/bikash.png')}}" alt="Snow"
                                                         style="width:100%">
                                                    <button class="btn">Bkash</button>
                                                </div>

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
                    </div>
                </div>
                <div class="card border rounded-0">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize fw-bold">Price Details</h5>
                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-bolder">Total Price:</h6>
                            <input type="hidden" name="total" class="totalPrice" value="">
                            <h6 class="fw-bold text-black-50 fs-4">$ <span id="totalPrice">00</span></h6>
                        </div>
                        <hr>

                        <div class="mb-3">
                            <h5 class="fw-bold my-3">Delivery Method</h5>
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input deliveryMethod" checked type="radio" name="delivery"
                                           id="normal"
                                           value='{"price":"50", "method":"normal"}'>
                                    <label class="form-check-label mt-1" for="normal">
                                        Normal Delivery: <span class="text-valencia ">(5-6 days)</span>
                                    </label>
                                </div>
                                <div>
                                    <h5 class="fw-bold my-3"><span id="normalDelivery">50</span>$</h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input deliveryMethod" type="radio" name="delivery"
                                           id="express"
                                           value='{"price":"70", "method":"express"}'>
                                    <label class="form-check-label mt-1" for="express">
                                        Express Delivery:<span class="text-valencia">(2-3 days)</span>
                                    </label>
                                </div>
                                <div>
                                    <h5 class="fw-bold my-3"><span id="expressDelivery">70</span>$</h5>
                                </div>
                            </div>
                        </div>


                        <div>
                            <h5 class="fw-bold my-3">Packaging</h5>
                            <div class="d-flex justify-content-between">


                                <div class="form-check">
                                    <input class="form-check-input packaging" checked type="radio" name="packaging"
                                           id="default"
                                           value='{"price":"10", "packaging":"default"}'>
                                    <label class="form-check-label mt-1" for="normal">
                                        Default Packaging: <span
                                            class="text-valencia">(Default packaging by store)</span>
                                    </label>
                                </div>
                                <div>
                                    <p class="my-3 fw-bold"><span id="defaultPackaging">10</span>$</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input packaging" type="radio" name="packaging" id="gift"
                                           value='{"price":"20", "packaging":"default"}'>
                                    <label class="form-check-label fs-6 mt-1" for="express">
                                        Gift Packaging:<span class="text-valencia">(Exclusive gift packaging)</span>
                                    </label>
                                </div>
                                <div>
                                    <p class="my-3 fw-bold"><span id="giftPackaging">20</span>$</p>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-bolder">Grand Total : </h6>
                            <input type="hidden" name="grand_total" class="grandTotal" value="">
                            <h6 class="fw-bold text-black-50 fs-4">$ <span id="grandTotal">00</span></h6>
                        </div>


                    </div>


                </div>
            </div>

            <div class="d-flex justify-content-end my-3">
                <button id="submit-button" type="submit" class="btn btn-primary">Confirm Order</button>
            </div>
        </form>

    </div>
@endsection
@push('custom-js')
    <script>
        var storeId = []
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
        $(function () {
            getClientCartAllItems()

            $.ajax({
                url: "{{url('api/v1/get-all-division')}}",
                method: "get",
                dataType: "json",
                success: function (res) {

                    if (res.status === "success") {
                        $("#division").empty()
                        $("#division").append(`
                         <option selected disabled>Select Your Division</option>
                        `)
                        res.data.forEach(function (item) {
                            $("#division").append(`
                             <option value="${item.id}">${item.name}</option>
                            `)
                        })
                    }
                },
                error: function (err) {
                    console.log(err)
                }
            })

            $("#division").change(function () {
                var division = $(this).val()

                $.ajax({
                    url: "{{url('api/v1/get-all-district-by-division-id')}}/" + division,
                    method: "get",
                    dataType: "json",
                    success: function (res) {
                        // console.log("district",res)
                        if (res.status === "success") {
                            $("#district").empty()
                            $("#district").append(`
                         <option selected disabled>Select Your District</option>
                        `)
                            res.data.forEach(function (item) {
                                $("#district").append(`
                             <option value="${item.id}">${item.name}</option>
                            `)
                            })
                        }
                    },
                    error: function (err) {
                        console.log(err)
                    }
                })

            })

            $("#district").change(function () {
                var district = $(this).val()
                // alert(district)
                $.ajax({
                    url: "{{url('api/v1/get-all-station-by-district-id')}}/" + district,
                    method: "get",
                    dataType: "json",
                    success: function (res) {
                        if (res.status === "success") {
                            if (res.status === "success") {
                                $("#station").empty()
                                $("#station").append(`
                         <option selected disabled>Select Your Station</option>
                        `)
                                res.data.forEach(function (item) {
                                    $("#station").append(`
                             <option value="${item.id}">${item.name}</option>
                            `)
                                })
                            }
                        }
                    },
                    error: function (err) {
                        console.log(err)
                    }
                })

            })

        })

        console.log("store", storeId)
        // $(document).on("submit","#confirmOrder",function(e){
        //     e.preventDefault()
        // })
        //add item
        //add item
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })

        /**
         * Submit Form (AJAX)
         */
        function formSubmit(type, btn, form, headers = null) {
            // var dmeoUser = JSON.parse(localStorage.getItem('userData'))
            // if (dmeoUser.email !== "demoadmin@ecommerce.com") {
            let url = form.attr('action');
            // alert(url);
            let form_data = JSON.stringify(form.serializeJSON());
            formData = JSON.parse(form_data);
            $('#preloader').removeClass('d-none')
            $.ajax({
                type: type, url: url, data: formData, headers: headers, beforeSend: function () {
                    // $('#' + btn).prop('disabled', true);
                }, success: function (response) {
                    if (response.status === 'success') {
                        $('#preloader').addClass('d-none')
                        toastr.success(response.message);
                        form[0].reset();
                        const myTimeout = setTimeout(redirectPage, 1000);
                        // setTimeout(returnPage(page), 10000);
                    }
                }, error: function (xhr, resp, text) {
                    // console.log(xhr)
                    // on error, tell the failed
                    if (xhr && xhr.responseText) {
                        $('#preloader').addClass('d-none')
                        let response = JSON.parse(xhr.responseText);
                        if (response.status === 'validate_error') {
                            $('#preloader').addClass('d-none')
                            $.each(response.message, function (index, message) {
                                if (message.field && message.field !== 'global') {
                                    $('#' + message.field).addClass('is-invalid');
                                    $('#' + message.field + '_label').addClass('text-danger');
                                    $('#' + message.field + '_error').html(message.error);
                                } else if (message.error) {
                                    $('#preloader').addClass('d-none')
                                    // toastr.error(message.error);
                                    console.log("err 0")
                                } else {
                                    // toastr.error('Something went wrong', 'Please try again after sometime.');
                                    console.log("err 1")
                                    $('#preloader').addClass('d-none')
                                }
                            });
                        } else {
                            // toastr.error('Something went wrong', 'Please try again after sometime.');
                            console.log("err 2")
                            $('#preloader').addClass('d-none')
                        }
                    } else {
                        $('#preloader').addClass('d-none')
                        // toastr.error('Something went wrong', 'Please try again after sometime.');
                        console.log("err 3")
                    }
                }, complete: function (xhr, status) {
                    // $('#' + btn).prop('disabled', false);
                }
            });
            // } else {
            //     toastr.error('Sorry You Are Demo Use')
            // }
        }

    </script>
@endpush()
