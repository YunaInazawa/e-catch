<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Store;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::STORE_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
        $this->middleware('guest:store');
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
            'name' => ['required', 'string', 'max:255'],
            'login_id' => ['required', 'string', 'max:255', 'alpha_num', 'unique:stores'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:stores'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Store
     */
    protected function create(array $data)
    {
        return Store::create([
            'name' => $data['name'],
            'login_id' => $data['login_id'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'postal_code' => $data['postal_code'], 
            'street_addr' => $data['street_addr'], 
            'TEL' => $data['TEL'], 
            'rep_first_name' => $data['rep_first_name'], 
            'rep_last_name' => $data['rep_last_name'], 
            'genre_id' => $data['genre_id'], 
        ]);
    }

    public function showRegistrationForm()
    {
        return view('store.auth.register');
    }

    protected function guard()
    {
        return Auth::guard('store');
    }
}
