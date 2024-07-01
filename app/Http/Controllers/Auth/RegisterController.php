<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


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
    protected $redirectTo = '/home';

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
            'firstname' => ['required', 'string', 'max:255'],
            'secondname' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required','numeric'],
            // 'type' => ['required',Rule::in(['center','dentist'])],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], //password_confirmation
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $url = explode('/',url()->previous());
        $num = array_key_last($url);
        $type = $url[$num] ;

        if ($url[$num] == 'register' || $url[$num] == "" || $url[$num] == " "){
            $type = 'center';
        }

        return User::create([
            'firstname' => $data['firstname'],
            'secondname' => $data['secondname'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'type' => $type,
            'password' => Hash::make($data['password']),
        ]);
    }

}
