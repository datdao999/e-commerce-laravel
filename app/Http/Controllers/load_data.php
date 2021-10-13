<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_product;
use App\Models\Product;
use App\Models\invoices;
use App\Models\Chat;

class load_data extends Controller
{
    public function index(){
        $type_product = type_product::all();
        
        $products = Product::all();
        return view('type_product', ['type_products'=>$type_product, 'products'=>$products]);
    }

    public function data_manage(){
        
        $invoices = invoices::all();
        return view('manage', ['invoices'=>$invoices]);
    }
    public function chat(){
        $message = request('message');
        $user = request('user');
        $datetime = time();
        $chat = new Chat ($message, $user, $datetime);
        session(['chat' => $chat]);
        $message = session()->get('chat');
        return view('chat',['message'=>$message]);
    }

}
