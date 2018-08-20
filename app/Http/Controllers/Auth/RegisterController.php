<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreUser;

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
    protected $redirectTo = '/';

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
            'name' => 'required|string|',
            'email' => 'unique:users,email|required|email',
            'country' => 'required|string|',
            'zip_code' => 'required|integer|',
            'city' => 'required|string|',
            'address' => 'required|string',
            'phone_number' => 'required|integer|',
            'account_number' => 'required|integer|',
            'vat_number' => 'required|integer|',
            'password' => 'required|alpha_num|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
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
            'country' => $data['country'],
            'zip_code' => $data['zip_code'],
            'city' => $data['city'],
            'address' => $data['address'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
            'phone_number2' => $data['phone_number2'],
            'account_number' => $data['account_number'],
            'vat_number' => $data['vat_number'],
        ]);
    }
}
