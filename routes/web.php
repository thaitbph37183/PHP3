<?php

use App\Http\Controllers\admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [ProductController::class,'index'])->name('home');
// Route::get('/category/{id}',function($id){
//         $products = DB::table('products')->where('category_id' ,'=' , $id)->get();
//         return view('menu',compact('products'));
//     })->name('category-product');

Route::get('/menu/{id}',[ProductController::class,'listProduct'])->name('category-product');
Route::get('product/{id}',[ProductController::class,'detail'])->name('product-detail');