<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\UtilController;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $util = new UtilController();
        $usuarios = User::where('active', 1)->count();

        if($usuarios == 0){
            $firstUser = new User();

            $firstUser->name = "admin";
            $firstUser->email = "admin@admin.com";
            $firstUser->password = bcrypt("admin");
            $firstUser->user_token = $util->generateRandomString();
            $firstUser->reference = $firstUser->user_token;
            $firstUser->admin = true;
            $firstUser->moderator = true;
            $firstUser->can_chat = true;
            $firstUser->can_bet = true;
            $firstUser->active = true;

            $firstUser->save();
        }

//        if(Config::get('app.debug')){
//            $user = User::where('active', 1)->first();
//
//            Auth::login($user);
//        }

        $this->middleware('guest', ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
