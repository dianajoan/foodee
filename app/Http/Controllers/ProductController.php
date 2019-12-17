<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\Cart;
use App\Models\Order;

class ProductController extends Controller
{

    public function allProducts()
    {
        $products   = Product::latest()->paginate(20);
        return view('products.index', ['products' => $products]);
    }

    public function productDetails($id)
    {
        $product    = Product::find($id);
        return view('products.details' , compact('product'));
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
//        dd($request->session()->get('cart'));
        return redirect()->route('all-products')->with('success','Product added to Cart Successfully');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.cart')->with('success','Item Deleted Successfully');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('products.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('products.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('products.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('products.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request) {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order;
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');

        Auth::user()->orders()->save($order);
        Session::forget('cart');

        return redirect()->route('user.profile')->with('success','Order Created Successfully');
    }
}
