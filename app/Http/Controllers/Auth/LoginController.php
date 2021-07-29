<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Tzsk\Otp\Facades\Otp;

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
        /**
         * Now you need to have a directory in your filesystem where the package can do it's magic.
         * Make sure you prevent access to this directory and files using apache or ngnix config.
         */

        // Let's assume the directory you have created is `./otp-tmp`
        $manager = otp('./otp-tmp');

        /**
         * Default properties -
         * $digits -> 4
         * $expiry -> 10 min
         */

        $manager->digits(6); // To change the number of OTP digits
        $manager->expiry(20); // To change the mins until expiry

        $manager->generate($unique_secret); // Will return a string of OTP

        $manager->match($otp, $unique_secret); // Will return true or false.

        $manager->digits(6)->expiry(10)->generate($unique_secret);

        // And...

        $manager->digits(6)->expiry(10)->match($otp, $unique_secret);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
