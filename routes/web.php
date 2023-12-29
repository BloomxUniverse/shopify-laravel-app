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
    $request = $shop->api()->rest('GET', '/admin/shop.json');
    // $request = $shop->api()->graph('{ shop { name } }');
    echo $request['body']['shop']['name'];

})->middleware(['verify.shopify'])->name('home');
