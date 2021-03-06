<?php

namespace App\Http\Controllers;

use App\Membership;
use App\SupplierProfile;
use App\User;
use App\SubCategory;
use App\Product;
use App\City;
use App\BuyerPost;
use App\Category;

use Illuminate\Http\Request;

use DB;
use Auth;

class DefaultController extends Controller
{
  public function index(){
    $array['supplier'] = SupplierProfile::orderByRaw('RAND()')->take(25)->get();
    // $array['supplier'] = SupplierProfile::limit(15)->get();
    $array['ad'] = DB::select('SELECT * FROM supplier_profiles JOIN users ON supplier_profiles.uid = users.id ORDER BY RAND() , promote DESC LIMIT 8');
    $array['ad2'] = DB::select('SELECT * FROM supplier_profiles JOIN users ON supplier_profiles.uid = users.id ORDER BY RAND() , promote DESC LIMIT 2');
    $array['ad3'] = DB::select('SELECT * FROM supplier_profiles JOIN users ON supplier_profiles.uid = users.id ORDER BY RAND() , promote DESC LIMIT 4');
    $array['categories'] = DB::table('categories')->where('status', 1)->get();
    return view('index')->with($array);
  }

  public function premiumSignUp(){
    return view('supplier');
  }

  public function payment(){
      if(
          (
            auth()->user()->subscribed('Basic') ||
            auth()->user()->subscribed('Standard') ||
            auth()->user()->subscribed('Premium')
          ) && date('Y-m-d') < auth()->user()->membership['end']
      ) {
        return redirect(route('dashboard'));
      }

      if(Auth::check()){
        if(Auth::user()->role==1 && $role = Auth::user()->payment!=0){
          //check by sazal
          // $id = Auth::user()->id;
          // $member = DB::table('memberships')->where('uid', $id)->first();
          // if($member){
          //   return redirect('/dashboard');
          // }else{
          return view('paymentCheck');
          // }
        }else{
          return redirect('/dashboard');
        }

      }else {
        return redirect()->route('package');
      }

  }

  public function charge(Request $request)
  {
    if(
      (
        auth()->user()->subscribed('Basic') ||
        auth()->user()->subscribed('Standard') ||
        auth()->user()->subscribed('Premium')
      )  && date('Y-m-d') < auth()->user()->membership['end']
    ) {
      return redirect(route('dashboard'));
    }

    switch(auth()->user()->payment)
    {
      case 1:
        $subscription = ['plan' => "Basic", 'price' => 59, 'plan_id' => "plan_FHYQzC0CTkKkAL"];
        break;
      case 2:
        $subscription = ['plan' => "Standard", 'price' => 175, 'plan_id' => "plan_FHYZtRIxMDdBuJ"];
        break;
      // case 3:
      //     $subscription = ['plan' => "Premium", 'price' => 255, 'plan_id' => "plan_FHYc7y3xptxBeN"];
      //     break;
      default:
        $subscription = ['plan' => "Premium", 'price' => 255, 'plan_id' => "plan_FHYc7y3xptxBeN"];
    }

    $user = $request->user();

    $user->newSubscription($subscription['plan'], $subscription['plan_id'])
          ->create($request->stripeToken);

    $date = \Carbon\Carbon::now();

    $membership = Membership::create([
      'uid' => $user->id,
      'package' => $user->payment,
      'start' => $date,
      'end' => \Carbon\Carbon::now()->addMonths(1),
      'paytype' => 'credit card',
      'price' => $subscription['price'],
      'created_at' => now(),
      'updated_at' => now()
    ]);

    return view('paymentSuccess');

  }

  // public function category($category_id){
  //   $subcategory_id = SubCategory::where('cid', $category_id)->value('id');
  //   $array['suppliers'] = SupplierProfile::where('subcatgoryid', $subcategory_id)->orderBy('promote', 'desc')->paginate(30);
  //   return view('category')->with($array);
  // }
  //
  public function search(Request $request)
  {
      if($request->action == "suppliers")
        $array['suppliers'] = SupplierProfile::leftJoin('sub_categories', 'supplier_profiles.subcatgoryid', '=', 'sub_categories.id')
                              ->leftJoin('users', 'supplier_profiles.uid', '=', 'users.id')
                              ->where('users.company', 'like', "%{$request->q}%")
                              ->orderBy('promote', 'desc')
                              ->paginate(30);
      else
        $array['suppliers'] = collect([]);


      if($request->action == "products")
      {
        $array['products'] = Product::Join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
                              ->select('products.name', 'products.sid', 'products.name', 'products.purl', 'products.img', 'products.price')
                              ->where('products.name', 'like', "%{$request->q}%");

        if(isset($request->sortBy))
        {
          $array['products'] = $request->sortBy == "MinToMax"
                             ? $array['products']->orderBy('price')
                             : $array['products']->orderByDesc('price');
        } else {
          $array['products'] = $array['products']->orderByDesc('products.id');
        }

        $array['products'] = $array['products']->paginate(20);


      }

      else
        $array['products'] = collect([]);



      $array['requests'] = collect([]);


      $array['ad2'] = DB::select('SELECT * FROM supplier_profiles JOIN users ON supplier_profiles.uid = users.id ORDER BY RAND() , promote DESC LIMIT 8');
      return view('category')->with($array);
  }

