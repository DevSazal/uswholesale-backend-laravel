<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierBtype extends Model
{
    //
    public function btype(){
      return $this->belongsTo('App\BusinessType', 'btid');
    }
}
