<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        $lastId = Product::latest()->first()->id;
        $products = Product::latest()->take(3)->get();
        $cardItem = Product::latest()->get();
        return view('front.home',[
            'products'=>$products,
            'cardItem'=>$cardItem,
            'lastId'=>$lastId,
        ]);
    }

    public function productDetails($id)
    {
      $product = Product::find($id);
       return view('front.details', compact('product'));
    }

    public function addToCart(Request $request)
    {
        if ($request->session()->has('wahid'))
        {
            $cart =  new Cart();
            $cart->user_id     = $request->session()->get('wahid')['id'];
            $cart->product_id  = $request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return  redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('wahid')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    public function cartList(Request $request)
    {
        if ($request->session()->has('wahid'))
        {
            $userId = Session::get('wahid')['id'];
            $products = DB::table('carts')
                ->join('products','carts.product_id', '=', 'products.id')
                ->where('carts.user_id',$userId)
                ->select('products.*', 'carts.id as cart_id')
                ->get();
            return view('front.cartlist',[
                'products'=>$products,
            ]);

        }
        else{
            return  redirect('/login');
        }
    }

    static function cartListTotal()
    {
        $userId = Session::get('wahid')['id'];
        return Cart::join('products','carts.product_id', '=', 'products.id')
            ->where('carts.user_id',$userId)
            ->select('products.*', 'carts.id as cart_id')
            ->sum('products.price');
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function orderNow()
    {
        $userId = Session::get('wahid')['id'];
        $total = $products = DB::table('carts')
            ->join('products','carts.product_id', '=', 'products.id')
            ->where('carts.user_id',$userId)
            ->select('products.*', 'carts.id as cart_id')
            ->sum('products.price');

        return view('front.ordernow',[
            'total'=>$total,
        ]);
    }

    function orderPlace(Request $request)
    {
        $userId = Session::get('wahid')['id'];
        $userAllCartId = Cart::where('user_id', $userId)->get();
        foreach($userAllCartId as $cart)
        {
            $order = new Order();
            $order->product_id      = $cart['product_id'];
            $order->user_id         = $cart['user_id'];
            $order->status          ='pending';
            $order->payment_method  =$request->payment;
            $order->payment_status  ='pending';
            $order->address         =$request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
    }

    function myOrders(Request $request)
    {
        if ($request->session()->has('wahid'))
        {
            $userId = Session::get('wahid')['id'];
            $orders = DB::table('orders')
                ->join('products','orders.product_id', '=', 'products.id')
                ->where('orders.user_id',$userId)
                ->get();

            return view('front.myorders',[
                'orders'=>$orders,
            ]);
        }
        else{
            return  redirect('/login');
        }
    }
    static function orderListTotal()
    {
        $userId = Session::get('wahid')['id'];
        return Order::join('products','orders.product_id', '=', 'products.id')
            ->where('orders.user_id',$userId)
            ->select('products.*', 'orders.id as worder_id')
            ->sum('products.price');
    }
}
