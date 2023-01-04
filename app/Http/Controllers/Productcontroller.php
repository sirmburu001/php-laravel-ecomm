<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Handler\Proxy;

class Productcontroller extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);

    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('cartlist');

        } else {
            return redirect('/login');
        }

    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cartList()
    {
        if (session()->has('user')) {
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
                ->join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $userId)
                ->select('products.*', 'cart.id as cart_id')
                ->get();
            return view('cartlist', ['products' => $products]);
        } else {
            return redirect('/login');
        }

    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price', );

        return view('ordernow', ['total' => $total]);
    }
    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allcart = Cart::Where('user_id', $userId)->get();
        foreach ($allcart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save();
            Cart::Where('user_id', $userId)->delete();
        }
        return redirect('/');
    }
    function orderList()
    {
        $userId = Session::get('user')['id'];
        $orders = DB::table('order')
            ->join('products', 'order.product_id', '=', 'products.id')
            ->where('order.user_id', $userId)
            ->get();
        return view('orderlist', ['orders' => $orders]);


    }
}
