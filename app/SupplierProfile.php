<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierProfile extends Model
{
  public function user(){
    return $this->belongsTo('App\User', 'uid');
  }

  public function products(){
    return $this->hasMany('App\Product', 'sid');
  }
}
