<?php

namespace App\Http\Controllers\Supplier;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function store(Request $request){
    	$rules=[
    		'name' =>'required',
    		'username'=>'required|unique:users',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:6',
    		'phone'=>'required',
    		'city'=>'required',
    		'country'=>'required',
    	];

    	$this->validate($request,$rules);
    	
    	$supplier= new User;

    	$supplier->name=$request->name;
    	$supplier->username=$request->username;
    	$supplier->password=bcrypt($request->password);
    	$supplier->email=$request->email;
    	$supplier->phone=$request->phone;
    	$supplier->city=$request->city;
    	$supplier->country=$request->country;
    	$supplier->payment=0;
    	$supplier->address=$request->address;
    	$supplier->company=$request->company;
    	$supplier->role=1;
    	
    	$supplier->save();

    	return view('paymentCheck');

    }
}
