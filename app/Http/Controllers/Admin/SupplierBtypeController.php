<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BusinessType;
use App\SupplierBtype;

use Auth;
use DB;

class SupplierBtypeController extends Controller
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
      $role = Auth::user()->role;
      $id = Auth::user()->id;
      if($role == 1){
        $sbt = DB::table('supplier_btypes')->where('uid', $id)->count();
        if($sbt > 0){
          return redirect('dashboard/profile');
        }else{
          $array['btypes'] = BusinessType::all();
          return view('admin.sbt.index')->with($array);
        }
      }else {
         return redirect('dashboard/profile');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $sbtype->uid = Auth::user()->id;
        // $sbtype->btid = $request->sbtype;
        // $sbtype->save();


        $typeIdArray =  $request->sbtype;
        $count = count($typeIdArray);

        for($i = 0; $i < $count; $i++){
            $sbtype = new SupplierBtype();
            $sbtype->btid = $typeIdArray[$i];
            $sbtype->uid = Auth::user()->id;
            $sbtype->save();
        }

        return redirect('dashboard/profile');
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
