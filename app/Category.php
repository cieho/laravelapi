<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = array('name','bstatus');
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
  
    public function products(){
      return $this->hasMany('App\Product');
    }
}
