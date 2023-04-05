<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  //
  public function index()
  {
    // $products = Product::all();
    $products = Product::latest()->get();
    return view('products.index', ['products' => $products]);
  }

  // 
  public function addToCart($id)
  {
    $product = Product::find($id);
    $cart = session()->get('cart');
    if (isset($cart[$id])) {
      $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
    } else {
      $cart[$id] = [
        'name' => $product->name,
        'price' => $product->price,
        'image_path' => $product->image_path,
        'quantity' => 1,
      ];
    }
    session()->put('cart', $cart);
    // dd(session()->get('cart'));
    // echo "<pre>";
    // print_r(session()->get('cart'));
    return response()->json([
      'code' => 200,
      'message' => 'Add to cart successfully',
    ], 200);
  }

  //Cart detail
  public function cart()
  {
    $cart = session()->get('cart');
    return view('products.cart', ['cart' => $cart]);
  }
}
