<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ShopController extends Controller
{
    public function category(Category $category){
        if ($category->id){
            $products = Product::query()->where('cat_id', $category->id)->paginate(12);
        }else{
            $products = Product::paginate(12);
        }
        return view('shop.category', compact('products'));
    }

    public function product(Category $category, Product $product){
        if ($product->category->id !== $category->id){
            throw new NotFoundHttpException();
        }
        return view('shop.product', ['product'=>$product]);
    }

    public function addToCart(Request $request){
        return view('cart.cart');
    }

}
