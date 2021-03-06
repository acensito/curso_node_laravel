<?php

use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    $items = Item::get();
    return view('welcome')->with('items', $items);
});

Route::get('/admin', function() {
    $orders = Order::get();
    return view('admin')->with('orders', $orders);
});
