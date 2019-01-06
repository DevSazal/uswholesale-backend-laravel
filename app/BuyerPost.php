<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyerPost extends Model
{
  public function subcategory(){
    return $this->belongsTo('App\SubCategory', 'sub_category_id');
  }
}
