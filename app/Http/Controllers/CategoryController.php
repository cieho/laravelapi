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
  
    public function create()
    {
      return 'showing create category form';
    }
  
    public function store()
    {
      return 'storing category data';
    }
  
    public function edit($id)
    {
      return 'editing category id:'.$id;
    }
  
    public function update($id)
    {
      return 'updating category id:'.$id;
    }
}
