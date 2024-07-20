<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $products = DB::table('products')
        ->orderBy('id')
        ->where('category_id' ,'=' , 1)
        ->limit(9)
        ->get();
        return view('home',compact('products'));
    }
    public function listProduct($id){
        $products = DB::table('products')
        ->where('category_id' ,'=' , $id)
        ->orderBy('id')
        ->get();
        return view('menu',compact('products'));
    }
    public function detail($id){
        $product = DB::table('products')
        -> where('id' ,'=',$id)
        ->first();
        return view('detail',compact('product'));
    }
}
