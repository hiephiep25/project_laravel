@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-8">
        <div class="card">
                <div class="card-header">Edit Product's Images</div>
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
                    <form method="POST" action="{{ URL::to('/admin/update-images/'.$images_edit->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="product_name" class="col-md-4 col-form-label text-md-end">Product's Name</label>
                            <div class="col-md-6">
                                <select class="form-control" name="product_name">
                                    <option value="0">Select Product</option>
                                    @foreach($products as $product)
                                        <option {{($product->id==$images_edit->product_id) ? 'selected' : ''}} 
                                            value="{{$product->id}}">{{$product->name}}</option>
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
                            <label for="product_image" class="col-md-4 col-form-label text-md-end">Product Image</label>

                            <div class="col-md-6">
                                <input id="product_image" type="file" class="form-control" name="product_image" value="{{ old('name') }}">
                                <img src="{{URL::to('storage/'.$images_edit->path)}}" height="100">

                                @error('product_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Images
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
        </div>
    </div>
    </div>
</div>
@endsection