<?php

namespace App\Http\Controllers;

use App\Membership;
use App\SupplierProfile;
use App\User;
use App\SubCategory;
use Illuminate\Http\Request;

use DB;
use Auth;

class DefaultController extends Controller
{
  public function index(){
    $array['supplier'] = SupplierProfile::orderBy('created_at', 'desc')->limit(15)->get();
    // $array['supplier'] = SupplierProfile::limit(15)->get();
    $array['ad'] = DB::select('SELECT * FROM supplier_profiles JOIN users ON supplier_profiles.uid = users.id ORDER BY promote DESC LIMIT 8');
    $array['categories'] = DB::table('categories')->where('status', 1)->get();
    return view('index')->with($array);
  }

  public function premiumSignUp(){
    return view('supplier');
  }

  public function payment(){
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

  // public function category($category_id){
  //   $subcategory_id = SubCategory::where('cid', $category_id)->value('id');
  //   $array['suppliers'] = SupplierProfile::where('subcatgoryid', $subcategory_id)->orderBy('promote', 'desc')->paginate(30);
  //   return view('category')->with($array);
  // }

  public function category($category_id){

    // $array['suppliers'] = DB::select('SELECT * FROM supplier_profiles JOIN sub_categories ON supplier_profiles.subcatgoryid = sub_categories.id
    //                                   WHERE sub_categories.cid = ?  ORDER BY supplier_profiles.promote DESC', [$category_id]);
    $array['suppliers'] = SupplierProfile::leftJoin('sub_categories', 'supplier_profiles.subcatgoryid', '=', 'sub_categories.id')->where('sub_categories.cid', $category_id)->orderBy('promote', 'desc')->paginate(30);
    return view('category')->with($array);
  }


}
