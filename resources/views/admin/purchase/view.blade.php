@extends('layouts.admin.index')
@section('content')

    <main id="category-list-content">
        <div class="wrapper">
            <div class="card" id="printTable">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Payment Details</h4>
                    <div class="payment-page">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h5>Details</h5>
                                    <table>
                                        <tr>
                                            <th width="50%">Date</th>
                                            <th width="50%" id="date">23 Apr 2022</th>
                                        </tr>
                                        <tr>
                                            <th width="50%">Invoice Id</th>
                                            <th width="50%" id="invoice_id">Basdfasdfasdf</th>
                                        </tr>
                                        <tr>
                                            <th width="50%">Supplier</th>
                                            <th width="50%" id="supplier">No Supplier</th>
                                        </tr>
                                        <tr>
                                            <th width="50%">Payment Status</th>
                                            <th width="50%" id="payment_status"></th>
                                        </tr>
                                        <tr>
                                            <th width="50%">Notes</th>
                                            <th width="50%" id="note">asdfasdfasdfasdfasdf</th>
                                        </tr>
                                    </table>
                                </div>
                                <div>
                                    <h5 class="py-3">Product List</h5>
                                    <table>
                                        <tr>
                                            <th width="80%">Product</th>
                                            <th width="20%">Item Total</th>
                                        </tr>
                                        <tbody id="product-item">

                                        </tbody>
                                        <tr>
                                            <td style="text-align: right">Subtotal</td>
                                            <td style="text-align: center" id="itemsubtotal"></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right">Payable Amount</td>
                                            <td style="text-align: center" id="payable_amount"></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right" id="paidBy">Paid Amount</td>
                                            <td style="text-align: center" id="paid_amount"></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right">Due Amount</td>
                                            <td style="text-align: center" id="due_amount"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="returnProduct">
                                    <h5 class="py-3">Return List</h5>
                                    <table>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Returned At</th>
                                            <th>Item Name</th>
                                            <th>Quantity</th>
                                        </tr>
                                        <tbody id="returnItem">

                                        </tbody>

                                    </table>
                                </div>
                                <div>
                                    <h5 class="py-3">Payments</h5>
                                    <table>
                                        <tr>
                                            <th>Description</th>
                                            <th>  </th>
                                        </tr>
                                        <tr>
                                            <td>Paid on <span id="purchseDate">2022-04-23 15:03:00</span>  (via <span id="paymentMethod"></span>)</td>
                                            <td>Amount: <span id="totalAmount"></span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary">Print me</button>
            </div>
        </div>

    </main>
@endsection

@push('custom-js')

    <script>
        function printData()
        {
            var divToPrint=document.getElementById("printTable");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }
        $('button').on('click',function(){
            printData();
        })
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/purchase"
        }

        // get-for-due-payment;
        // get-for-due-payment;
        $(document).ready(function () {
            let id = "{{request()->segment(4)}}"
            url = "{{url('api/v1/purchase/view')}}/" + id
            $.ajax({
                url: url,
                method: "get",
                dataType: "json",
                success: function (res) {
                    if (res.status === "success") {

                        res.data.purchase_products.forEach(function (item) {
                            $('#product-item').append(`
                            <tr>
                             <td  style="text-align: right">${item.product.name}=> ${item.cost} * ${item.quantity}</td>
                             <td  style="text-align: center" id="">${item.item_total}</td>
                            </tr>
                        `)
                        })

                        $('#date').text(res.data.create_at)
                        $('#invoice_id').text(res.data.invoice_id)


                        $('#payment_status').text(res.data.payment_status)
                        $('#note').text(res.data.note)
                        $('#itemsubtotal').text(res.data.sub_total)
                        $('#payable_amount').text(res.data.grand_total)
                        $('#paid_amount').text(res.data.paid_amount)
                        $('#due_amount').text(res.data.due_amount)
                        $('#purchase_id').val(res.data.id)
                        $('#purchseDate').text(res.data.on_date)
                        $('#paymentMethod').text(res.data.payment_method)
                        $('#totalAmount').text(res.data.grand_total)
                        $('#paidBy').text('Paid Amount By Cash on Delivery')
                        if(res.data.return_products.length>0){
                            var i = 1
                            res.data.return_products.forEach(function(item){
                                $("#returnItem").append(`
                                  <tr>
                                            <td>${i}</td>
                                            <td>${item.return_date}</td>
                                            <td>${item.product.name}</td>
                                            <td>${item.quantity} Pieces</td>
                                        </tr>
                                `)
                                i++
                            })
                        }else if(res.data.return_products.length==0){
                            $('#returnProduct').hide()
                        }

                        if(res.data.supplier !== 0){
                            $('#supplier').text(res.data.supplier.name)
                        }else{
                            $('#supplier').text('No Supplier')
                        }
                    }

                    console.log(res)
                },
                error: function (err) {
                    console.log(err)
                }
            })
        })


        function fullPayment(e) {
            var due = $('#due_amount').text()
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
