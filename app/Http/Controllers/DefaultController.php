<?php

namespace App\Http\Controllers;

use App\Membership;
use App\SupplierProfile;
use App\User;
use App\SubCategory;
use App\Product;
use App\City;
use App\BuyerPost;

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
    $array['cid'] = $category_id;
    $array['suppliers'] = SupplierProfile::leftJoin('sub_categories', 'supplier_profiles.subcatgoryid', '=', 'sub_categories.id')
                          ->where('sub_categories.cid', $category_id)
                          ->orderBy('promote', 'desc')
                          ->paginate(30);
    $array['products'] = Product::Join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
                          ->where('sub_categories.cid', $category_id)
                          ->select('products.name', 'products.sid', 'products.name', 'products.purl', 'products.img')
                          ->orderBy('products.id', 'desc')
                          ->paginate(20);
    $array['requests'] = BuyerPost::Join('sub_categories', 'buyer_posts.sub_category_id', '=', 'sub_categories.id')
                          ->where('sub_categories.cid', $category_id)
                          ->select('buyer_posts.title', 'buyer_posts.quantity', 'buyer_posts.qtype', 'buyer_posts.expire', 'buyer_posts.img', 'buyer_posts.uid', 'buyer_posts.created_at',  'buyer_posts.comment')
                          ->orderBy('buyer_posts.id', 'desc')
                          ->paginate(30);
    return view('category')->with($array);
  }

  public function subCategory($category_id, $subcategory_id){
    return 'subcategory page';
  }

  public function result(Request $request){
        $result=City::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        return response()->json($result);
    }

}
