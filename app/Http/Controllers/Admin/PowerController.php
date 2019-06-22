<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use DB;
use Auth;

class PowerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function users(){
      $array['users'] = User::paginate(15);
      return view('admin.user.index')->with($array);
    }
}
