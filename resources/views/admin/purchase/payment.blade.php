@extends('layouts.admin.index')
@section('content')
<style>
    * {box-sizing: border-box}

    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 30%;
        height: 50vh;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        width: 70%;
        border-left: none;
        height: 50vh;
    }
    #payment{
        border :1px solid rgba(187, 187, 187, 0.45);
        padding: 10px;
    }

</style>
    <main id="category-list-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Payment</h4>
                    <div class="payment-page">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Payment Method</h5>
                                <button class="btn btn-primary">Cash On Delivery</button>
                                <br>
                                <button class="btn btn-primary mt-3">Bkash</button>
                            </div>
                            <div class="col-md-4">
                                 <h5>Payment</h5>
                                <form action="{{url('api/v1/purchase/payment/purchase-due')}}" id="form" name="form" enctype="multipart/form-data"
                                      novalidate>
                                    <input type="hidden" name="purchase_id" id="purchase_id">
                                    <h5 class="py-3">Payment Method <b> Cash on Delivery </b></h5>
{{--                                    <button type="btn" class="btn btn-primary" onclick="fullPayment">Full Payment</button>--}}
                                    <p class="alert alert-danger py-2 cursor-pointer" onclick="fullPayment()">Full Payment</p>
                                    <br>
                                    <label for="" class="py-3">Payable Amount</label>
                                    <input type="number" name="due_payable_amount" id="due_payable_amount"  class="form-control p-y-3" >
                                    <span class="text-danger" id="due_payable_amount_error"></span> <br>
                                    <button id="submit-button" type="submit" class="btn btn-base-primary py-2">Payment</button>
                                </form>
                            </div>
                            <div class="col-md-5">
                               <h5>Payment Details</h5>
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
        // get-for-due-payment;
        // get-for-due-payment;
        $(document).ready(function (){
            let id = "{{request()->segment(4)}}"
            url = "{{url('api/v1/purchase/payment/get-for-due-payment')}}/" + id
            $.ajax({
                url:url,
                method:"get",
                dataType:"json",
                success:function(res){
                    if(res.status==="success"){
                        res.data.purchase_products.forEach(function(item){
                            $('#product-item').append(`
                            <tr>
                             <td  style="text-align: right">${item.product.name}=> ${item.cost} * ${item.quantity}</td>
                             <td  style="text-align: center" id="">${item.item_total}</td>
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


     function fullPayment(e){
          var due =   $('#due_amount').text()
         $('#due_payable_amount').val(due)

     }

        //add item
        //add item
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })
        //page restricted
        //page restricted
        {{--let page = "{{request()->segment(2)}}";--}}
        {{--pageRestricted(page);--}}
    </script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endpush
