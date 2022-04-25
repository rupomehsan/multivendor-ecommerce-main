<?php
$id = request()->segment(4);
?>
@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">

                    <div class="payment-page">
                        <div class="row">
                            <div class="col-md-7">
                                <h4 class="card-title text-base-color">Return</h4>
                                <div class="return-product" >
                                    <form action="{{url('api/v1/purchase/product-return')}}" id="form" name="form" enctype="multipart/form-data"
                                          novalidate>
                                    <table>
                                        <tr>
                                            <th width="70%">Product Details</th>
                                            <th width="30%">Return Quantity</th>
                                        </tr>
                                        <tbody id="product-item">

                                        </tbody>
                                    </table>
                                        <button id="submit-button" type="submit" class="btn btn-base-primary my-2" style="float:right;">Save</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <h4>Order Summary</h4>
                                <table>
                                    <tr>
                                        <th>Product</th>
                                        <th>Item Total</th>
                                    </tr>
                                    <tbody id="product-item">

                                    </tbody>
                                    <tr>
                                        <td  style="text-align: right">Subtotal</td>
                                        <td  style="text-align: center" id="itemsubtotal"></td>
                                    </tr>
                                    <tr>
                                        <td  style="text-align: right">Payable Amount</td>
                                        <td  style="text-align: center" id="payable_amount"></td>
                                    </tr>
                                    <tr>
                                        <td  style="text-align: right" id="paidBy">Paid Amount</td>
                                        <td  style="text-align: center"  id="paid_amount"></td>
                                    </tr>
                                    <tr>
                                        <td  style="text-align: right">Due Amount</td>
                                        <td  style="text-align: center" id="due_amount"> </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection

@push('custom-js')
    <script>
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/purchase"
        }
        // get-for-return-product;
        // get-for-return-product;
        $(document).ready(function (){
            // var date = new Date().toLocaleDateString();
            var date = new Date().toLocaleString('en-us',{month:'long', year:'numeric',day:'numeric'});
            alert(date)
            let id = "{{request()->segment(4)}}"
            url = "{{url('api/v1/purchase/payment/get-for-return-product')}}/" + id
            $.ajax({
                url:url,
                method:"get",
                dataType:"json",
                success:function(res){
                    if(res.status==="success"){
                        res.data.purchase_products.forEach(function(item){
                            $('#product-item').append(`
                            <tr>
                                <input type="hidden" name="[product][${item.id}][return_date]" value="${date}">
                                <input type="hidden" name="[product][${item.id}][product_id]" value="${item.id}">
                                <input type="hidden" name="[product][${item.id}][invoice_id]" value="${res.data.invoice_id}">
                             <td  style="text-align: right">${item.product.name}=> ${item.cost} * ${item.quantity}</td>
                             <td  style="text-align: center" id=""> <input type="number" name="[product][${item.id}][quantity]" class="form-control" value="${item.quantity}">    </td>
                            </tr>
                        `)
                        })
                        $('#itemsubtotal').text(res.data.sub_total)
                        $('#payable_amount').text(res.data.grand_total)
                        $('#paid_amount').text(res.data.paid_amount)
                        $('#due_amount').text(res.data.due_amount)
                        $('#purchase_id').val(res.data.id)
                        $('#paidBy').text('Paid Amount By Cash on Delivery' )
                    }
                    console.log(res)
                },
                error:function(err){
                    console.log(err)
                }
            })
        })

        // Create or update data
        // Create or update data
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })

    </script>
@endpush
