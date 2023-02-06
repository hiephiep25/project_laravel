<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
class CheckOutController extends Controller
{
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts','total','subtotal'));
    }
    public function addOrder(Request $request){
        // order
       $order = Order::create($request->all());
        // order_details
       $carts = Cart::content();
       foreach($carts as $cart){
        $data = [
            'order_id'=> $order->id,
            'product_id'=> $cart->id,
            'qty'=> $cart->qty,
            'amount'=> $cart->price,
            'total' => $cart->price * $cart->qty,
        ];
        OrderDetail::create($data);
        }
        // delete cart
        Cart::destroy();
        return redirect('checkout/result')->with('notification', 'Thanks for shopping');
    }
    public function result(){
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }
}
