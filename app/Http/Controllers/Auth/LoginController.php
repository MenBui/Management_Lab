<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() {
        return view('auth/login');
    }
    public function postLogin(loginRequest $request){
        $login = array(
            'email'=>$request->email,
            'password'=>$request->password

        );
        if(Auth::attempt($login)){
            return redirect()->route('home');
        }
        else
        {
            return redirect()->route('login')->with(['flash_level'=>'danger','flash_message'=>'Tài khoản hoặc mật khẩu không chính xác']);

        }


    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login');
    }
}
