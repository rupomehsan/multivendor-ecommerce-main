@extends('layouts.landing.index')

@section('content')
    <div class="container my-2">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-fluid" src="{{asset('assets/image/pos-item.png')}}" alt="">
            </div>

            <div class="col-lg-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-uppercase">puma shoes</h2>

                    <div class="bg-danger p-2">
                        <span class="iconify" data-icon="fontisto:email" style="color: white;" data-width="20"
                              data-height="20"></span>
                    </div>
                </div>

                <div>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>
                    <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                          data-height="20"></span>

                    <span>4.2</span>
                    <span>(123 Customer reviews)</span>
                </div>


                <h2>$14.99</h2>

                <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus ante viverra platea ac egestas nulla. Mi volutpat ultricies amet egestas sem. Porttitor ut nunc non neque. Consectetur est non sollicitudin enim ac quisque massa malesuada.
                </span>

                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="handle-counter" id="handleCounter">
                                <span>Qty</span>
                                <button class="btn decrement-btn">-</button>
                                <input class="counter-input" type="text" value="1">
                                <button class="btn increment-btn">+</button>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <button class="btn btn-valencia form-control">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')

@endpush
