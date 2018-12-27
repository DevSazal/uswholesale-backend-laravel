<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SupplierProfile;
use App\SubCategory;
use Auth;
USE DB;
class SupplierProfileController extends Controller
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
        $id = Auth::user()->id;
        $ad = DB::table('supplier_profiles')->where('uid', $id)->value('id');
        if($ad){
          $key = $ad;
          return redirect('dashboard/profile/'.$key.'/edit');
          // var_dump($ad);
        }else{
          $array['subcategories'] = SubCategory::all();
          return view('admin.sprofile.create')->with($array);
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
    public function store(Request $request, SupplierProfile $sp)
    {
        if($request->logo->getClientOriginalName()){
            $ext = $request->logo->getClientOriginalExtension();
            $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
            $request->logo->storeAs('public/CompanyLogo',$file);
            }else{
            $file = '';
            }
        if($request->img->getClientOriginalName()){
                $ext = $request->img->getClientOriginalExtension();
                $file2 = date('YmdHis').'_'.rand(1,999).'.'.$ext;
                $request->img->storeAs('public/CoverPhoto',$file2);
          }else{
                $file2 = '';
          }
          if($request->banner_img->getClientOriginalName()){
              $ext = $request->banner_img->getClientOriginalExtension();
              $file3 = date('YmdHis').'_'.rand(1,999).'.'.$ext;
              $request->banner_img->storeAs('public/BannerImg',$file3);
              }else{
              $file3 = '';
              }
          $sp->uid = Auth::user()->id;
          $sp->contact_person = $request->cp;
          $sp->est = $request->est;
          $sp->employee = $request->employee;
          $sp->website = $request->website;
          $sp->fax = $request->fax;
          $sp->summary = $request->summary;
          $sp->description = $request->description;
          $sp->logo = $file;
          $sp->img = $file2;
          $sp->banner_img = $file3;
          $sp->url = $request->url;
          $sp->fb = $request->fb;
          $sp->twitter = $request->twitter;
          $sp->linkedin = $request->linkedin;
          $sp->google = $request->google;
          $sp->pinterest = $request->pinterest;
          $sp->subcatgoryid = $request->scid;
          $sp->supplier_service_title = $request->supplier_service_title;
          $sp->all_product_names = $request->all_product_names;
          $sp->save();

          return redirect('dashboard');

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
         $array['sp'] = SupplierProfile::find($id);;
         $array['subcategories'] = SubCategory::all();
         return view('admin.sprofile.edit')->with($array);
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
      $sp = SupplierProfile::find($id);
      if($request->logo->getClientOriginalName()){
          $ext = $request->logo->getClientOriginalExtension();
          $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
          $request->logo->storeAs('public/CompanyLogo',$file);
          }else{
            if(!$sp->logo)
                $file = '';
            else
                $file = $sp->logo;
          }
      if($request->img->getClientOriginalName()){
              $ext = $request->img->getClientOriginalExtension();
              $file2 = date('YmdHis').'_'.rand(1,999).'.'.$ext;
              $request->img->storeAs('public/CoverPhoto',$file2);
        }else{
          if(!$sp->img)
              $file2 = '';
          else
              $file2 = $sp->logo;
        }
        if($request->banner_img->getClientOriginalName()){
            $ext = $request->banner_img->getClientOriginalExtension();
            $file3 = date('YmdHis').'_'.rand(1,999).'.'.$ext;
            $request->banner_img->storeAs('public/BannerImg',$file3);
            }else{
              if(!$sp->banner_img)
                  $file3 = '';
              else
                  $file3 = $sp->banner_img;
            }

        $sp->uid = Auth::user()->id;
        $sp->contact_person = $request->cp;
        $sp->est = $request->est;
        $sp->employee = $request->employee;
        $sp->website = $request->website;
        $sp->fax = $request->fax;
        $sp->summary = $request->summary;
        $sp->description = $request->description;
        $sp->logo = $file;
        $sp->img = $file2;
        $sp->banner_img = $file3;
        $sp->url = $request->url;
        $sp->fb = $request->fb;
        $sp->twitter = $request->twitter;
        $sp->linkedin = $request->linkedin;
        $sp->google = $request->google;
        $sp->pinterest = $request->pinterest;
        $sp->subcatgoryid = $request->scid;
        $sp->supplier_service_title = $request->supplier_service_title;
        $sp->all_product_names = $request->all_product_names;
        $sp->save();

        return redirect('dashboard/profile/');
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
