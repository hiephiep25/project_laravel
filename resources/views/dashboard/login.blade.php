@extends('dashboard.layout.master')
@section('title','Login')
@section('body')
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>

                    @if(session('notification'))
                    <div class="alert alert-warning" role="alert">
                        {{session('notification')}}
                    </div>
                    @endif
                    
                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="group-input">
                            <label for="pass">Password</label>
                            <input type="password" id="pass" name="password">
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                Save Password
                                <input type="checkbox" id="save-pass" name="remember">
                                <span class="checkmark"></span>
                            </label>
                            <a href="#" class="forget-pass">Forget your password</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection