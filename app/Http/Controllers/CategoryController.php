<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      return response()->json(['datos' => $categories], 200);
    }
  
    public function show($id)
    {
      $category = Category::find($id);
      if(!$category){
        return response()->json(['message' => "Category not found", "code" => 404], 404);
      }
      return response()->json(['datos' => $category], 200);
    }
  
    public function store(Request $request)
    {
      if(!$request->input('name'))
      {
        return response()->json(['message' => "Category not stored", "code" => 422], 422);
      }
      //Category::create($request->all());
      Category::create([
          'name' => $request->input('name'),
          'bstatus' => 1
        ]);     
      
      return response()->json(['message' => 'Category stored correctly'], 201);
      
    }
  
    public function update($id)
    {
      return 'updating category id:'.$id;
    }
  
    public function destroy($id)
    {
      return 'delting category id:'.$id;
    }
}
