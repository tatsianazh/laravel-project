<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $products = Product::query()->whereIn('id', array_keys($cart))->get();
        return view('cart.index', compact('cart', 'products' ));
    }

    public function addToCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$request->input('id')])){
            $cart[$request->input('id')]+=$request->input('count', '1');
        }else{
//            array_push($cart, [$request->input('id')=>$request->input('count')]);
            $cart[$request->input('id')]=$request->input('count', '1');
        }
//        $request->session()->put('cart', $cart);
        session(['cart'=>$cart]);

//        array_push($cart, [3=>5]);
    }

    public function form(){
        return view('cart.form');
    }
}
