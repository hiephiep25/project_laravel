@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-12">
        <div class="card">
            <div class="card-header">Edit product</div>
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
                <form method="POST" action="{{ URL::to('/admin/update-product/'.$product_edit->id) }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Category</label>
                        <div class="col-md-6">
                            <select class="form-control" name="product_category">
                                <option value="0">Select Category</option>
                                        @foreach($categories as $category)
                                            <option {{($category->id==$product_edit->product_category_id) ? 'selected' : ''}} 
                                                value="{{$category->id}}">{{$category->name}}</option>
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
                            @enderror" name="name" value="{{ $product_edit->name }}" required autocomplete="product_name" autofocus>

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
                            @enderror" name="price" value="{{ $product_edit->price }}" required autocomplete="product_price" autofocus>

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
                            @enderror" name="qty" value="{{ $product_edit->qty }}" required autocomplete="product_qty" autofocus>

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
                            @enderror" name="discount" value="{{ $product_edit->discount }}" required autocomplete="product_discount" autofocus>

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
                            @enderror" name="sku" value="{{ $product_edit->sku }}" required autocomplete="product_sku" autofocus>

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
                            @enderror" name="description">{{ $product_edit->description }}</textarea>

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
                                Edit Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection