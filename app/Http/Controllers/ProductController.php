<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::all();
      return response()->json(['datos' => $products], 200);
    }
  
    public function show($id)
    {
      $product = Product::find($id);
      if(!$product){
        return response()->json(['message' => "Product not found", "code" => 404], 404);
      }
      return response()->json(['datos' => $product], 200);
    }
}
