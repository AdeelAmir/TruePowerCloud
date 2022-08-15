<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
    /*protected $redirectTo = RouteServiceProvider::HOME;*/
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        if (isset($user)) {
            if($user->role_id != 1) {
                $Profile = DB::table('profiles')
                    ->where('user_id', '=', Auth::id())
                    ->get();
                if($Profile[0]->card_holder_name == '' || $Profile[0]->card_number == '' || $Profile[0]->card_cvv == '' || $Profile[0]->card_expiration_month == '' || $Profile[0]->card_expiration_year == '') {
                    return redirect()->route('account.payment-methods');
                }
            } else {
                return redirect()->route('dashboard');
            }
        }

        return redirect('/login');
    }
}