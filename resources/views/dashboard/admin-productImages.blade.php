@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-8">
        <div class="card">
                <div class="card-header">Add Product's Images</div>
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
                    <form method="POST" action="{{ URL::to('/admin/images') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="product_name" class="col-md-4 col-form-label text-md-end">Product's Name</label>
                            <div class="col-md-6">
                                <select class="form-control" name="product_name">
                                    <option value="0">Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
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
                                <input id="product_image" type="file" class="form-control @error('product_image') is-invalid 
                                @enderror" name="product_image" value="{{ old('name') }}" required autocomplete="product_image" autofocus>

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
                                    Add Images
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
            <div class="card-header">Product's Images</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Product's id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Manage</th>
                        </tr>
                        @foreach($products as $product)
                        @foreach($images as $image)
                        @if($product->id==$image->product_id)
                        <tr>
                            <td>{{$image->product_id}}</td>
                            <td>{{$product->name}}</td>
                            <td><img src="{{URL::to('storage/'.$image->path)}}" height="100"></td>
                            <td><a href="{{URL::to('/admin/edit-images/'.$image->id)}}">Edit</a> | 
                                <a href="{{URL::to('/admin/delete-images/'.$image->id)}}">Delete</a></td>
                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                    </table>
                    <span>{!! $images->withQueryString()->links('pagination::bootstrap-5') !!}</span>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection