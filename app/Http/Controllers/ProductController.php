<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(["products"=>$products]);
    }

    public function show($id)
    {
        $product = Product::where('id',$id)->first();
        return response()->json(["product"=>$product]);
    }
}
