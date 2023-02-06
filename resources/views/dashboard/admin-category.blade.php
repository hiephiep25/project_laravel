@extends('dashboard.layout.master')
@section('title','Admin Dashboard')
@section('body')
<div class="container">
    <div class="row justify-content-center">
       @include('dashboard.admin-nav')
       <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add category</div>
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
                <form method="POST" action="{{ URL::to('/admin/category') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="category_name" class="col-md-4 col-form-label text-md-end">Category Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="name" value="" required autocomplete="category_name" autofocus>

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
                                Add Category
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        <div class="card">
            <div class="card-header">Category</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Manage</th>
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td><a href="{{URL::to('/admin/edit-category/'.$category->id)}}">Edit</a> | 
                            <a href="{{URL::to('/admin/delete-category/'.$category->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
       </div>
    </div>
</div>
@endsection