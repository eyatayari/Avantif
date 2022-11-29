<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
       // $this->middleware('guest')->except('logout');
    }
    public function VerifierLogin(Request $request)
    {

       dd($request->input());
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

//        dd(
//            Auth::guard('enseignant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember')),
//            Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember')),
//            Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))
//        );

        if (Auth::guard('Gerent')->attempt(['email' => $request->email, 'password' => $request->password])) {



            return redirect()->intended(route('profile-gerent'));
        }
        if (Auth::guard('Prestataire')->attempt(['email' => $request->email, 'password' => $request->password])) {
         //   dd( Auth::guard('superadmin')->user()->id);

            return redirect()->intended(route('profile-prestataire'));
            //return redirect()->intended(route('superadminHome'));
        }


        // return back()->withInput($request->only('email', 'remember'))->with('error');
        return $this->sendFailedLoginResponse($request);
    }

    /*public function showSuperAdmintLoginForm()
    {
        return view('auth.login', ['url' => 'superadmin']);
    }

    public function superAdminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/superadmin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }*/

    public function logout()
    {
        Auth::logout();
        Session::flush();
        alert()->success('You have been logged out.', 'Good bye!');
        SweetAlert::success('Success Message', 'Optional Title');
        return Redirect::route('ShowloginForm');


    }
}
