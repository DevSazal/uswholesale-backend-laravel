<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'company', 'phone', 'address', 'city', 'country_id', 'role','payment'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function supplier(){
      return $this->belongsTo('App\SupplierProfile', 'id', 'uid');
    }

    public function country(){
      return $this->belongsTo('App\Country', 'country_id');
    }

    public function plan(){
      return $this->belongsTo('App\Plan', 'payment');
    }
    public function membership(){
      return $this->belongsTo('App\Membership', 'id', 'uid')->orderBy('id', 'desc');
    }
}
