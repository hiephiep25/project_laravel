@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-12">
        <div class="card">
            <div class="card-header">Add product</div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <div class="card-body">
                <form method="POST" action="{{ URL::to('/admin/product') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Category</label>
                        <div class="col-md-6">
                            <select class="form-control" name="product_category">
                                <option value="0">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>is- invalid</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="name" value="" required autocomplete="product_name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>is- invalid</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Price</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="price" value="" required autocomplete="product_price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>is- invalid</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product qty</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="qty" value="" required autocomplete="product_qty" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>is- invalid</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product discount</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="discount" value="" required autocomplete="product_discount" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>is- invalid</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product sku</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="sku" value="" required autocomplete="product_sku" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>is- invalid</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_desc" class="col-md-4 col-form-label text-md-end">Product Description</label>

                        <div class="col-md-6">
                            <textarea id="product_desc" type="text" class="form-control ckeditor @error('product_desc') is-invalid 
                            @enderror" name="description"></textarea>

                            @error('product_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Add Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Product</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Discount</th>
                        <th>SKU</th>
                        <th>Manage</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}} $</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->discount}} $</td>
                        <td>{{$product->sku}}</td>
                        <td><a href="{{URL::to('/admin/edit-product/'.$product->id)}}">Edit</a> | 
                            <a href="{{URL::to('/admin/delete-product/'.$product->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                <span>{!! $products->withQueryString()->links('pagination::bootstrap-5') !!}</span>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection