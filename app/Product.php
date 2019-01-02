<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function subcategory(){
    return $this->belongsTo('App\SubCategory', 'sub_category_id');
  }
  public function supplier(){
    return $this->belongsTo('App\SupplierProfile', 'sid');
  }
}
