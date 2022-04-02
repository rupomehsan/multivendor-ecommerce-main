@extends('layouts.landing.index')
@section('content')
    <div class="container my-5" style="min-height: 60vh">
        <h6 class="text-center portion-title">Product Compare</h6>

        <table class="table table-bordered font-roboto">
            <tr>
                <td class="align-bottom">Product Name</td>
                <td>
                    <img class="avatar-table d-block m-auto"  src="{{asset('assets/image/category.png')}}" alt="">
                    In erat quis fames justo urna lorem pulvinar.
                </td>
                <td>
                    <img class="avatar-table d-block m-auto" src="{{asset('assets/image/category.png')}}" alt="">
                    In erat quis fames justo urna lorem pulvinar.
                </td>

                <td>
                    <img class="avatar-table d-block m-auto" src="{{asset('assets/image/category.png')}}" alt="">
                    In erat quis fames justo urna lorem pulvinar.
                </td>
            </tr>

            <tr>
                <td>Price</td>
                <td>$120.00</td>
                <td>$120.00</td>
                <td>$120.00</td>
            </tr>

            <tr>
                <td>Rating</td>
                <td>4.6</td>
                <td>4.6</td>
                <td>4.6</td>
            </tr>
        </table>
    </div>
@endsection
