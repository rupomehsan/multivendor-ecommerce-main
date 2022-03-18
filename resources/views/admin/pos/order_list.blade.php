@extends('layouts.admin.index')
@section('content')
    <main id="pos-order-content">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">POS ORDERS (54)</h4>
                <table class="table table-striped" id="order-table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vendors</th>
                        <th scope="col">order number</th>
                        <th scope="col">number of products</th>
                        <th scope="col">Customer</th>
                        <th scope="col">order Total</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Fashion Nova</td>
                        <td>GUXKVK3XW6</td>
                        <td>1</td>
                        <td>Fashion Nova</td>
                        <td>2,000.00</td>
                        <td>
                            <button class="btn btn-outline-base px-4 py-1">View</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>Fashion Nova</td>
                        <td>GUXKVK3XW6</td>
                        <td>1</td>
                        <td>Fashion Nova</td>
                        <td>2,000.00</td>
                        <td>
                            <button class="btn btn-outline-base px-4 py-1">View</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>Fashion Nova</td>
                        <td>GUXKVK3XW6</td>
                        <td>1</td>
                        <td>Fashion Nova</td>
                        <td>2,000.00</td>
                        <td>
                            <button class="btn btn-outline-base px-4 py-1">View</button>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </main>

@endsection

@push('custom-js')
    <script>
        $(document).ready(function () {
            $('#orders-table').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });
        });
    </script>
@endpush
