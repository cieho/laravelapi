<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = array('name','bstatus');
  
    public function products(){
      $this->hasMany('Product');
    }
}
