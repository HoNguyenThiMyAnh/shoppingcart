<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view ('products', compact('products'));
    }

    public function cart()
    {
        return view('cart');
    }


    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;

        }
        else
        {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart sucessfilly!');
    }

    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart sucessfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed');
        }
    }
    public function formAddProduct(Request $request)
    {
        return view('addproduct');
    }


    public function saveProduct(Request $request)
    {
        // dd($request->all());
        $_newproduct = new Product();
        $_newproduct->product_name= $request->product_name;
        $_newproduct->product_description= $request->product_description;
        $_newproduct->photo= $request->photo;
        $_newproduct->price= $request->price;
        $_newproduct->save();
        return redirect('/')->with('success', 'Product add sucessfilly!');


    }
}
