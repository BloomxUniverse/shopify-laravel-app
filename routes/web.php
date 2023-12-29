<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

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
    //return view('welcome');
    $shop = Auth::user();
    $domain = $shop->getDomain()->toNative();
    $shopApi = $shop->api()->rest('GET', '/admin/shop.json')['body']['shop'];

    Log::info("Shop {$domain}'s object:" . json_encode($shop));
    Log::info("Shop {$domain}'s API objct:" . json_encode($shopApi));
    echo "hello";
    
})->middleware(['verify.shopify'])->name('home');
