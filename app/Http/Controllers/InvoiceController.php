<?php

namespace App\Http\Controllers;
use App\Models\invoices;
use App\Models\detail_invoice;
use Illuminate\Http\Request;
use Session;

class InvoiceController extends Controller
{
    public function show_invoice(){
        $invoices = Invoices::all();
        return view('manager', ['invoices'=> $invoices]);
    }

    public function add_invoice(){
        $invoices = new Invoices;
        $invoices -> name_customer = request('name_customer');
        $invoices -> address = request('address');
        $invoices -> phone_number = request('phone_number');
        $invoices -> date_create_at = date('d-m-y');
        
        $invoices->save();
        $max_id = Invoices::max('id');
        foreach (Session::get('Cart')->products as $product){
                $detail_invoice = new detail_invoice;
                $detail_invoice -> product_id = $product['productInformation'] -> id;
                $detail_invoice -> invoice_id = $max_id;
                $detail_invoice -> number = $product['quantity'];
                $detail_invoice -> save();
            }   
        return 'da them thanh cong';
    }

    public function show_detail_invoice($id){
        $detail_invoice = detail_invoice::select('*')->where('invoice_id', '=' , $id)->get();
        return $detail_invoice;
    }
}
