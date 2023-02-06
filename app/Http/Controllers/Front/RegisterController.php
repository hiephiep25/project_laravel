<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function index(){
        return view('front.register.show');
    }

    public function register(Request $request){
        if($request->password != $request->password_confirmation){
            return back()->with('notification', 'Confirm password does not match');
        }

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'level'=> 2,
        ];
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->level= $data['level'];
        $user->save();
       return redirect('./login')->with('notification', 'Register Success! Please login');
    }
        
}
