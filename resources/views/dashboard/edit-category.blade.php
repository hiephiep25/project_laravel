@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit category</div>
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
                <form method="POST" action="{{ URL::to('/admin/update-category/'.$category_edit->id) }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="category_name" class="col-md-4 col-form-label text-md-end">Category Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="name" value="{{$category_edit->name}}" required autocomplete="category_name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>is- invalid</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Edit Category
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