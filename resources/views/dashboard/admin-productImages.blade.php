@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-8">
        <div class="card">
            <div class="card-header">Product's Images</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Product's id</th>
                            <th>Name</th>
                            <th>Path</th>
                        </tr>
                        @foreach($products as $product)
                        @foreach($images as $image)
                        @if($product->id==$image->product_id)
                        <tr>
                            <td>{{$image->product_id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$image->path}}</td>
                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection