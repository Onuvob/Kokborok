<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Request;
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
    protected $redirectTo = '/profile';

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
            'name' => ['required', 'string', 'max:55', 'min:5'],
            'email' => ['required', 'string', 'email', 'max:55', 'unique:users'],
            'phone' => ['required', 'string', 'max:55', 'min:11', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'profession' => ['required', 'string', 'max:55'],
            'genus' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        //getting the time when a user get registered
        $currTime = now()->toDateString();

        //getting the user ip
        $ip = Request::ip();

        //random user id
        //$id = uniqid();

        return User::create([
            //'id' => $id,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'profession' => $data['profession'],
            'genus' => $data['genus'],
            'gender' => $data['gender'],
            'last_login_at' => $currTime,
            'last_login_ip' => $ip,
            'password' => Hash::make($data['password']),
        ]);

        //alternate of the above with fillable or gaurded behaviour
        //return User::create($data);
    }
}
