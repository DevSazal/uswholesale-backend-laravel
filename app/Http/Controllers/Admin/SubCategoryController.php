<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SubCategory;
use App\Category;

class SubCategoryController extends Controller
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
      $array['subcategories'] = SubCategory::paginate(20);
      return view('admin.subcategory.index')->with($array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array['categories'] = Category::all();
        return view('admin.subcategory.create')->with($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request, SubCategory $subcategory)
     {
         $subcategory->name = $request->name;
         $subcategory->cid = $request->main_category;
         $subcategory->status = $request->status;
         $subcategory->save();
         return redirect('dashboard/subcategory');
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
     public function edit(SubCategory $subcategory)
     {
         $array['subcategory'] = $subcategory;
         $array['categories'] = Category::all();
         return view('admin.subcategory.edit')->with($array);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, SubCategory $subcategory)
     {
         $subcategory->name = $request->name;
         $subcategory->cid = $request->main_category;
         $subcategory->status = $request->status;
         $subcategory->save();
         return redirect('dashboard/subcategory');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         SubCategory::destroy($id);
         return redirect('dashboard/subcategory');
     }
}
