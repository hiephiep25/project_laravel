<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\ProductDetail;
use App\Models\ProductImage;
class AdminController extends Controller
{
    public function login(){
        return view('dashboard.login');
    }
    public function checkLogin(Request $request){
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
            'level' => 1, // tai khoan user
        ];

        $remember = $request->remember;
        if( Auth::attempt($credentials, $remember)){
            return redirect('/admin/dashboard');
        } else{
            return back()->with('notification','Email or password is incorrect!');
        }
    }

    // Index
    public function dashboard(){
        return view('dashboard.dashboard');
    }
    public function user(){
        $users = User::all();
        return view('dashboard.admin-user',compact('users'));
    }
    public function category(){
        $categories = ProductCategory::all();
        return view('dashboard.admin-category',compact('categories'));
    }
    public function product(){
        $categories = ProductCategory::all();
        $products = Product::paginate(5);
        return view('dashboard.admin-product',compact('categories','products'));
    }
    public function images(){
        $products = Product::all();
        $images = ProductImage::all();
        return view('dashboard.admin-productImages',compact('products','images'));
    }
    public function order(){
        $orders = Order::all();
        return view('dashboard.admin-order', compact('orders'));
    }


    //Category
    public function insert_category(){
        $data= request()->validate([
            'name' => 'required',
        ]);
        $category = new ProductCategory();
        $category->name = $data['name'];
        $category->save();

        return redirect('/admin/category')->with('success','Data insert successful');
    }
    public function edit_category($id){
        $category = ProductCategory::all();
        $category_edit = ProductCategory::find($id);
        return view('dashboard.edit-category')->with(compact('category_edit','category'));
    }
    public function update_Category($id){
        $data= request()->validate([
            'name' => 'required',
        ]);
        $category = ProductCategory::find($id);
        $category->name = $data['name'];
        $category->save();

        return redirect('/admin/category')->with('success','Data update successful');
    }
    public function delete_category($id){
        $category = ProductCategory::find($id);
        $category->delete();
        return redirect('/admin/category')->with('success','Data delete successful');
    }

    //Product
    public function insert_product(){
        $data= request()->validate([
            'product_category'=>'required',
            'name' => 'required',
            'price'=>'required',
            'qty'  =>'required',
            'discount'=>'required',
            'sku'=>'required',
            'description'=>'required'

        ]);
        $product = new Product();
        $product->name = $data['name'];
        $product->product_category_id = $data['product_category'];
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->qty = $data['qty'];
        $product->discount = $data['discount'];
        $product->sku = $data['sku'];
        $product->description = $data['description'];
        $product->save();

        return redirect('/admin/product')->with('success','Data insert successful');
    }
    public function edit_product($id){
        $categories =  ProductCategory::all();
        $product = Product::all();
        $product_edit = Product::find($id);
        return view('dashboard.edit-product')->with(compact('product_edit','product','categories'));
    }
    public function update_product($id){
        $data= request()->validate([
            'product_category'=>'required',
            'name' => 'required',
            'price'=>'required',
            'qty'  =>'required',
            'discount'=>'required',
            'sku'=>'required',
            'description'=>'required'
        ]);
        $product = Product::find($id);
        $product->product_category_id = $data['product_category'];
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->qty = $data['qty'];
        $product->discount = $data['discount'];
        $product->sku = $data['sku'];
        $product->description = $data['description'];
        $product->save();

        return redirect('/admin/product')->with('success','Data update successful');
    }
    public function delete_product($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/product')->with('success','Data delete successful');
    }

    //Images
}
