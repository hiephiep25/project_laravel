<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('front.login.show');
    }

    public function checkLogin(Request $request){
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
            'level' => 2, // tai khoan user
        ];

        $remember = $request->remember;
        if( Auth::attempt($credentials, $remember)){
            return redirect('');
        } else{
            return back()->with('notification','Email or password is incorrect!');
        }
    }

    public function logout(){
        Auth::logout();
        return back();
    }
}
