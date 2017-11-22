<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Validator;
use App\User;
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
     * Auth guard
     *
     * @var
     */
    protected $auth;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->middleware('guest', ['except' => 'logout']);
           $this->auth = $auth;
    }


    public function login(Request $request){

        $username      = $request->get('username');
        $password   = $request->get('password');
        $remember   = $request->get('remember');
        $crendials = [
            'username'     => $username,
            'password'  => $password,
			'activated'  => 1,
        ];
        // $validator = Validator::make($request->all(), [
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);


        // if ($validator->fails()) {
        //     return redirect('auth/login')
        //                 ->withErrors($validator)
        //                 ->withInput();
        if ($this->auth->attempt($crendials, $remember == 1 ? true : false)) {

            return redirect("/");

        } else{

            return redirect("auth/login")->back()
                ->with('message','Incorrect username or password')
                ->with('status', 'danger')
                ->withInput();
        }
        
    }

}
