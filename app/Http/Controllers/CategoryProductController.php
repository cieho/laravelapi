<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryProductController extends Controller
{
    public function showAll()
    {
      return 'showing all products';
    }
  
    public function index($id)
    {
      return 'showing all products from category_id:'.$id;
    }
  
    public function show($categoryid,$productid)
    {
      return 'showing product '. $productid .' from category '.$categoryid;
    }
  
    public function create($id)
    {
      return 'showing form to create product for category:'.$id;
    }
    
    public function store($id)
    {
      return 'storing form to create product for category:'.$id;
    }
  
    public function edit($categoryid,$productid)
    {
      return "editing product $productid from category $categoryid";
    }
  
    public function update($categoryid,$productid)
    {
      return 'showing product '. $productid .' from category '.$categoryid;
    }
  
}
