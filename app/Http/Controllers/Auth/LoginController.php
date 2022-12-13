<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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
    //$this->middleware('guest')->except('logout');
    }
    public function VerifierLogin(Request $request)
    {

    //dd($request->email);
    //dd($request->mdp);
        //dd(Auth::guard('prestataire')->user());
       // dd(Auth::guard('prestataire')->attempt(['email' => $request->email, 'password' => $request->mdp]));
//        dd(Auth::guard('web')->user());

        if (Auth::guard('gerent')->attempt(['email' => $request->email, 'password' => $request->mdp])) {

//            dd(Auth::guard('gerent')->user());

            return redirect()->intended(route('dashboard-gerent'));
        }elseif
        (Auth::guard('prestataire')->attempt(['email' => $request->email, 'password' => $request->mdp])) {
         //   dd(Auth::guard('prestataire')->user());

            return redirect()->intended(route('profile-prestataire'));
            //return redirect()->intended(route('superadminHome'));
        }elseif (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->mdp])) {
            //   dd(Auth::guard('prestataire')->user());

            return redirect()->intended(route('rendez-vous'));

        }


        // return back()->withInput($request->only('email'))->with('error');
        return $this->sendFailedLoginResponse($request);
    }



    public function logout()
    {
        Auth::logout();
        Session::flush();
        //alert()->success('You have been logged out.', 'Good bye!');
        Alert::success('Success Message', 'Optional Title');
        return Redirect('/');


    }
}
