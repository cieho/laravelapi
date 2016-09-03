<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = array('name','description','price','discount','bstatus','category_id');
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    
    public function category(){
      $this->belongsTo('Category');
    }
}
