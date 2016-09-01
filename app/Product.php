<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = array('name','description','price','discount','bstatus','category_id');
    
    public function category(){
      $this->belongsTo('Category');
    }
}
