@extends('front.layout.master')
@section('title','Result')
@section('body')
<!-- Breadcrumb -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="./"><i class="fa fa-home"></i></a>
                    <a href="./checkout">Check out</a>
                    <span>Result</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Check out -->
<div class="checkout-section spad">
    <div class="container">
       <div class="col-lg-12">
            <h4>
                {{$notification}}
            </h4>
            <a href="./" class="primary-btn mt-5">Continue Shopping</a>
       </div>
    </div>
</div>
@endsection