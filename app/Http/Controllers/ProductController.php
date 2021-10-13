<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\type_product;
use Session;

class ProductController extends Controller
{
    public function show($id){
        $product = Product::find($id);
        return view('product', ['product'=>$product]);
    }
    
    public function show_detail($id){
        $product = Product::find($id);
        return view('detail_product', ['product'=>$product]);
    }

    public function add(){
        $product = new Product;
        $product->name_product = request('name');
        $product->price = (int)request('price');
        $product->description = request('description');
        $product->image = request('image')->store('uploads', 'public');
        $product->unit = request('unit');
        $product->quantity = (int)request('quantity');
        $product->discount = (int)request('discount');
        $product->type_product_id = (int)request('type_product_id');
        
        return $product->save();
    }

    public function edit(){
        $product = Product::find(request('id'));
        $product->name_product = request('name');
        $product->price = (int)request('price');
        $product->description = request('description');
        // $product->image = request('image')->store('uploads', 'public');
        $product->unit = request('unit');
        $product->quantity = (int)request('quantity');
        $product->discount = (int)request('discount');
        $product->type_product_id = (int)request('type_product_id');
        return $product->save();
    }
    public function addCart(Request $request, $id){
        $product = Product::find($id);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart'):null;
            $newCart = new Cart($oldCart);
            
            $newCart -> addCart($product, $id);
            $request -> session()->put('Cart', $newCart);
            
            return view('cart', ['newCarts'=>$newCart]);
        }
    }

    public function deleteItemCart(Request $request, $id){
        $oldCart = Session('Cart') ? Session('Cart'):null;
        $newCart = new Cart($oldCart);
        
        $newCart->deleteItemCart($id);
        if(count( $newCart ->products) > 0){
            $request->Session()->put('Cart');
        }
        else{
            $request->Session()->forget('Cart');
        }
        return view('cart', ['newCarts'=>$newCart]);
    }

    public function search (){
        $word = request('search');
        $products = Product::select('*')->where('name_product','like','%'.$word.'%')->get();
        return view('search', ['products'=>$products]);
    }

    
}
