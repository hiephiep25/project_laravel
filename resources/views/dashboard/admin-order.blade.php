@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-8">
        <div class="card">
            <div class="card-header">Orders</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Postcode_zip</th>
                            <th>Phone</th>
                            <th>Payment</th>
                        </tr>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->first_name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->postcode_zip}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->payment_type}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection