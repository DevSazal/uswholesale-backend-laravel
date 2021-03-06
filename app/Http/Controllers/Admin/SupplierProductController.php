<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SupplierProfile;
use App\Product;
use App\SubCategory;

use Auth;

class SupplierProductController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!auth()->user()->supplier)
        //   return redirect(route('admin.sbtype.index'));
        //
        // $supplier = SupplierProfile::find(auth()->user()->supplier->id);
        //
        // $array['products'] = $supplier->products()->paginate(20);
        //
        // return view('admin.supplierproduct.index')->with($array);
        if(date('Y-m-d') > auth()->user()->membership['end']){
          return redirect(route('dashboard'))->with('errorSupplier', 'Your Supplier functionality is not actived. Please extend your membership by paying.');
        }

        $array['products'] = Product::where('sid', Auth::user()->supplier['id'])->paginate(20);
        return view('admin.supplierproduct.index')->with($array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if($x = \App\Product::where('sid', Auth::user()->supplier['id'])->count() >= Auth::user()->plan['products']){
          return redirect(route('admin.product.index'))->with('error', 'You have reached the maximum number of products that you can store.');
        }
        if(date('Y-m-d') > auth()->user()->membership->end){
          return redirect(route('admin.product.index'))->with('error', 'Your membership plan is not actived. Please renew your plan.');
        }

        $array['subcategories'] = SubCategory::all();
        return view('admin.supplierproduct.create')->with($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request, Product $p)
     {
         // if(\App\Product::where('sid', Auth::user()->supplier['id'])->count() >= Auth::user()->plan['products']){
         //   return redirect(route('admin.product.index'))->with('error', 'You have reached the maximum number of products that you can store.');
         // }

         // if(count($request->img) > auth()->user()->plan['photos']) {
         //   return redirect(route('admin.product.create'))->withInput()->with('error', 'Your current plan prevents you from uploading more than '.auth()->user()->plan->photos.' photos');
         // }

         $validator = \Validator::make($request->all(), [
           'name' => 'required',
           'description' => 'required',
           'purl' => 'required',
           'scid' => 'required',
           'price' => 'required|numeric',
           // 'img.*' => 'dimensions:ratio=3/1'
         ]);

         if($validator->fails())
          return back()->withInput()->withError($validator->errors());



         if($request->img->getClientOriginalName()){
             $ext = $request->img->getClientOriginalExtension();
             $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
             $request->img->storeAs('public/ProductImg',$file);
             }else{
             $file = '';
             }

           $p->name = $request->name;
           $p->sub_category_id = $request->scid;
           $p->price = $request->price;
           $p->img = $file;
           $p->description = $request->description;
           $p->purl = $request->purl;

           $p->sid = Auth::user()->supplier->id;
           $p->save();

           return redirect('dashboard/product');

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $array['product'] = Product::find($id);;
      $array['subcategories'] = SubCategory::all();
      return view('admin.supplierproduct.edit')->with($array);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $p = Product::find($id);

        if($request->img->getClientOriginalName()){
            $ext = $request->img->getClientOriginalExtension();
            $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
            $request->img->storeAs('public/ProductImg',$file);
            }else{
              if(!$p->img)
                  $file = '';
              else
                  $file = $p->img;
            }

          $p->name = $request->name;
          $p->sub_category_id = $request->scid;
          $p->price = $request->price;
          $p->img = $file;
          $p->description = $request->description;
          $p->purl = $request->purl;

          // $p->sid = Auth::user()->supplier->id;
          $p->save();

          return redirect('dashboard/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('dashboard/product');
    }
}
