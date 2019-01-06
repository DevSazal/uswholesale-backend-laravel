<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BuyerPost;
use App\SubCategory;
use Auth;

class BuyerPostController extends Controller
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
        $array['posts'] = BuyerPost::paginate(20);
        return view('admin.BuyerPost.index')->with($array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array['subcategories'] = SubCategory::all();
        return view('admin.BuyerPost.create')->with($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request, BuyerPost $p)
     {
         if($request->img->getClientOriginalName()){
             $ext = $request->img->getClientOriginalExtension();
             $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
             $request->img->storeAs('public/ProductImg',$file);
             }else{
             $file = '';
             }

           $p->title = $request->name;
           $p->sub_category_id = $request->scid;
           $p->quantity = $request->quantity;
           $p->qtype = $request->qtype;
           $p->img = $file;
           $p->comment = $request->comment;
           $p->expire = $request->date;

           $p->uid = Auth::user()->id;
           $p->save();

           return redirect('dashboard/request');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