  public function category($category_id){

    // $array['suppliers'] = DB::select('SELECT * FROM supplier_profiles JOIN sub_categories ON supplier_profiles.subcatgoryid = sub_categories.id
    //                                   WHERE sub_categories.cid = ?  ORDER BY supplier_profiles.promote DESC', [$category_id]);
    $array['cid'] = $category_id;
    $array['category'] = Category::find($category_id);
    $array['suppliers'] = SupplierProfile::leftJoin('sub_categories', 'supplier_profiles.subcatgoryid', '=', 'sub_categories.id')
                          ->where('sub_categories.cid', $category_id)
                          ->orderBy('promote', 'desc')
                          ->paginate(30);
    $array['products'] = Product::Join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
                          ->where('sub_categories.cid', $category_id)
                          ->select('products.name', 'products.sid', 'products.name', 'products.purl', 'products.img', 'products.price');

    if(isset($request->sortBy))
    {
       $request->sortBy == "MinToMax"
                         ? $array['products']->orderBy('price')
                         : $array['products']->orderByDesc('price');
    } else {
      $array['products'] = $array['products']->orderByDesc('products.id');
    }

    $array['products'] = $array['products']->paginate(20);
    $array['requests'] = BuyerPost::Join('sub_categories', 'buyer_posts.sub_category_id', '=', 'sub_categories.id')
                          ->where('sub_categories.cid', $category_id)
                          ->select('buyer_posts.title', 'buyer_posts.quantity', 'buyer_posts.qtype', 'buyer_posts.expire', 'buyer_posts.img', 'buyer_posts.uid', 'buyer_posts.created_at',  'buyer_posts.comment',  'buyer_posts.contact_url')
                          ->orderBy('buyer_posts.id', 'desc')
                          ->paginate(30);

    $array['ad2'] = DB::select('SELECT * FROM supplier_profiles JOIN users ON supplier_profiles.uid = users.id ORDER BY RAND() , promote DESC LIMIT 8');
    return view('category')->with($array);
  }

  public function subCategory($category_id, $subcategory_id){
    $array['cid'] = $category_id;
    $array['category'] = Category::find($category_id);
    $array['scid'] = $subcategory_id;
    $array['subcategory'] = SubCategory::find($subcategory_id);
    $array['suppliers'] = SupplierProfile::leftJoin('sub_categories', 'supplier_profiles.subcatgoryid', '=', 'sub_categories.id')
                          ->where('sub_categories.id', $subcategory_id)
                          ->orderBy('promote', 'desc')
                          ->paginate(30);
    $array['products'] = Product::Join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
                          ->where('sub_categories.id', $subcategory_id)
                          ->select('products.name', 'products.sid', 'products.name', 'products.purl', 'products.img', 'products.price');

    if(isset(request()->sortBy))
    {
       request()->sortBy == "MinToMax"
                         ? $array['products']->orderBy('price')
                         : $array['products']->orderByDesc('price');
    } else {
      $array['products'] = $array['products']->orderByDesc('products.id');
    }
    $array['products'] = $array['products']->paginate(20);

    $array['requests'] = BuyerPost::Join('sub_categories', 'buyer_posts.sub_category_id', '=', 'sub_categories.id')
                          ->where('sub_categories.id', $subcategory_id)
                          ->select('buyer_posts.title', 'buyer_posts.quantity', 'buyer_posts.qtype', 'buyer_posts.expire', 'buyer_posts.img', 'buyer_posts.uid', 'buyer_posts.created_at',  'buyer_posts.comment',  'buyer_posts.contact_url')
                          ->orderBy('buyer_posts.id', 'desc')
                          ->paginate(30);

    $array['ad2'] = DB::select('SELECT * FROM supplier_profiles JOIN users ON supplier_profiles.uid = users.id ORDER BY RAND() , promote DESC LIMIT 8');
    return view('subcategory')->with($array);
  }

  public function company($id){
    $count = \App\SupplierProfile::where('uid',$id)->count();
    if($count < 1){
      return abort(404);
    }
    // dd($count);

    $array['user'] = User::find($id);
    return view('profile.index')->with($array);
  }
  public function companyProfile($id){
    $count = \App\SupplierProfile::where('uid',$id)->count();
    if($count < 1){
      return abort(404);
    }
    $array['user'] = User::find($id);
    return view('profile.profile')->with($array);
  }
  public function companyProduct($id){
    $count = \App\SupplierProfile::where('uid',$id)->count();
    if($count < 1){
      return abort(404);
    }
    $array['user'] = User::find($id);
    return view('profile.product')->with($array);
  }
  public function companyContact($id){
    $count = \App\SupplierProfile::where('uid',$id)->count();
    if($count < 1){
      return abort(404);
    }
    $array['user'] = User::find($id);
    return view('profile.contact')->with($array);
  }

  public function result(Request $request){
        $result=City::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        return response()->json($result);
    }

  public function autocomplete_search(Request $request)
  {
      $action = $request->action;

      if($action == "products")
      {
        $result = Product::where('name', 'LIKE', "%{$request->q}%")->take(5)->get(['name']);

        $result = $result->map(function($item){
          return $item->name;
        })->all();
      }


      if($action == "suppliers")
      {
        $result = User::whereHas('supplier')->where('company', 'LIKE', "%{$request->q}%")->take(5)->get(['company']);

        $result = $result->map(function($item){
          return $item->company;
        })->all();
      }

      return response()->json($result);
  }

}
