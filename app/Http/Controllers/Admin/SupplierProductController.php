<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $array['products'] = Product::paginate(20);
        return view('admin.supplierproduct.index')->with($array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
