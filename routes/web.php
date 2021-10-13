<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\load_data;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [load_data::class, 'index']);
Route::post('/create', [ProductController::class, 'add']);
Route::put('/edit', [ProductController::class, 'edit']);
Route::get('/manage', [load_data::class,'data_manage']);
Route::get('/add-cart/{id}', [ProductController::class, 'addCart']);
Route::get('/delete-item-cart/{id}', [ProductController::class, 'deleteItemCart']);
Route::post('/add-invoice', [InvoiceController::class, 'add_invoice']);
Route::get('add-detail-invoice', [InvoiceController::class, 'add_detail_invoice']);
Route::get('/invoice', function(){return view('buy');});
Route::get('/get_detail_invoice/{id}', [InvoiceController::class, 'show_detail_invoice'] );
Route::get('/search', [ProductController::class, 'search']);
Route::post('/chat', [load_data::class, 'chat']);
Route::get('/chat_admin', function(){return view('chat_admin');});
