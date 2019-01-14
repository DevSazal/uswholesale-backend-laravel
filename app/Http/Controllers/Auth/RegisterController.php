<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/premium-signup/payment';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        		'username'=> ['required', 'min:6', 'alpha_dash', 'unique:users'],
            // 'username'=> ['required', 'min:6', 'alpha_dash', 'regex:/^\S*$/u', 'unique:users'],
            'company'=> [],
            'phone1'=>  ['required'],
            'phone2'=>  ['required'],
        	  'phone'=>  ['required'],
        		'address'=> ['required'],
        		'city'=>  ['required'],
        		'country'=>  ['required'],
            'package_id'=> [],
        ]);
        // payment means package_id
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username'=> $data['username'],
            'company'=> $data['company'],
        	  'phone'=>  $data['phone1'].''.$data['phone2'].''.$data['phone'],
        		'address'=> $data['address'],
        		'city'=>  $data['city'],
        		'country_id'=>  $data['country'],
            'role'=> 1,
            'payment'=> $data['package_id'],
        ]);
        // payment means package_id

        // return view($data['package_id']);
    }
}
