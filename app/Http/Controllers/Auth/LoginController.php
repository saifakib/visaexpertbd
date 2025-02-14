<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Auth::check() && Auth::user()->role_id == 0)
        {
            $this->redirectTo = route('admin.visaCategories');
        }
        elseif(Auth::check() && Auth::user()->role_id == 1){
            $this->redirectTo = route('profile');
        } elseif(Auth::check() && Auth::user()->role_id == 2){ 
            $this->redirectTo = route('profile');
        }
        $this->middleware('guest')->except('logout');
    }
}
