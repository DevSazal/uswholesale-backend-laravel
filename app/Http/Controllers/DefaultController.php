<?php

namespace App\Http\Controllers;

use App\User;
use App\Membership;
use Illuminate\Http\Request;

use DB;
use Auth;

class DefaultController extends Controller
{
  public function premiumSignUp(){
    return view('supplier');
  }
  public function payment()
  {
      if(Auth::check()){
        $id = Auth::user()->id;
        $member = DB::table('memberships')->where('uid', $id)->first();
        if($member){
          return redirect('/dashboard');
        }else{
        return view('paymentCheck');
        }
      }else {
        return redirect()->route('package');
      }

  }
}
