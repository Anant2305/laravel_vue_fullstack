<?php

use App\Product;
use App\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CategoryResource;

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

    return redirect('categories');
    //return view('welcome');
});

// Route::get('/products', function () {
//     //url testing - /products?page=2&per_page=3&dir=asc
//     //return request()->only('per_page', 'dir'); //returns only these names: values from url
//     //return request()->except('per_page', 'dir'); //returns all other names: values except these
//     //dd(request()); //returns a list of values in the http/request object
//     //return request('page'); // only returns this value - 2
//     //return request()->page; // only returns this value - 2

//     // $products = [
//     //     ['id'=>1, 'name' => "Product 1", 'price' => 100],
//     //     ['id'=>2, 'name' => "Product 2", 'price' => 100],
//     // ];

//     $products = Product::orderBy('name')->get();
//     return ProductResource::collection($products);
// });

