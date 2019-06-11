<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        $id = Auth::user()->id;
        if($role == 1){
          $ad = DB::table('supplier_profiles')->where('uid', $id)->count();
          $sbt = DB::table('supplier_btypes')->where('uid', $id)->count();
          if($ad > 0 && $sbt > 0){
            return view('admin.index');
          }else{
            return redirect('dashboard/sbtype');
          }
        }else {
          return view('admin.index');
        }
    }

    public function error()
    {
      return view('error.403');
    }
}
